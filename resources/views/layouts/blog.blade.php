@extends('index')

@section('container')
<!-- Blog Section Start -->
<section id="blog" class="pt-36 pb-32 bg-sky-100 dark:bg-slate-900 ">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Blog</h4>
                <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">Tulisan Terkini</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                    nam.</p>
            </div>
        </div>
        <div class="mb-10">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Categories <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    @foreach ($categories as $category)
                    <li>
                        <a href="/categories/{{ $category->slug }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- content --}}
        <div class="flex flex-wrap justify-center">
            @foreach ($posts as $post)
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <a href="/blog/{{ $post->slug }}"><img src="{{ $post->image }}" alt="programing" class="w-full"></a>
                    <div class="py-8 px-6">
                        <h2> <a href="/blog/{{ $post->slug }}"
                                class="block mb-2 font-bold hover:text-primary text-2xl truncate ">
                                {{ $post->title }}</a>
                        </h2>
                        <h3 class="font-semibold text-slate-600">By : <a
                                href="/author/{{ $post->author->username }}">{{ $post->author->name}}</a></h3>
                        <p class="font-medium text-base text-secondary mb-6 truncate">{{ $post->excerpt }}</p>
                        <a href="/blog/{{ $post->slug }}"
                            class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 hover:shadow-lg">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- end --}}
    </div>
</section>
<!-- Blog Section End -->
@endsection
