@extends('layouts.admin')

@section('content')
<div class="p-6">

    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 mb-6">
        <h1 class="text-3xl font-bold text-gray-800 pt-3">Project Management</h1>

        <a href="{{ route('project.create') }}"
            class="px-4 py-2 bg-stone-700 text-white rounded-lg hover:bg-stone-800 w-full sm:w-auto text-center transform hover:scale-110 transition duration-300 ease-in-out">
            + Add Project
        </a>
    </div>

    <div class="bg-white shadow rounded-xl overflow-x-auto">

        <table class="min-w-full text-left">
            <thead class="bg-neutral-600 border-b full-border">
                <tr>
                    <th class="p-4 whitespace-nowrap text-white text-center">Image</th>
                    <th class="p-4 whitespace-nowrap text-white text-center">Title</th>
                    <th class="p-4 whitespace-nowrap text-white">Category</th>
                    <th class="p-4 whitespace-nowrap text-white">Created</th>
                    <th class="p-4 whitespace-nowrap text-white text-center">Option</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                <tr class="border-b hover:bg-gray-100">

                    <td class="p-4">
                        <img src="{{ asset('storage/' . $project->image) }}"
                            class="w-14 h-14 md:w-16 md:h-16 object-cover rounded mx-auto">
                    </td>

                    <td class="p-4 font-semibold">{{ $project->title }}</td>

                    <td class="p-4">
                        <span class="px-3 py-1 bg-gray-200 rounded text-sm">{{ $project->category }}</span>
                    </td>

                    <td class="p-4 text-gray-600">
                        {{ $project->created_at->diffForHumans() }}
                    </td>

                    <td class="p-4 text-center">
                        <div class="flex flex-col sm:flex-row gap-2 justify-center">
                            
                            <a href="{{ route('project.edit', $project->id) }}"
                               class="px-3 py-1 bg-stone-500 text-white rounded-lg hover:bg-stone-600 text-sm">
                                Edit
                            </a>

                            <form action="{{ route('project.delete', $project->id) }}" method="POST"
                                  onsubmit="return confirm('Anda yakin akan hapus project ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 text-sm w-full sm:w-auto">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- PAGINATION --}}
    <div class="mt-4">
        {{ $projects->links() }}
    </div>

</div>
@endsection
