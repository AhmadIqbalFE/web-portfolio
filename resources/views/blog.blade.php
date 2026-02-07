<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Blog Page</title>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bg.jpg') }}')">

    <div class="w-full overflow-x-auto mx-auto px-5 pt-4">
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

<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white rounded-2xl p-8 shadow-lg w-fit text-center">
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor"
            class="mx-auto size-20 text-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
        </svg>

        <h2 class="mt-6 text-2xl font-bold text-gray-900">
            Hmm, nothing found
        </h2>

        <p class="mt-4 text-gray-700">
            Because this page still Maintenance :)
        </p>

        <p class="mt-6 text-sm font-bold text-stone-700">
            Coming soon, I'll create new features and make stable my websites :)
        </p>
    </div>
</div>


</body>
</html>