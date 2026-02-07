@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto mt-12">
    <div class="bg-white px-6 py-4 rounded-xl shadow">

        <form action="{{ route('project.update', $project->id) }}" 
              method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                 <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Edit Project</h1>
                <label class="block font-semibold text-gray-700">Title</label>
                <input type="text" name="title" value="{{ $project->title }}"
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500">
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Category</label>
                <input type="text" name="category" value="{{ $project->category }}"
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500">
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">Current Image</label>

                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" 
                        class="w-40 h-40 object-cover rounded-lg shadow mb-3">
                @else
                    <p class="text-gray-500 text-sm">No image uploaded</p>
                @endif
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Replace Image</label>
                <input type="file" name="image"
                    class="w-full p-2 border rounded-lg bg-gray-50">
                <p class="text-sm text-stone-700 mt-1">Opsional: upload gambar baru.</p>
            </div>

            <div class="mb-4">
                <label class="font-semibold">Link Project</label>
                <input type="text" name="project_link" class="w-full p-2 border rounded-lg" value="{{ $project->project_link }}">
            </div>

            <div>
                <label class="block font-semibold text-gray-700">Description</label>
                <textarea name="description" rows="5"
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500">{{ $project->description }}</textarea>
            </div>

            <div class="pt-4">
                <button class="px-5 py-2 bg-stone-700 text-white rounded-lg hover:bg-stone-600">
                    Update Project
                </button>

                <a href="{{ route('project.index') }}" 
                    class="ml-3 px-5 py-2 bg-neutral-500 text-white rounded-lg hover:bg-neutral-400">
                    Cancel
                </a>
            </div>

        </form>

    </div>

</div>
@endsection
