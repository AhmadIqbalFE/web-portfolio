<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Project Page</title>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bg.jpg') }}')">

    <div class="w-full overflow-x-auto mx-auto px-5 pt-4 pb-4">
        <div class="flex bg-white rounded-2xl shadow mb-6 w-max md:gap-3 md:p-3   gap-1.5 p-2 text-sm">

            <a href="/" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('/') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} py-2 md:px-4 md:py-2 px-3 text-sm ">
            Personal
            </a>

            <a href="/project" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('project') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} px-4 md:px-4 md:py-2 py-1.5 text-sm">
            Project
            </a>

            <a href="/blog" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('blog') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} md:px-4 md:py-2 px-3 py-1.5 text-sm">
            Blogs
            </a>

            <a href="/contact" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('contact') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} md:px-4 md:py-2 px-3 py-1.5 text-sm">
            Contact
            </a>

        </div>
    </div>

<div class="mx-auto px-5 pb-10">
<section class="bg-white  rounded-2xl">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
          <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 ">This is My Project</h2>
         
          <p class="font-semibold text-gray-500 sm:text-xl dark:text-gray-400">Disini adalah bagian projek projek yang pernah saya buat, baik itu design UI/UX maupun Pemrograman...</p>
      </div> 
      <div class="grid gap-8 lg:grid-cols-2">
         @foreach ($projects as $project)
            <article class="p-4 bg-white rounded-lg border shadow">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-stone-700 text-neutral-300 text-xs font-medium px-2.5 py-0.5 rounded">
                        {{ $project->category }}
                    </span>
                    <span class="text-sm">{{ $project->created_at->diffForHumans() }}</span>
                </div>

               <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-lg p-4 gap-5">
                    <a href="{{ $project->project_link }}" target="_blank" class="md:w-1/2 w-full">
                        <div class="w-full h-full md:h-[260px] rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover block transition duration-700 hover:scale-110">
                        </div>
                    </a>

                        <div class="md:w-1/2 w-full p-2 flex flex-col justify-center">
                            <h2 class="text-xl font-bold mb-3">{{ $project->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ $project->description }}</p>

                            <div class="flex justify-between">
                                <span class="font-medium p-1">{{ $project->author }}</span>

                                <div class="flex gap-4">
                                    @auth
                                        @if(auth()->user()->role === 'admin')
                                           <a href="{{ url('/admin/project/'.$project->id.'/edit') }}" class="text-blue-600 hover:underline">
                                             Edit
                                           </a>

                                            <form action="{{ route('project.delete', $project->id) }}" method="POST" onsubmit="return confirm('Yakin hapus project ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-600 hover:underline">
                                                    Delete
                                                </button>
                                            </form>

                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                
            </article>
        @endforeach
       
      </div>  
  </div>
</section>
</div>
</div>

</body>
</html>