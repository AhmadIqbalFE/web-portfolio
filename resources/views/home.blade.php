<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
     <link rel="stylesheet" href="">
    <title>Personal</title>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bg.jpg') }}')">
<div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Foto Profile -->
        <div class="col-span-1">
            <div class="bg-white rounded-3xl shadow-lg p-6 text-center">

                <img src="img/profile.jpg"
                     class="w-40 h-40 mx-auto rounded-2xl object-cover">

                <h2 class="text-2xl font-bold mt-4 text-clay-500">Ahmad Iqbal</h2>
                <p class="text-gray-500 font-semibold">Student</p>

                <!-- SOCIAL -->
                <div class="flex justify-center gap-4 mt-4">
                    <a class="text-pink-600" href="https://www.instagram.com/amd_ibl/">
                        <img src="img/instagram.png" alt="" class="w-5 h-5 transform hover:scale-125 transition duration-200 ease-in-out">
                    </a>
                    <a class="text-purple-700" href="https://discord.com/users/1188651593952936028">
                      <img src="img/discord.png" alt="" class="w-5 h-5  transform hover:scale-125 transition duration-200 ease-in-out">
                    </a>
                    <a class="text-green-500" href="https://wa.me/6282179891902" target="blank">
                        <img src="img/wa.png" alt="" class="w-5 h-5 transform hover:scale-125 transition duration-200 ease-in-out">
                    </a>
                    <a class="text-blue-700" href="https://www.linkedin.com/in/ahmad-iqbal-software-engineer/">
                        <img src="img/linkedin.png" alt="" class="w-5 h-5 transform hover:scale-125 transition duration-200 ease-in-out">
                    </a>

                    <a class="text-blue-700" href="https://github.com/AhmadIqbalFE">
                        <img src="img/github.png" alt="" class="w-5 h-5 transform hover:scale-125 transition duration-200 ease-in-out">
                    </a>
                </div>

                <!--INFO Personal-->
                <div class="mt-6 space-y-4 text-left">

                    <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl transform hover:scale-105 transition duration-300 ease-in-out">                      
                        <img src="img/mobile.png" alt="" class="w-6 h-6"> 
                        <div class="">
                            <p class="text-sm text-gray-600">Number Phone</p>
                            <p class="font-medium" id="textToCopy">+62 821-7989-1902</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-3 items-center bg-gray-50 p-3 rounded-xl transform hover:scale-105 transition duration-300 ease-in-out">
                        <img src="img/gmail.png" alt="" class="w-6 h-6">
                        <div>
                            <p class="text-sm text-gray-600">Email</p>
                            <p class="font-medium">a.iqbal27112005@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex gap-3 items-center bg-gray-50 p-3 rounded-xl transform hover:scale-105 transition duration-300 ease-in-out">
                       <a href="https://www.google.com/maps/place/Cahaya+Rancamaya+Islamic+Boarding+School/@-6.6659503,106.8325423,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c8d8d3974ad5:0xcc90a9735e5af37f!8m2!3d-6.6659503!4d106.8351172!16s%2Fg%2F11bvzn9bk9?entry=ttu&g_ep=EgoyMDI1MTEzMC4wIKXMDSoASAFQAw%3D%3D">
                        <img src="img/maps.png" alt="" class="w-6 h-6">
                        <div>
                            <p class="text-sm text-gray-600">Location</p>
                            <p class="font-medium">Bogor, Indonesia</p>   
                       </a>                    
                        </div>
                    </div>
                    
                   
                    <div class="flex gap-3 items-center bg-gray-50 p-3 rounded-xl transform hover:scale-105 transition duration-300 ease-in-out">
                     <a href="https://calendar.google.com/calendar/r/day/2005/11/27" target="blank">
                        <img src="img/calendar.png" alt="" class="w-6 h-6">
                        <div>
                            <p class="text-sm text-gray-600">Birthday</p>
                            <p class="font-medium">November 27, 2005</p>
                     </a> 
                        </div>
                    </div>
                    

                </div>

                
                <a href="{{ asset('files/cv.pdf') }}" download>
                <button 
                    class="w-full mt-6 py-3 rounded-xl text-white font-semibold
                    bg-gradient-to-r from-stone-700 to-neutral-500 shadow transform hover:scale-105 transition duration-300 ease-in-out">
                    Download CV
                </button>
                </a>

            </div>
        </div>

        <!-- RIGHT CONTENT AREA -->
       <div class="col-span-2">
                <!-- NAVBar -->
            <div class="w-full overflow-x-auto mx-auto px-3 pt-4">
                <div class="flex bg-white rounded-2xl shadow mb-6 w-max md:gap-3 md:p-3   gap-1.5 p-2 text-sm">
                        <a href="/" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('/') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} py-2 md:px-4 md:py-2 px-3 text-sm">
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

                        {{--<a href="/admin/project" class="relative z-10 rounded-xl px-3 md:px-4 py-1.5 md:py-2 font-semibold transition-all duration-300
                            text-stone-800 hover:bg-white/30">
                            Admin
                        </a>--}}
                </div>
            </div>



                <!-- CONTENT ABOUT -->
                <div class="bg-white p-8 rounded-3xl shadow-lg">

                    <h1 class="text-2xl font-bold mb-3">About Me</h1>
                    <p class="text-gray-600 leading-relaxed">
                        Saya adalah seorang Mahasiswa Ilmu Komputer, saya berasal dari Palembang, Sumatera Selatan.
                        Saya mempunyai minat di bidang Komputer semenjak kelas 10 SMA.
                    </p>

                    <p class="text-gray-600 leading-relaxed mt-4">
                    Saya mempunyai keahlian dibidang design grafis seperti: photoshop, Canva, Figma. Dan tentunya saya ahli dibidang pemrograman
                    seperti mempelajari framework: Laravel, react, Vue, Livewire dan Tailwind CSS.
                    </p>
                </div>

                <div class="bg-white px-8 py-8 mt-6 rounded-3xl shadow-lg">
                    <h1 class="text-2xl font-bold mb-3">Resume</h1>
                    <div>
                    <h2 class="bg-gray-600 text-white font-semibold px-5 py-2 rounded-full inline-block">
                        Deskripsi
                    </h2>
                    <p class="text-gray-800 mt-2 leading-relaxed">
                        Saya adalah lulusan baru yang berdedikasi, bersemangat, dan memiliki keinginan kuat untuk berkembang.
                        Saya memiliki kemampuan di bidang design web dan pengoperasian Microsoft Office.
                        Saya mampu mengoperasikan platform seperti: Corel Draw, Figma, Photoshop, dan Canva.
                    </p>
                </div>

                <div class="">
                    <h2 class="bg-gray-600 text-white font-semibold px-5 py-2 rounded-full inline-block mt-3">
                        PENDIDIKAN
                    </h2>

                    <div class="mt-2">
                        <p class="font-semibold text-gray-900">SMA Negeri Tugumulyo</p>
                        <p class="text-gray-700">2021–2024 | Jurusan IPA</p>

                        <ul class="list-disc pl-6 mt-2 text-gray-800 space-y-1">
                            <li>Juara Olimpiade Sains Tingkat Kabupaten (2023)</li>
                            <li>Juara Olimpiade Sains Tingkat Provinsi (2023)</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h2 class="bg-gray-600 text-white font-semibold px-5 py-2 rounded-full inline-block mt-4">
                        ORGANISASI
                    </h2>

                    <div class="mt-2">
                        <p class="font-semibold text-gray-900">KIR (Karya Ilmiah Remaja)</p>
                        <p class="text-gray-700">2021–2022 | Ketua Divisi Riset & Teknologi</p>

                        <ul class="list-disc pl-6 mt-2 text-gray-800 space-y-1">
                            <li>
                                Meneliti dan melakukan percobaan barang bekas yang sudah tidak terpakai untuk dijadikan
                                sebuah karya ilmiah atau inovasi produk.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
