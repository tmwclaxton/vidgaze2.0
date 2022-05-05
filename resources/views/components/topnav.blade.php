
    {{-- bg-[url('/images/logo/night_sky.jpg')] --}}
    <nav style="background:#060911;" class=" border-gray-200 pb-1 px-2 sm:px-4 py-2.5 w-full fixed z-40">
        <div class="grid grid-cols-2 lg:grid-cols-7 ">
            <div class="flex items-center lg:col-span-2">
                <button id="openSideBar" onclick="sidebarHandler()"

                    type="button"
                    class="
                    mb-1
                    inline-flex items-center p-2 text-sm
                        text-gray-100 rounded-lg  hover:bg-blue-700
                        focus:outline-none focus:ring-2 focus:ring-gray-200
                        dark:text-gray-400 dark:hover:bg-gray-700
                        dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-4"
                        aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
               <a href="#"   class="flex items-center ">
                    <img src="/images/logo/vidgaze_banner.png"
                    class="h-12" style="border-radius:25px;" alt="Logo" />

                </a>
            </div>
            {{-- <div class="container flex flex-wrap justify-start mx-auto">




            <div class="flex md:order-2">

            </div> --}}

            <div class="hidden relative lg:block lg:col-span-3">
                <x-search></x-search>
            </div>

            <div class="flow-root lg:col-span-2">
                {{-- <button type="button" class="max-h-10 float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in with Google</button> --}}

                <button type="button" class="max-h-10 float-right
                    font-medium rounded-lg
                    text-sm px-5 py-2.5 text-center inline-flex items-center
                    text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800

                    mr-2 mb-2

                    ">
                    <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                    Sign in with Google
                  </button>
            </div>
        </div>
    </nav>
