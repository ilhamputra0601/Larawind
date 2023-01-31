@extends('index')

@section('container')
<section id="blog" class="pt-36 pb-32 bg-sky-100 dark:bg-slate-900 ">
    <div class="container ">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary2 mb-2 lg:text-2xl md:text-xl">Sign in to our platform</h4>
                <h2 class="mb-4 font-bold text-primary text-2xl md:text-3xl lg:text-4xl ">Sign in to our platform</h2>
            </div>
        </div>

<div class=" mx-auto mb-16 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 ">
    <form class="space-y-6 " action="/register" method="post">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('name') text-red-600 dark:text-red-500 @enderror">Your name</label>
            <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300  @error('name') border-red-600 dark:border-red-600
            @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Username" value="{{ old('name') }}" required>
            @error('name')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p> @enderror
        </div>
        <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('username') text-red-600 dark:text-red-500 @enderror">Your username</label>
            <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300  @error('username') border-red-600 dark:border-red-600
            @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Username" value="{{ old('username') }}" required>
            @error('username')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p> @enderror
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('email') text-red-600 dark:text-red-500 @enderror">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 @error('email') border-red-600 dark:border-red-600
            @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" value="{{ old('email') }}" required>
            @error('email')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p> @enderror
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('password') text-red-600 dark:text-red-500 @enderror">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border  @error('password') border-red-600 dark:border-red-600
            @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            @error('password')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p> @enderror
        </div>

        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Already registered? <a href="/login" class="text-blue-700 hover:underline dark:text-blue-500">Login</a>
        </div>
    </form>
</div>
</div>
</section>

@endsection
