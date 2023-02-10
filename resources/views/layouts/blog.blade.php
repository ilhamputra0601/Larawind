@extends('main')

@section('container')
<!-- Blog Section Start -->
<section id="blog" class="pt-36 pb-32 bg-sky-100 dark:bg-slate-900 ">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Blog</h4>
                <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">{{ $judul }}</h2>
                {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                    nam.</p> --}}
            </div>
        </div>
        <div class="mb-10">
            @include('partials.dropdown')
            </div>

            @if ($posts->count())
            {{-- carousel --}}

            <div class="sliderAx h-auto">
                <div id="slider-1" class=" mx-auto">
                  <div class="bg-cover relative bg-center h-auto text-white py-24 px-10 object-fill" >
                  <a href="/blog/{{ $posts[0]->slug }}"><img  class="rounded-lg w-full " src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }} alt="{{ $posts[0]->category->name }}"></a>
                      <div class="md:w-1/2 absolute xl:-mt-48 ml-10 left-0">
                       <div class="-mt-52 xl:-mt-36 xl:mb-28 bg-gradient-to-r from-primary py-5  pl-5">
                     <a href="/blog?author={{ $posts[0]->author->username }}"><p class="font-bold text-sm xl:text-xl uppercase">{{ $posts[0]->author->name }}</p></a>
                       <a href="/blog?category={{ $posts[0]->category->slug }}"><p class="md:text-2xl xl:text-4xl font-bold">{{ $posts[0]->category->name }}</p></a>
                         <p class="md:text-sm xl:text-md leading-none truncate">{{ $posts[0]->excerpt }}</p>
                           <p class="md:text-xs xl:text-sm mb-5 leading-none "> {{ $posts[0]->created_at->diffForHumans() }}</p>
                       </div>
                       <a href="/blog/{{ $posts[0]->slug }}" class=" ml-5  bg-sky-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Baca Selengkapnya</a>
                    </div>
              </div> <!-- container -->
                <br>
                </div>

                <div id="slider-2" class="container mx-auto">
                    <div class="bg-cover relative bg-center h-auto text-white py-24 px-10 object-fill" >
                        <a href="/blog/{{ $posts[1]->slug }}"><img  class="rounded-lg w-full " src="https://source.unsplash.com/1200x400?{{ $posts[1]->category->name }} alt="{{ $posts[1]->category->name }}"></a>
                            <div class="md:w-1/2 absolute xl:-mt-48 ml-10 left-0">
                             <div class="-mt-52 xl:-mt-36 xl:mb-28 bg-gradient-to-r from-primary py-5  pl-5">
                           <a href="/blog?author={{ $posts[1]->author->username }}"><p class="font-bold text-sm xl:text-xl uppercase">{{ $posts[1]->author->name }}</p></a>
                             <a href="/blog?category={{ $posts[1]->category->slug }}"><p class="md:text-2xl xl:text-4xl font-bold">{{ $posts[1]->category->name }}</p></a>
                               <p class="md:text-sm xl:text-md leading-none truncate">{{ $posts[1]->excerpt }}</p>
                                 <p class="md:text-xs xl:text-sm mb-5 leading-none "> {{ $posts[1]->created_at->diffForHumans() }}</p>
                             </div>
                             <a href="/blog/{{ $posts[1]->slug }}" class=" ml-5  bg-sky-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Baca Selengkapnya</a>
                          </div>
                    </div> <!-- container -->
                <br>
                </div>
                <div  class="flex justify-between w-12 mx-auto pb-2 mb-10 ">
                       <button id="sButton1" onclick="sliderButton1()" class="bg-sky-400 rounded-full w-4 pb-2 " ></button>
                   <button id="sButton2" onclick="sliderButton2() " class="bg-sky-400 rounded-full w-4 p-2"></button>
                 </div>
              </div>
        {{-- content --}}
        <div class="flex flex-wrap justify-center">
            @foreach ($posts->skip(2) as $post)
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 static">
                    <a href="/blog?category={{ $post->category->slug }}">
                    <div class="absolute bg-white rounded-r-md mt-72 bg-opacity-80 "><span class="py-5 px-5 font-base text-2xl">{{ $post->category->name }}</span></div></a>
                    @if ($post->image)
                    <a href="/blog/{{ $post->slug }}"><img src="{{ asset('storage/'. $post->image)  }}" alt="programing" class="w-full"></a>
                    @else
                    <a href="/blog/{{ $post->slug }}"><img src="https://source.unsplash.com/360x360?{{ $post->category->name }}" alt="programing" class="w-full"></a>
                    @endif
                    <div class="py-8 px-6">
                        <h2> <a href="/blog/{{ $post->slug }}" class="block mb-2 font-bold hover:text-primary text-2xl truncate ">{{ $post->title }}</a></h2>
                        <h3 class="font-semibold text-slate-600">By :<a href="/blog?author={{ $post->author->username }}">{{ $post->author->name}} </a></h3>
                        <p class="font-medium text-base text-secondary mb-6 truncate">{{ $post->excerpt }}</p>
                        <a href="/blog/{{ $post->slug }}"class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 hover:shadow-lg">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            {{ $posts->links() }}
        {{-- end --}}
        @else
        <div class="flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Post Not Found </span> Change a few things up and try submitting again.
            </div>
          </div>
@endif
    </div>
</section>

<!-- Blog Section End -->
@endsection
