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

<div class="flex flex-col h-screen justify-between bg-gray-50">



        {{-- header --}}

    <x-topnav></x-topnav>


       {{--
                    <x-search-card></x-search-card> --}}


    {{-- Content & sidenav--}}

    <div class="flex sm:fixed grid grid-cols-10 h-screen w-full pointer-events-none">
        <x-sidenav></x-sidenav>
        <div class="col-span-10 sm:col-span-7 lg:col-span-8 pointer-events-none"></div>
    </div>


    <div class="grid grid-cols-10 w-full pointer-events-none ">

        <div class="col-span-3 lg:col-span-2 pointer-events-none" id="spaceUnderSideNav"></div>

        <section class="col-span-10 sm:col-span-7 lg:col-span-8 px-6   pointer-events-auto" id="contentDiv">

                <div class="mb-auto pb-5">




                {{ $slot }}

                </div>
{{--
                <x-card-generic class="h-100 w-100 bg-emerald-300">in layout file</x-card-generic>
 --}}

            </section>
    </div>
    <div class="grid grid-cols-10 w-full pointer-events-none">

        <div class="col-span-3 lg:col-span-2 pointer-events-none" id="footerUnderSideNav"></div>

        <div class="col-span-10 sm:col-span-7 lg:col-span-8 pointer-events-auto" id="footerDiv">
            <x-footer></x-footer>
        </div>
    </div>
    <x-flash></x-flash>


    <x-card-generic class="fixed text-black py-2 px-4 rounded-xl top-20 right-5  w-64">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>Bonnie Green</div>
            <div class="font-medium truncate">name@flowbite.com</div>
          </div>
          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
          </ul>
          <div class="py-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </div>

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

    </x-card-generic>



</div>
<script>
    var open = false;

    //sidenav and content layout
    var sideBar = document.getElementById("sidenav");
    var spaceUnderSideNav = document.getElementById("spaceUnderSideNav");
    var footerUnderSideNav = document.getElementById("footerUnderSideNav");
    var contentDiv = document.getElementById("contentDiv");
    var footerDiv = document.getElementById("footerDiv");
    var widthOfSideBar = sideBar.clientWidth;
   // var closeSidebar = document.getElementById("closeSideBar");
    sideBar.style.transform = "translateX(-" + widthOfSideBar + 100 +"px)";

    if (document.body.clientWidth < 560) {
        //sets nav to closed
        var open = true;
        sidebarHandler();
    } else {
         //sets nav to open
         var open = false;
        sidebarHandler();
    }

    function sidebarHandler() {
           // console.log("sidebarhandler");
        if (open) {
            open = false;
            //console.log("open");

            sideBar.style.transform = "translateX(-" + widthOfSideBar + 100 + "px)";
            spaceUnderSideNav.classList.remove("col-span-3","lg:col-span-2" );
            footerUnderSideNav.classList.remove("col-span-3","lg:col-span-2" );
            contentDiv.classList.remove("sm:col-span-7","lg:col-span-8");
            footerDiv.classList.remove("sm:col-span-7","lg:col-span-8");
        } else {
            open = true;
            //console.log("close");
            sideBar.style.transform = "translateX(0px)";

            contentDiv.classList.add("sm:col-span-7","lg:col-span-8");
            spaceUnderSideNav.classList.add("col-span-3","lg:col-span-2" );
            footerDiv.classList.add("sm:col-span-7","lg:col-span-8");
            footerUnderSideNav.classList.add("col-span-3","lg:col-span-2" );
        }
    }
</script>
</body>

    <!--

    {{--@yield('banner');
    @yield('content')  --}} --->
<!---


    ---->
