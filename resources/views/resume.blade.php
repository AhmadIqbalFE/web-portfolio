<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Resume Page</title>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/bg.jpg') }}')">

    <div class="w-full overflow-x-auto mx-auto px-5 pt-4">
        <div class="flex bg-white rounded-2xl shadow mb-6 w-max md:gap-3 md:p-3   gap-1.5 p-2 text-sm">

        <a href="/" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('/') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} py-2 md:px-4 md:py-2 px-3 text-sm">
            Home
            </a>

            <a href="/resume" class="rounded-xl whitespace-nowrap font-semibold hover:bg-gray-100 {{ request()->is('resume') ? 'bg-stone-700 text-white shadow font-semibold hover:bg-stone-700' : 'text-gray-700' }} py-2 md:px-4 md:py-2 px-3 text-sm">
            Resume
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

    <div class="flex flex-col xl:flex-row justify-between px-6 pt-4 pb-10 gap-4">
        <div class="w-full overflow-x-auto mx-auto  bg-white shadow-lg rounded-xl md:p-10 hover:rotate-x-12">
            <div class="grid grid-cols-1 xl:grid-cols-1 gap-10 px-6 pt-2 pb-8">
                <h2 class="text-2xl font-bold pt-3">My Education</h2>
                <div>
                    <h2 class="bg-gray-600 text-white font-semibold px-5 py-2 rounded-full inline-block">
                        TENTANG SAYA
                    </h2>
                    <p class="text-gray-800 mt-4 leading-relaxed">
                        Saya adalah lulusan baru yang berdedikasi, bersemangat, dan memiliki keinginan kuat untuk berkembang.
                        Saya memiliki kemampuan di bidang design web dan pengoperasian Microsoft Office.
                        Saya mampu mengoperasikan platform seperti: Corel Draw, Figma, Photoshop, dan Canva.
                    </p>
                </div>

                <div class="">
                    <h2 class="bg-gray-600 text-white font-semibold px-5 py-2 rounded-full inline-block">
                        PENDIDIKAN
                    </h2>

                    <div class="mt-4">
                        <p class="font-semibold text-gray-900">SMA Negeri Tugumulyo</p>
                        <p class="text-gray-700">2021–2024 | Jurusan IPA</p>

                        <ul class="list-disc pl-6 mt-2 text-gray-800 space-y-1">
                            <li>Juara Olimpiade Sains Tingkat Kabupaten (2023)</li>
                            <li>Juara Olimpiade Sains Tingkat Provinsi (2023)</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h2 class="bg-gray-600 text-white font-semibold px-5 py-2 rounded-full inline-block">
                        ORGANISASI
                    </h2>

                    <div class="mt-4">
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

            <div class="w-full overflow-x-auto mx-auto px-5 pt-4 bg-white shadow-lg rounded-xl md:p-10">
                <h2 class="text-2xl font-bold mb-4">My Skill</h2>

                <div class="grid grid-cols-2 lg:grid-cols-3 p-4 gap-4">
                    <div class="relative group mx-auto bg-indigo-600 w-auto pb-2  border shadow overflow-hidden rounded-2xl perspective-[1000px] hover:[transform:rotateX(10deg)_rotateY(-10deg)] transition">
                        <img src="img/react.jpg" class="w-40 h-40 object-cover">
                        <p class="text-center pt-1 text-white font-bold">React</p>
                        <div class="absolute inset-0 bg-black/50 flex items-end justify-center pb-12 text-white translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <span class="text-sm font-medium text-center">
                                Merupakan Skill yang sedang saya perdalam dalam membuat website interactive
                            </span>
                        </div>
                    </div>

                    <div class="relative group mx-auto bg-indigo-600 w-auto pb-2  border shadow overflow-hidden rounded-2xl perspective-[1000px] hover:[transform:rotateX(10deg)_rotateY(-10deg)] transition">
                        <img src="img/js.jpg" class="w-40 h-40 object-cover">
                        <p class="text-center pt-1 text-white font-bold">Javascript</p>
                        <div class="absolute inset-0 bg-black/50 flex items-end justify-center pb-12 text-white translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <span class="text-sm font-medium text-center">
                                Merupakan Skill yang sedang saya perdalam dalam membuat logic pada interaksi UI kepada User
                            </span>
                        </div>
                    </div>

                    <div class="relative group mx-auto bg-indigo-600 w-auto pb-2  border shadow overflow-hidden rounded-2xl perspective-[1000px] hover:[transform:rotateX(10deg)_rotateY(-10deg)] transition">
                        <img src="img/laravel.jpg" class="w-40 h-40 object-cover">
                        <p class="text-center pt-1 text-white font-bold">Laravel</p>
                        <div class="absolute inset-0 bg-black/50 flex items-end justify-center pb-12 text-white translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <span class="text-sm font-medium text-center">
                                Merupakan Skill membangun website yang simpel dan responsive menggunakan framework
                            </span>
                        </div>
                    </div>

                    <div class="relative group mx-auto bg-indigo-600 w-auto pb-2  border shadow overflow-hidden rounded-2xl perspective-[1000px] hover:[transform:rotateX(10deg)_rotateY(-10deg)] transition">
                        <img src="img/figma.jpg" class="w-40 h-40 object-cover">
                        <p class="text-center pt-1 text-white font-bold">React</p>
                        <div class="absolute inset-0 bg-black/50 flex items-end justify-center pb-12 text-white translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <span class="text-sm font-medium text-center">
                                Software yang sering saya pakai untuk mendesain web design beserta plugin-pluginnya
                            </span>
                        </div>
                    </div>

                </div>
            </div>

    </div>

</div>
</body>
</html>