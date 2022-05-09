<!doctype html>

<title>VidGaze</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
<link rel="stylesheet" href="css/categories.css">
{{-- Daisy componenets for footer --}}
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<body style="font-family: Open Sans, sans-serif bg-gray-50">

<div class="flex flex-col h-screen justify-between ">



        {{-- header --}}

    <x-topnav></x-topnav>


       {{--
                    <x-search-card></x-search-card> --}}


    {{-- Content & sidenav--}}

    <div class="flex sm:fixed grid grid-cols-10 h-screen w-full pointer-events-none">
        <x-sidenav></x-sidenav>
        <div class="col-span-10 sm:col-span-7 lg:col-span-8 pointer-events-none fixed">



        </div>
    </div>


    <div class="grid grid-cols-10 w-full pointer-events-none ">

        <div class="col-span-3 lg:col-span-2 pointer-events-none" id="spaceUnderSideNav"></div>

        <section class="col-span-10 sm:col-span-7 lg:col-span-8 px-6   pointer-events-auto " id="contentDiv">

                <div class="mb-auto pb-5 max-w-screen-2xl mx-auto lg:px-10 ">


                {{ $slot }}

                    <div class="hidden w-64 bg-gray-900">
                      <div class="h-36 w-full">
                        <img class="w-64 h-36" src="https://i.ytimg.com/vi/l7TxwBhtTUY/hq720_live.jpg?sqp=CNjfsYAG-oaymwEZCNAFEJQDSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAmVNjMQzuOHHknmocydqjEQyedCg" alt="" />
                      </div>
                      <div class="mt-3 flex items-start space-x-2">
                        <div class="flex-shrink-0 w-9 h-9 rounded-full overflow-hidden bg-white">
                          <img src="https://yt3.ggpht.com/ytc/AAUvwnhbzltKjEkb2tlCdRpx2-wjpvBYy_RRMQzNmpSmLQ=s68-c-k-c0x00ffffff-no-rj" alt="" />
                        </div>
                        <div class="flex flex-col text-md tracking-tighter leading-tight">
                          <div class="text-white overflow-ellipsis">lofi hip hop radio - sad & sleepy beats 😴</div>
                          <div class="mt-1 flex items-baseline space-x-1">
                            <div class="text-gray-400">the bootleg boy</div>
                            <div class="w-3 h-3 pt-0.5">
                              <svg viewBox="0 0 24 24" class="text-gray-400" fill="currentColor">
                                <g><path fill-rule="evenodd" clip-rule="evenodd" d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10 S17.52,2,12,2z M9.92,17.93l-4.95-4.95l2.05-2.05l2.9,2.9l7.35-7.35l2.05,2.05L9.92,17.93z"></path></g>
                              </svg>
                            </div>
                          </div>
                          <div class="text-gray-400">750 watching</div>
                          <div class="mt-1 text-xs tracking-wide font-bold border border-red-500 text-red-600 px-1 py-0.5 rounded-sm w-max">LIVE NOW</div>
                        </div>
                      </div>
                    </div>


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



    <x-card-generic class="hidden fixed text-black py-2 px-4 rounded-xl top-20 right-5  w-64">
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


    <x-card-generic class="hidden pb-4 fixed text-black py-2  px-4 rounded-xl pointer-events top-20  inset-x-0 mx-auto max-w-2xl z-20 ">

            <!-- Title -->
            <div class="col-span-full mb-3 text-left">
                <p class="text-xl text-gray-800 font-semibold"> Search Suggestions</p>
              </div>


        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody>
                <x-search-suggestion text="Microsoft Computer"></x-search-suggestion>
                <x-search-suggestion text="Apple Computer"></x-search-suggestion>
                <x-search-suggestion text="3 search results is probably good enough"></x-search-suggestion>
            </tbody>
        </table>

        <div class="mt-4 grid grid-cols-6 gap-x-3 gap-y-2 max-w-2xl">

            <div class="col-span-full mb-3 text-left">
              <p class="text-xl text-gray-800 font-semibold">Popular Today</p>
            </div>

            <x-search-popular-category name="Gaming" img="https://images.pexels.com/photos/3165335/pexels-photo-3165335.jpeg?cs=srgb&dl=pexels-lucie-liz-3165335.jpg&fm=jpg"></x-search-popular-category>
            <x-search-popular-category name="Sports" img="https://mongooseagency.com/files/3415/9620/1413/Return_of_Sports.jpg"></x-search-popular-category>
            <x-search-popular-category name="News" img=""></x-search-popular-category>
            <x-search-popular-category name="Technology" img=""></x-search-popular-category>
            <x-search-popular-category name="Culture" img=""></x-search-popular-category>
            <x-search-popular-category name="Health" img=""></x-search-popular-category>

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
