@extends('layouts.admin')

<main>
        @yield('content') </main>

@section('content')
<div class="max-w-5xl mx-auto mt-12 bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-4">List Project</h2>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-neutral-600">
                <th class="p-3 border">Judul</th>
                <th class="p-3 border">Gambar</th>
                <th class="p-3 border">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td class="p-3 border">{{ $project->title }}</td>

                <td class="p-3 border">
                    @if($project->image)
                        <img src="{{ asset('storage/'.$project->image) }}" 
                             class="h-16 rounded">
                    @endif
                </td>

                <td class="p-3 border">
                    <a href="{{ route('project.edit', $project->id) }}" 
                       class="px-3 py-1 bg-stone-500 hover:bg-stone-600 text-white rounded">
                       Edit
                    </a>

                    <form action="{{ route('project.delete', $project->id) }}" 
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <div class="mt-3">
                        <button class="px-3 py-1 bg-red-600 hover:bg-red-500 text-white rounded"
                                onclick="return confirm('Anda Yakin akan hapus project ini?')">
                            Delete
                        </button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
