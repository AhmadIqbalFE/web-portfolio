<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
            <style>
                    @keyframes slide-in {
                    from { opacity: 0; transform: translateX(20px); }
                    to { opacity: 1; transform: translateX(0); }
                }

                .animate-slide-in {
                    animation: slide-in 0.9s ease-out;
                }
            </style>
    <title>Contact Page</title>
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
                {{-- Notification --}}
           @if(session('success'))
                <div id="toast-success"
                    class="fixed top-5 right-5 z-50 border-2 bg-zinc-700 p-4 text-slate-400 shadow-[4px_4px_0_0] rounded-xl w-72 animate-slide-in">
                <div class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="mt-0.5 size-4">
                    <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM9 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6.75 8a.75.75 0 0 0 0 1.5h.75v1.75a.75.75 0 0 0 1.5 0v-2.5A.75.75 0 0 0 8.25 8h-1.5Z" clip-rule="evenodd"></path>
                    </svg>

                    <strong class="block flex-1 leading-tight font-semibold">
                        {{ session('success') }}
                    </strong>
                </div>
                </div>

                <script>
                    setTimeout(() => {
                        const toast = document.getElementById('toast-success');
                        if (toast) {
                            toast.style.transition = "0.4s";
                            toast.style.opacity = "0";
                            toast.style.transform = "translateX(20px)";
                        }
                    }, 3000);
                </script>
           @endif


<section class="bg-gradient-to-r from-zinc-700 to-neutral-600 rounded-3xl">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white">Contact Me</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-200 sm:text-xl">Semua pertanyaan dan keluh kesah kalian semua akan dijawab, kalo sempet hehehe </p>
      <form action="{{ route('contact.send') }}" method="POST" class="space-y-8">
        @csrf
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-300 ">Your email</label>
              <input type="email" id="email" name="email"  class="shadow-sm bg-white-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5" placeholder="example@gmail.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-300">Subject</label>
              <input type="text" name="subject" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-zinc-500 focus:border-zinc-500" placeholder="Let me know what you want" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-300">Your message</label>
              <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-zinc-500 focus:border-zinc-500" placeholder="Write something..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-slate-600 sm:w-fit hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-500">Send message</button>
      </form>
  </div>
</section>
<div class="p-5">
  <p class="mb-4 text-sm text-center text-white sm:mb-0">
      &copy; 2025-2026 <a href="https://mail.google.com/mail/?view=cm&fs=1&to=a.iqbal27112005@gmail.com" class="hover:underline" target="_blank">a.iqbal27112005@gmail.com</a>. All rights reserved.
  </p>
  <div class="flex justify-center items-center space-x-1">
    <a href="https://discord.com/users/1188651593952936028" data-tooltip-target="tooltip-discord" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
<svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
</svg>
            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">Discord</span>
    </a>
    <div id="tooltip-discord" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
    
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <a href="https://wa.me/6282179891902" data-tooltip-target="tooltip-whatsapp" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
       <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
            <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
       </svg>

        <span class="sr-only">Whatsapp</span>
    </a>
    <div id="tooltip-whatsapp" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
       
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <a href="https://github.com/AhmadIqbalFE" data-tooltip-target="tooltip-github" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
        <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd"/>
        </svg>

        <span class="sr-only">Github</span>
    </a>
    <div id="tooltip-github" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
        Star us on GitHub
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <a href="https://www.instagram.com/amd_ibl/" data-tooltip-target="tooltip-instagram" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
        <svg class="w-6 h-6 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
        </svg>

        <span class="sr-only">Instagram</span>
    </a>
    <div id="tooltip-instagram" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    </div>
</div>
</div>
</div>

</body>
</html>