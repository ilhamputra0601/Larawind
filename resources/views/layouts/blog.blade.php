@extends('index')

@section('container')
     <!-- Blog Section Start -->
     <section id="blog" class="pt-36 pb-32 bg-sky-100 dark:bg-slate-900 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Blog</h4>
                    <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">Tulisan Terkini</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo nam.</p>
                </div>
            </div>
            <div class="mb-5">
            @include('partials.dropdown')
            </div>
            {{-- content --}}
            <div class="flex flex-wrap justify-center">
                @foreach ($posts as $post)
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <a href="/blog/{{ $post->slug }}"><img src="{{ $post->image }}" alt="programing" class="w-full"></a>
                        <div class="py-8 px-6">
                            <h2> <a href="/blog/{{ $post->slug }}" class="block mb-2 font-bold hover:text-primary text-2xl truncate ">
                               {{ $post->title }}</a>
                            </h2>
                                <h3 class="font-semibold text-slate-600">By : <a href="">{{ $post->author->name}}</a> </h3>
                            <p class="font-medium text-base text-secondary mb-6 truncate">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80 hover:shadow-lg">Baca Selengkapnya</a>
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

