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

               <article class="mt-2 lg:mt-0 text-slate-600 dark:text-slate-300 sm:mt-4 sm:text-xl text-justify">
                   {!!$post->body !!}
               </article>
            </div>
            <div class=" my-auto hidden object-cover aspect-square lg:flex lg:w-1/2">
                <img src="https://source.unsplash.com/360x360?{{ $post->category }}" alt="{{ $post->author }}"
                    class=" object-cover rounded-3xl">
            </div>
        </div>
        {{-- back --}}
        <button type="button" onclick=location.href="/dashboard/posts"
            class="mt-10 ml-6 lg:ml-12 lg:-mt-10 text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-2">Back</button>
            {{-- edit --}}
            <button type="button" onclick=location.href="/dashboard/posts/{{ $post->slug }}/edit"
            class="mt-10 ml-3 lg:ml-12 lg:-mt-10 text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg></button>
          {{-- delete --}}
        <button  data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button"
            class="mt-10 ml-3 lg:ml-12 lg:-mt-10 text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-2"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white-600 hover:text-white-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg></button>
          {{-- modal --}}
          <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this post?</h3>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                            @method('delete')
                            @csrf
                            <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure </button>
                            <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
    </div>
</div>
<!-- javaScript -->
<script src="..\..\js\query.js"></script>
@endsection
