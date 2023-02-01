@extends('index')

@section('container')
    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container ">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary2 md:text-xl lg:text-2xl ">Halo Semua 👋, saya <span class="block font-bold text-primary text-4xl md:text-5xl lg:text-7xl font-primary tracking-wider">Ilham Ramadhan</span></h1>
                    <h2 class=" text-other font-other font-medium text-lg mb-5 md:text-2xl lg:text-3xl">Programer   <span class="text-slate-900 dark:text-white">& </span> <span class="text-primary2 font-semibold">Designer</span> </h2>
                    <p class=" font-medium text-slate-500 mb-10 text-sm md:text-lg xl:text-xl dark:text-slate-300"> Menjadi Programer sangat mudah bukan. <span class="text-other font-semibold">bukan!</span> </p>
                    <a href="#contact" class="bg-primary text-white inline-block py-2 px-5 rounded-full text-sm tracking-wider hover:shadow-lg hover:scale-110 transition duration-500 ease-in-out md:scale-105 lg:scale-110 hover:text-white hover:bg-gradient-to-r  hover:from-primary  hover:to-primary2">Hubungi Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="mt-10 relative lg:mt-9 lg:right-0 ">
                        <img src="img\hamz.png" alt="hamz" class="max-w-full mx-auto ">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 scale-105 md:scale-125 lg:scale-150"><svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ec4899" d="M39,-39C52.9,-25.1,68.1,-12.5,71.9,3.8C75.7,20.1,68,40.2,54.1,48.6C40.2,57,20.1,53.7,-1.4,55.1C-22.8,56.5,-45.7,62.5,-62.1,54.1C-78.5,45.7,-88.6,22.8,-87.4,1.2C-86.2,-20.5,-73.9,-41,-57.5,-55C-41,-68.9,-20.5,-76.3,-4,-72.3C12.5,-68.3,25.1,-53,39,-39Z" transform="translate(100 100)" />
                          </svg></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Start -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg font-other mb-3">Tentang Saya </h4>
                    <h2 class="font-bold text- text-2xl mb-5 max-w-md  lg:text-3xl dark:text-white">Yuk, belajar pemograman bersama <span class="text-transparent bg-clip-text bg-gradient-to-r from-other/60 via-other/80 dark:from-other/80 dark:via-other/90 dark:to-other to-other selection:text-other ">Ilham Ramadhan</span> </h2>
                    <p class="font-medium text-base lg:text-lg text-secondary max-w-lg dark:text-slate-300
                    ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus fugiat perspiciatis, obcaecati quae fuga earum possimus, cum odit laboriosam sunt libero atque? Expedita dolore provident eius, magni at dicta illo.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-2xl lg:text-3xl mb-4 lg:pt-10 dark:text-white">Mari Berteman</h3>
                    <P class="font-medium text-base lg:text-lg text-secondary max-w-lg mb-6 dark:text-slate-300
                    ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam ducimus dolor incidunt dolores temporibus vitae libero quas quae ab consequatur aliquam placeat magnam odio nam, sunt officia rerum fuga saepe.</P>
                    <div class="flex item-center">
                        <!-- whatsApp -->
                        <a class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary text-secondary dark:text-slate-300 dark:border-slate-300 hover:text-white hover:bg-gradient-to-r  hover:from-primary  hover:via-other  hover:to-primary2 transition duration-500 ease-in-out" target="_blank" href="https://wa.me/6289658591537?text=Hallo%20Ilham%20Ganteng">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>                        </a>
                        <!-- Instagram -->
                        <a class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary text-secondary dark:text-slate-300 dark:border-slate-300 hover:text-white hover:bg-gradient-to-r  hover:from-primary  hover:via-other  hover:to-primary2 transition duration-500 ease-in-out" target="_blank" href="https://Instagram.com/il.pra">
                            <svg  class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <!-- tiktok -->
                        <a class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary text-secondary dark:text-slate-300 dark:border-slate-300 hover:text-white hover:bg-gradient-to-r  hover:from-primary  hover:via-other  hover:to-primary2 transition duration-500 ease-in-out" target="_blank" href="https://tiktok.com/@hamztx">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                        <!-- github -->
                        <a class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary text-secondary dark:text-slate-300 dark:border-slate-300 hover:text-white hover:bg-gradient-to-r  hover:from-primary  hover:via-other  hover:to-primary2 transition duration-500 ease-in-out" target="_blank" href="https://github.com/ilhamputra0601">
                            <svg class="fill-current" width="20"  role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <!-- linkedin -->
                        <a class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-secondary text-secondary dark:text-slate-300 dark:border-slate-300 hover:text-white hover:bg-gradient-to-r  hover:from-primary  hover:via-other  hover:to-primary2 transition duration-500 ease-in-out" target="_blank" href="https://www.linkedin.com/in/ilham-ramadhan-96471820a/">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="pt-36 pb-16 bg-sky-100 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Portfolio</h4>
                    <h2 class="mb-4 text-primary font-bold text-dark text-2xl md:text-3xl lg:text-4xl ">Project Terbaru</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo nam.</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden ">
                        <img src="img\portfolio\maulid 2.png" alt="maulid alakhyar">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Ilham Ramadhan</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nisi eius repellat!</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img class="aspect-video" src="img\portfolio\baliho(4x5).png" alt="baliho al-ikhlas">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Ilham Ramadhan</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nisi eius repellat!</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img\portfolio\sekenario panggung.png" alt="sekenario panggung">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Ilham Ramadhan</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nisi eius repellat!</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <video controls class="w-full" alt="3d panggung">
                            <source src="img\portfolio\panggung.webm" type="video/webm" />
                            Browsermu tidak mendukung tag ini, upgrade donk!
                          </video>
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Ilham Ramadhan</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nisi eius repellat!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Clients Section Start -->
    <section id="clients" class="pt-36 pb-16 bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Clients</h4>
                    <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">Yang Pernah bekerjasama</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum non at ut!</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap item-center justify-center">
                    <a target="_blank" href="https://www.google.com/" class="w-20 lg:w-24 xl:w-28  mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="img\clients\google_ji7zl3swefrp.svg" alt="google">
                    </a>
                    <a target="_blank"  href="https://laravel.com/" class="w-20 lg:w-24 xl:w-28  mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="img\clients\laravel-2.svg" alt="laravel">
                    </a>
                    <a target="_blank"  href="https://tailwindcss.com/" class="w-20 lg:w-24 xl:w-28  mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="img\clients\tailwindcss.svg" alt="tailwindcss">
                    </a>
                    <a target="_blank"  href="https://jquery.com/" class="w-20 lg:w-24 xl:w-28  mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="img\clients\jquery-4.svg" alt="jquery">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->


    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Contact</h4>
                    <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">Hubungi Kami</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo nam.</p>
                </div>
            </div>
            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <label for="name" class="text-base text-primary font-bold">Nama</label>
                    <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-1 focus:outline-primary2 caret-pink-500">
                </div>
                <div id="emai" class="w-full px-4 mb-8 group">
                    <label id="ema" for="email" class="text-base text-primary font-bold ">Email</label>
                    <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none  focus:outline-primary2 focus:ring-1  caret-pink-500">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="pesan" class="text-base text-primary font-bold">Pesan</label>
                    <textarea type="text" id="pesan" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-1 focus:outline-primary2 h-32 caret-pink-500"></textarea>
                </div>
                <div class="w-full">
                    <button class="text-base font-semibold text-white bg-primary2 py-3 w-full px-8 rounded-full hover:bg-gradient-to-r  hover:from-primary  hover:to-primary2 hover:shadow-lg transition duration-500 ease-in-out">Kirim</button>
                </div>
            </div>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    @if (session()->has('logout'))
    <script>
        Swal.fire(
      'Logout succesfull!',
      'See you again',
      'success'
    )
    </script>
    @endif
@endsection
