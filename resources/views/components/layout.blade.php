<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

{{-- Daisy componenets for footer --}}
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<body style="font-family: Open Sans, sans-serif">

<div class="flex flex-col h-screen justify-between">
    <section class="px-6 py-8">


        {{-- header --}}


        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                  type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                  <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                  </svg>
                </button>
              </div>


            <div class="mt-8 md:mt-0 flex items-center">
                @guest  {{-- @if(!auth()->check()) @endif --}}
                 <a href="/login" class="pr-3 text-xs font-bold uppercase">Login</a>
                 <a href="/register" class="text-xs font-bold uppercase">Register</a>
                @else
                    <span class="text-xs font-bold uppercase">Welcome {{ auth()->user()->name}}</span>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="text-xs font-semibold text-blue-500 ml-3" type="submit">Log Out</button>
                    </form>
                @endguest



                <button style="width: 185px;" type="button" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                    <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                    Sign in with Google
                </button>

            </div>
        </nav>

        {{-- Content --}}


        <div class="mb-auto">
{{--
            <x-search-card></x-search-card> --}}

          {{ $slot }}
        </div>

        <x-card-generic class="h-100 w-100 bg-emerald-300">in layout file</x-card-generic>


    </section>
    <x-footer></x-footer>
    <x-flash></x-flash>


</div>

</body>

    <!--

    {{--@yield('banner');
    @yield('content')  --}} --->
<!---


    ---->
