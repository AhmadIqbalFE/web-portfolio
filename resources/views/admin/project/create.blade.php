@extends('layouts.admin')

@section('content')
<div class="w-full flex justify-center px-4 sm:px-6 lg:px-8 py-12">

    <div class="w-full max-w-md sm:max-w-lg md:max-w-2xl bg-white p-6 sm:p-8 rounded-xl shadow-lg">

        <h1 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900">Add New Project</h1>

        <form action="{{ route('project.store') }}" method="POST" 
              enctype="multipart/form-data" 
              class="space-y-5">
            @csrf

            <div>
                <label class="font-semibold block mb-1">Title</label>
                <input type="text" name="title"
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500"
                    required>
            </div>

            <div>
                <label class="font-semibold block mb-1">Category</label>
                <input type="text" name="category"
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500">
            </div>

            <div>
                <label class="font-semibold block mb-1">Image</label>
                <input type="file" name="image"
                    class="w-full p-2 border rounded-lg bg-gray-50">
            </div>

            <div class="mb-4">
                <label class="font-semibold">Link Project</label>
                <input type="text" name="project_link" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500" placeholder="https://contoh.com/projek">
            </div>


            <div>
                <label class="font-semibold block mb-1">Description</label>
                <textarea name="description" rows="4"
                    class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-stone-500"></textarea>
            </div>

            <button 
                class="w-full sm:w-auto px-4 py-2 bg-stone-700 text-white rounded-lg hover:bg-stone-500 transform hover:scale-110 transition duration-300 ease-in-out">
                Save Project
            </button>

        </form>

    </div>

</div>
@endsection
