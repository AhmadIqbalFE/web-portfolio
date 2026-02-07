<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{
    // ===========================
    // FRONTEND PROJECT LIST
    // ===========================
    public function index()
    {
        $projects = Project::latest()->get();
        return view('project', compact('projects'));
    }

    // ===========================
    // ADMIN PROJECT LIST
    // ===========================
    public function indexAdmin()
    {
        $projects = Project::latest()->get();
        return view('admin.project.index', compact('projects'));
    }

    // FORM CREATE (Admin)
    public function create()
    {
        return view('admin.project.create');
    }

    // STORE DATA (Admin)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('projects', 'public');
        }

        Project::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image,
            'project_link' => $request->project_link,
            'description' => $request->description,
            'author' => 'Ahmad Iqbal',
        ]);

        return redirect()->route('admin.project.index')
                         ->with('success', 'Project berhasil ditambahkan!');
    }

    // EDIT DATA (Admin)
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    // UPDATE DATA (Admin)
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'project_link' => 'required',
        ]);

        // jika ada gambar baru
        if ($request->hasFile('image')) {

            // hapus gambar lama
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            // upload gambar baru
            $project->image = $request->file('image')->store('projects', 'public');
        }

        // update field text
        $project->title = $request->title;
        $project->category = $request->category;
        $project->description = $request->description;

        // SIMPAN PERUBAHAN
        $project->save();

        return redirect()->route('admin.project.index')
                         ->with('success', 'Project berhasil diperbarui!');
    }

    // DELETE DATA (Admin)
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.project.index')
                         ->with('success', 'Project berhasil dihapus!');
    }

    // ADMIN DASHBOARD
    public function admin()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.dashboard', compact('projects'));
    }

    public function public()
    {
        $projects = Project::latest()->get();
        return view('home', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('project', compact('project'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

         Mail::raw(
        "From: {$request->email}\n\n{$request->message}",
        function ($mail) use ($request) {
            $mail->to('a.iqbal27112005@gmail.com')
                 ->subject($request->subject);
        }
    );


        return back()->with('success', 'Pesan berhasil dikirim!');
    }

}
