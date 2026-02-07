<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin Panel</title>
</head>

<body class="bg-stone-400">

<div class="flex">
    <button id="menuBtn" class="lg:hidden fixed top-4 left-4 z-50 
        bg-zinc-800 hover:bg-zinc-600 text-white p-2 rounded-md">

        <span id="hamburgerIcon" class="text-ml">&#9776;</span>
        <span id="closeIcon" class="text-2xl hidden">&times;</span>
    </button>

    <aside id="sidebar" 
        class="w-64 bg-zinc-400 shadow h-screen fixed transform 
               -translate-x-full lg:translate-x-0 transition-all duration-300 z-[9999]">

        <div class="p-4 border-b flex justify-between items-center">
            <h2 class="font-bold text-xl">Admin Panel</h2>

            <button id="closeInsideBtn" class="text-2xl lg:hidden hover:bg-stone-300 rounded-full">&times;</button>
        </div>

        <nav class="p-4">
            <a href="{{ route('admin.dashboard') }}" 
               class="block p-2 rounded-full hover:bg-gray-200 mb-1 text-center">
                Dashboard
            </a>

            <a href="{{ route('project.create') }}" 
               class="block p-2 rounded-full hover:bg-gray-200 mb-1 text-center">
                Add Project
            </a>

            <a href="/project" 
               class="block p-2 rounded-full hover:bg-gray-200 mb-1 text-center">
                View Website
            </a>
        </nav>
    </aside>

    <main class="lg:ml-64 w-full p-4">
        @yield('content')
    </main>
</div>

@if(session('success'))
<div id="toast" class="fixed top-4 right-4 bg-neutral-600 text-white px-4 py-2 rounded shadow-lg">
    {{ session('success') }}
</div>

<script>
    setTimeout(() => {
        document.getElementById('toast').style.display = 'none';
    }, 3000);
</script>
@endif

<script>
    const sidebar = document.getElementById("sidebar");
    const menuBtn = document.getElementById("menuBtn");
    const closeInsideBtn = document.getElementById("closeInsideBtn");

    function openSidebar() {
        sidebar.classList.remove("-translate-x-full");
        menuBtn.classList.add("hidden");     
    }

    function closeSidebar() {
        sidebar.classList.add("-translate-x-full");
        menuBtn.classList.remove("hidden");  
    }

    menuBtn.addEventListener("click", openSidebar);

    closeInsideBtn.addEventListener("click", closeSidebar);

</script>

</body>
</html>
