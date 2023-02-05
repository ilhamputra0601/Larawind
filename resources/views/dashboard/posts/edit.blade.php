@extends('dashboard.main')
@section('container')
<!-- component -->
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="overflow-x-auto">


            <div
                class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center dark:bg-gray-900 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h2 class=" font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">All Posts</h2>
                            <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Edit Posts</h4>
                            {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                        nam.</p> --}}

                        </div>
                    </div>

                    {{-- back --}}
                    <button type="button" onclick=location.href="/dashboard/posts"
                        class="mt-10 lg:-mt-10 text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center  mb-10">Back
                    </button>


                    <form method="post" action="/dashboard/posts/{{ $post->slug }}">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('title') text-red-600 dark:text-red-500 @enderror">Title</label>
                            <input type="text" id="title" name="title"
                                class="block p-2.5 w-full text-sm text-gray-900 @error('title') border-red-600 dark:border-red-600 @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your title here..." autofocus required
                                value="{{ old('title',$post->title)}}">
                            @error('title')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('slug') text-red-600 dark:text-red-500 @enderror">Slug</label>
                            <input type="text" id="slug" name="slug"
                                class="block p-2.5 w-full text-sm text-gray-900 @error('slug') border-red-600 dark:border-red-600 @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your Slug here..." required
                                value="{{ old('title',$post->slug) }}">
                            @error('slug')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option selected class="hidden">Choose a Category</option>
                                @foreach ($categories as $category)
                                @if (old('category_id',$post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="body"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white  @error('body') text-red-600 dark:text-red-500 @enderror">Body</label>
                            @error('body')<p class=" mb-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                            <input id="body" type="hidden" name="body" required value="{{ old('body',$post->body) }}">
                            <div class="dark:bg-white rounded-lg p-3">
                                <trix-editor input="body" class="fill-current"></trix-editor>
                            </div>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Update post
                        </button>
                    </form>
                </div>





            </div>
        </div>
    </div>
</div>
<!-- javaScript -->


<script>
    // slugable
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
    //remove fitur upload file trix-editor
    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

</script>
<script src="{{ asset('js\query.js') }}"></script>
@endsection
