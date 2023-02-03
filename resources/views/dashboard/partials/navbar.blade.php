<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 ">
    <div class="px-3 py-1 lg:px-5 lg:pl-3">
        <div class="flex item-center justify-between relative">
            <div class="px-4">
                <a href="/#home" class="font-bold text-lg text-primary block py-2">Hamz</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" type="button" class="block absolute right-14 lg:hidden  ">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>
                <nav id="nav-menu"
                    class="hidden absolute py-1  bg-white lg:border-transparent  border border-slate-300 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:max-w-full lg:bg-transparent lg:shadow-none lg:rounded-none  dark:bg-slate-900  lg:dark:bg-transparent dark:text-white  ">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/#home"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex {{ Request::is('/') ? 'text-primary2' : '' }} ">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/#about"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex ">About</a>
                        </li>
                        <li class="group">
                            <a href="/gallery"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex {{ Request::is('gallery') ? 'text-primary2' : '' }}">Gallery</a>
                        </li>
                        <li class="group">
                            <a href="/#portfolio"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex">Portfolio</a>
                        </li>
                        <li class="group">
                            <a href="/#clients"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex">Clients</a>
                        </li>
                        <li class="group">
                            <a href="/blog"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex {{  Request::is('blog') ? 'text-primary2' : '' }} ? 'text-primary2' : '' }} ">Blog</a>
                        </li>
                        <li class="group">
                            <a href="/#contact"
                                class="text-base text-dark py-2 mx-8 group-hover:text-primary2 flex">Contact</a>
                        </li>
                      </ul>
                      </nav>
                      </div>
                      {{-- profile --}}
                      <div class="py-2">
                      <button type="button"
                                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 "
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://source.unsplash.com/600x400?profile" alt="user photo">
                            </button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span
                                        class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                                    <span
                                        class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="/dashboard"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                out</button>
                                        </form>
                                    </li>
                                    <li>
                                        <hr class="w-48 h-0.5 mx-auto my-4  bg-slate-600 border-0 rounded ">
                                    <li class="flex lg:items-center pl-8 mx-auto  ">
                                        <div id="dark" class="flex cursor-pointer ml-7 lg:ml-0 lg:mt-1">
                                            <span class="mr-2 text-md text-black dark:text-white">Mode </span>
                                            <span id="terang" class="flex">
                                                <img src="{{ asset('svg/idea.png') }}" alt="#" width="30">
                                                <span class="ml-2 text-md text-slate-300 ">light</span>
                                            </span>
                                            <span id="gelap" class="hidden flex">
                                                <img src="{{ asset('svg/night-mode.png') }}" alt="#" width="30">
                                                <span class="ml-2 text-md text-slate-700">dark</span>
                                            </span>
                                        </div>
                                    </li>
                                  </li>
                              </ul>
                           </div>
                            {{-- endprofile --}}
                            </div>
                  </div>
    </div>
  </nav>
