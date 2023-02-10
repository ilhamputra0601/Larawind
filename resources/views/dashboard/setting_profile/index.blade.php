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
                            <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Setting</h4>
                            {{-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Odit debitis eius inventore voluptas nemo laudantium in alias distinctio explicabo
                        nam.</p> --}}
                        </div>
                    </div>

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white">Profile</h3>
          <p class="mt-1 text-sm text-gray-600">
            This information will be displayed publicly so be careful what you share.
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company_website" class="block text-sm font-medium text-gray-700">
                    Website
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                      http://
                    </span>
                    <input type="text" name="company_website" id="company_website" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com">
                  </div>
                </div>
              </div>

              <div>
                <label for="about" class="block text-sm font-medium text-gray-700">
                  About
                </label>
                <div class="mt-1">
                  <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">
                  Brief description for your profile. URLs are hyperlinked.
                </p>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700">
                  Photo
                </label>
                <div class="mt-1 flex items-center">
                  <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>
                  <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Change
                  </button>
                </div>
              </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
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
</div>
@endsection
