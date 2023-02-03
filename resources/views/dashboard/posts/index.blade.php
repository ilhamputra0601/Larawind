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
                    <h2 class=" font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">All Posts</h2>
                    <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">My Posts</h4>
                    {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                        nam.</p> --}}
                </div>
            </div>
            <div class="mb-4">
                <div class="flex justify-end" onclick="location.href='/dashboard/posts/create'">
                  <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Create Post</button>
                </div>
              </div>
              <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                      <thead>
                        <tr>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            NO</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Title</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Description</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Categories</th>
                          <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Created_At</th>
                          <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                            Action</th>
                        </tr>
                      </thead>

                      <tbody class="bg-white">
                        @foreach ($posts as $post)
                        <tr>
                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                {{ $loop->iteration }}
                            </div>

                          </td>

                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">{{ $post->title }}
                            </div>
                          </td>

                          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <p>{{ $post->excerpt }}</p>
                          </td>

                          <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span>{{ $post->category->name }}</span>
                          </td>
                          <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span>{{ $post->created_at }}</span>
                          </td>

                          <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                              </svg>
                            </a>

                          <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                            <a href="/dashboard/posts/{{ $post->slug }}" class="text-gray-600 hover:text-gray-900">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                              </svg>
                            </a>
                          </td>
                          </td>
                          <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg></a>

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- javaScript -->
<script src="{{ asset('js\query.js') }}"></script>
@endsection
