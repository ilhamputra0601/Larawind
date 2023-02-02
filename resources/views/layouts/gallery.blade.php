@extends('main')

@section('container')

 <!-- Section Gallery Start -->
 <section id="gallery" class="pt-36 pb-32 ">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Welcome To </h4>
                <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">My Gallery</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo nam.</p>
            </div>
        </div>
     <div class="mx-2 mt-48 pd-2 grid grid-cols-2 gap-2 md:grid-cols-4 md:p-4 ">
        <h2 class="text-xl font-semibold h-15 text-slate-700 md:col-start-4 md:row-start-2 md:flex dark:text-white"><span class="self-center"> Welcome to My Gallery</span></h2>
        <div class="h-15 text-lg font-bold text-slate-600 md:col-start-2 md:row-start-2 md:flex dark:text-white"><span class="self-end">@ilham Ramadhan</span></div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden relative group  hover:scale-95 transition-all duration-500">
            <img src="img/gallery/1.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500 md:col-start-3">
            <img src="img/gallery/2.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500">
            <img src="img/gallery/3.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500">
            <img src="img/gallery/4.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500">
            <img src="img/gallery/5.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500 md:col-start-2">
            <img src="img/gallery/6.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500 md:col-start-4">
            <img src="img/gallery/7.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500 md:col-start-1">
            <img src="img/gallery/8.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500 md:col-start-3">
            <img src="img/gallery/9.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] md:aspect-[3/4] xl:aspect-[4/3] rounded-lg overflow-hidden  relative group  hover:scale-95 transition-all duration-500 md:col-start-3">
            <img src="img/gallery/10.jpg" class="w-full h-full object-cover object-center absolute group-hover:scale-110 grayscale hover:grayscale-0 transition-all duration-500"></img>
        </div>
    </div>
</section>
<!-- Section Gallery End -->
@endsection
