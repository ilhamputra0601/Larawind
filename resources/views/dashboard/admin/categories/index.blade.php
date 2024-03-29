@extends('dashboard.main')
@section('container')
<!-- component -->
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
<div class="overflow-x-auto">


    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center dark:bg-gray-900 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class=" font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">Category</h2>
                    <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Edit Categories</h4>
                    {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                        nam.</p> --}}
                </div>
            </div>
            <div class="mb-4">

              </div>
              <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                      <thead>
                        <tr>
                          <th
                            class="px-9 py-3 ml-2 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            No</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left  text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Id</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Categories</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Slug</th>
                          <th class="px-6 py-3 text-sm text-center text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                            Action</th>
                        </tr>
                      </thead>

                      <tbody class="bg-white">
                        @foreach ($categories as $category)
                        <tr>
                          <td class="px-6 py-4 pl-10 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                {{ $loop->iteration }}
                            </div>
                        </td>
                          <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                {{ $category->id }}
                            </div>
                        </td>
                          <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span>{{ $category->name }}</span>
                          </td>
                          <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span>{{ $category->slug }}</span>
                          </td>
                          {{-- delete --}}
                          <td class="text-sm font-medium text-center whitespace-no-wrap border-b border-gray-200 ">
                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-indigo-600 hover:text-indigo-900" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                              </button>
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
                                            <form action="/admin/categories/{{ $category->id }}" method="post">
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
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div>
                <form action="/admin/categories" method="post">
                    @csrf
                <div class="flex flex-wrap justify-start">
                    <div class="my-3 w-1/3">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('name') text-red-600 dark:text-red-500 @enderror">Category Name</label>
                        <input type="text" id="name" name="name"
                            class="block p-2.5 w-full text-sm text-gray-900 @error('title') border-red-600 dark:border-red-600 @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your title here..." autofocus required
                            value="{{ old('name') }}">
                        @error('name')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">Oops!</span> {{ $message }}</p> @enderror
                    </div>
                    <div class="mt-6 mx-3">
                        <button type="submit" class="px-4 my-3 py-3 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Create Category</button>
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
                </div>
            </form>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
  // slugable
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    title.addEventListener('change', function () {
        fetch('/admin/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>

@if (session()->has('success'))
<script>
    Swal.fire(
  'New post has been added!',
  'Check your Post',
  'success'
)
</script>
@endif

@if (session()->has('deleted'))
<script>
    Swal.fire(
  'Post has been Deleted!',
  'Check your Post',
  'success'
)
</script>
@endif

@if (session()->has('updated'))
<script>
    Swal.fire(
  'post has been updated!',
  'Check your Post',
  'success'
)
</script>
@endif

<!-- javaScript -->
{{-- <script src="{{ asset('js\query.js') }}"></script> --}}
@endsection
