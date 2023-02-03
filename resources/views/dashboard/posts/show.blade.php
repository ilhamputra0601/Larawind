@extends('dashboard.main')

@section('container')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class=" font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">All Posts</h2>
                <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">My Post</h4>
                {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                    nam.</p> --}}
            </div>
        </div>

        <div class="container px-6 font-hamz  mx-auto max-w-md sm:max-w-xl md:max-w-5xl lg:max-w-full lg:px-0 lg:flex">
            <div class="lg:p-12 flex-1">
                <div class="mr-7  w-10 h-10 bg-pink-500 inline-flex animate-[spin_4s_linear_infinite]">
                    <div class="w-full h-full bg-pink-500 inline-flex rotate-45"></div>
                </div>
                <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold text-slate-800 dark:text-white mb-3 "><span
                        class="text-primary">{{ $post->title }}</span>
                </h3>

               <article>
                   {!!$post->body !!}
               </article>
            </div>
            <div class=" my-auto hidden object-cover aspect-square lg:flex lg:w-1/2">
                <img src="https://source.unsplash.com/360x360?{{ $post->category }}" alt="{{ $post->author }}"
                    class=" object-cover rounded-3xl">
            </div>
        </div>
        <button type="button" onclick=location.href="/dashboard/posts"
            class="mt-10 ml-6 lg:ml-12 lg:-mt-10 text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-2">Back</button>
        <button type="button" onclick=location.href="#"
            class="mt-10 ml-3 lg:ml-12 lg:-mt-10 text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg></button>
        <button type="button" onclick=location.href="#"
            class="mt-10 ml-3 lg:ml-12 lg:-mt-10 text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white-600 hover:text-white-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg></button>
    </div>
</div>
<!-- javaScript -->
<script src="..\..\js\query.js"></script>
@endsection