</div>

   
<div class="bg-zinc-300 rounded-2xl mx-5 mb-12 pb-8 shadow-lg overflow-hidden">
    <p class="p-5 font-bold text-black text-2xl text-center">My Skill and Learning Progress Coding Language</p>
    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="px-5 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <img src="img/canva.png" alt="" class="h-8 w-8 rounded-2xl">
            <span class="text-sm font-bold text-gray-700">Canva</span>
            </div>
            <span class="text-sm font-semibold">90%</span>
        </div>

        <div class="mt-2 border-2 border-black bg-white p-1 shadow-[2px_2px_0_0]">
            <div class="h-3 bg-stone-600" style="width: 90%"></div>
        </div>
    </div>

    <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="px-5 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <img src="img/figma.png" alt="" class="h-8 w-8">
            <span class="text-sm font-bold text-gray-700">Figma</span>
            </div>
            <span class="text-sm font-semibold">75%</span>
        </div>

        <div class="mt-2 border-2 border-black bg-white p-1 shadow-[2px_2px_0_0]">
            <div class="h-3 bg-stone-600" style="width: 75%"></div>
        </div>
    </div>

    <div role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" class="px-5 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <img src="img/Laravel.png" alt="" class="h-8 w-8">
            <span class="text-sm font-bold text-gray-700">Laravel</span>
            </div>
            <span class="text-sm font-semibold">67%</span>
        </div>

        <div class="mt-2 border-2 border-black bg-white p-1 shadow-[2px_2px_0_0]">
            <div class="h-3 bg-stone-600" style="width: 67%"></div>
        </div>
    </div>

    <div role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" class="px-5 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <img src="img/react.png" alt="" class="h-8 w-8">
            <span class="text-sm font-bold text-gray-700">React</span>
            </div>
            <span class="text-sm font-semibold">43%</span>
        </div>

        <div class="mt-2 border-2 border-black bg-white p-1 shadow-[2px_2px_0_0]">
            <div class="h-3 bg-stone-600" style="width: 43%"></div>
        </div>
    </div>

     <div role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" class="px-5 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <img src="img/js.png" alt="" class="h-8 w-8">
            <span class="text-sm font-bold text-gray-700">Javascript</span>
            </div>
            <span class="text-sm font-semibold">76%</span>
        </div>

        <div class="mt-2 border-2 border-black bg-white p-1 shadow-[2px_2px_0_0]">
            <div class="h-3 bg-stone-600" style="width: 76%"></div>
        </div>
    </div>

     <div role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" class="px-5 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <img src="img/ps.png" alt="" class="h-8 w-8">
            <span class="text-sm font-bold text-gray-700">Photoshop</span>
            </div>
            <span class="text-sm font-semibold">82%</span>
        </div>

        <div class="mt-2 border-2 border-black bg-white p-1 shadow-[2px_2px_0_0]">
            <div class="h-3 bg-stone-600" style="width: 82%"></div>
        </div>
    </div>
</div>

</body>
</html>
