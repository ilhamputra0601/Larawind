
<label for="underline_select" class="sr-only">Underline select</label>
<select id="underline_select" class="focus:text-gray-500 hover:text-primary2 font-base block py-2.5 px-0 w-full md:text-xl xl:text-2xl text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 focus:pl-2 peer">
    <option selected>Categories</option>
    @foreach ($categories as $category)
    <option><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></option>
    @endforeach
</select>
