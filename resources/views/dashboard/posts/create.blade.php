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
                            <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">My Posts</h4>
                            {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                        nam.</p> --}}
                        </div>
                    </div>


                    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap">
                            <div class="w-1/2 pr-3">
                                <div class="mb-3">
                                    <label for="title"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('title') text-red-600 dark:text-red-500 @enderror">Title</label>
                                    <input type="text" id="title" name="title"
                                        class="block p-2.5 w-full text-sm text-gray-900 @error('title') border-red-600 dark:border-red-600 @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Write your title here..." autofocus required
                                        value="{{ old('title') }}">
                                    @error('title')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slug"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('slug') text-red-600 dark:text-red-500 @enderror">Slug</label>
                                    <input type="text" id="slug" name="slug"
                                        class="block p-2.5 w-full text-sm text-gray-900 @error('slug') border-red-600 dark:border-red-600 @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Write your Slug here..." required value="{{ old('slug') }}">
                                    @error('slug')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" name="category_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                        <option value="1" class="hidden">Choose a Category</option>
                                        @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class=" w-1/2 pl-3 ">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white  @error('image') text-red-600 dark:text-red-500 @enderror" for="image">Upload Image</label>
                                <div class="flex items-center justify-center w-full ">
                                    {{-- img preview --}}
                                    <img class="h-auto max-w-xs img-preview rounded-lg hidden mr-6" >
                                    {{-- end preview --}}
                                    <label for="image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            @if ($errors->has('image'))
                                                 @error('image')
                                                 <p class="text-xl text-red-600 dark:text-red-500">{{ $message }} Please re-upload again</p>
                                                 @enderror
                                            @else
                                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG or JPG  (MAX. 1024 kb)</p>
                                            @endif
                                        </div>
                                        <input id="image" type="file" class="hidden" name="image"  onchange="previewImage()" />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="body"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white  @error('body') text-red-600 dark:text-red-500 @enderror">Body</label>
                            @error('body')<p class=" mb-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                            <input id="body" type="hidden" name="body" required value="{{ old('body') }}">
                            <div class="dark:bg-white rounded-lg p-3">
                                <trix-editor input="body" class="fill-current"></trix-editor>
                            </div>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Publish post
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- javaScript -->

<script src="{{ asset('js\query.js') }}"></script>
@endsection
