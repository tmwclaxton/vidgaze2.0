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



        {{-- header --}}

    <x-topnav></x-topnav>


       {{--
                    <x-search-card></x-search-card> --}}


    {{-- Content & sidenav--}}

    <div class="grid grid-cols-9">
        <div class="col-span-2">
<x-sidenav></x-sidenav>
        </div>


        <section class="col-span-7 px-6 py-20 bg-gray-50">

                <div class="mb-auto">

                {{ $slot }}

                </div>

                <x-card-generic class="h-100 w-100 bg-emerald-300">in layout file</x-card-generic>


            </section>
    </div>
    <x-footer></x-footer>
    <x-flash></x-flash>


</div>

</body>

    <!--

    {{--@yield('banner');
    @yield('content')  --}} --->
<!---


    ---->
