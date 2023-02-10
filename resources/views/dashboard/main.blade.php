<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Portfolio Tailwind CSS</title>
    <!-- fontFamily -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cookie&family=Libre+Franklin:wght@500&family=Podkova&display=swap" rel="stylesheet">
    <!-- style -->
    @vite('resources/css/app.css')
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>

      {{-- trix-css --}}
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
      <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
      {{-- remove fitur upload file trix-editor --}}
     <style>
          trix-toolbar [data-trix-button-group ="file-tools"] {
              display: none;

          }
      </style>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark')
} else {
  document.documentElement.classList.remove('dark')
}
    </script>


</head>

<body class="font-base selection:bg-pink-200  dark:bg-slate-900 ">


  @include('dashboard.partials.navbar')
  @include('dashboard.partials.sidebar')

  @yield('container')


      @if (session()->has('loginSuccess'))
      <script>
          Swal.fire(
        'Login succesfull!',
        'enjoy',
        'success'
      )
      </script>
      @endif

    <!-- Back to Top Start -->
    <a id="toTop" href="#" class="h-14 w-14 bg-primary rounded-full flex justify-center content-center fixed z-[9999] bottom-4 right-4 p-4 animate-bounce hidding">
        <span class=" h-5 w-5 border-t-4 border-l-4 rotate-45 mt-1 rounded-sm "></span>
    </a>
    <!-- Back to Top End -->

    <!-- javaScript -->
    {{-- <script src="js/query.js"></script> --}}
    {{-- flowbitejs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>



</body>

</html>
