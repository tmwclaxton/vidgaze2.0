
    {{-- bg-[url('/images/logo/night_sky.jpg')] --}}
    <nav style="background:#060911;" class=" border-gray-200 pb-1 px-2 sm:px-4 py-2.5 w-full fixed z-40">
        <div class="grid grid-cols-2 lg:grid-cols-7 ">
            <div class="flex items-center lg:col-span-2">
                <button id="openSideBar" onclick="sidebarHandler()"

                    type="button"
                    class="
                    mb-1
                    inline-flex items-center p-2 text-sm
                        text-gray-100 rounded-lg  hover:ring-gray-200 hover:ring-2
                        focus:outline-none
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

            <div class="flow-root lg:col-span-2 ">
                {{-- <button type="button" class="max-h-10 float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in with Google</button> --}}
@guest



                <button type="button" class="max-h-10 float-right
                    font-medium rounded-lg
                    text-sm px-5 py-2.5 text-center inline-flex items-center
                    text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800
                    mr-2 mb-2
                    ">
                    <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                    Sign in with Google
                  </button>

@else


                  <div class="flex flex-row items-center space-x-5 float-right">

                    <a class="text-white opacity-60 hover:opacity-80 focus:opacity-80 " href="#">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6"
                            fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"
                            ></path>
                        </svg>
                      </a>

                        <a class="text-white opacity-60 hover:opacity-80 focus:opacity-80 mr-2 dropdown-toggle hidden-arrow flex items-center"
                        href="#"
                        id="dropdownMenuButton1"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="bell"
                            class="w-5"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                        >
                            <path
                            fill="currentColor"
                            d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"
                            ></path>
                        </svg>
                        <span class="text-white bg-red-700 absolute rounded-full text-xs -mt-2.5 ml-2 py-0 px-1.5">
                            1
                        </span>
                        </a>



                    <button type="button" class=" h-10 mt-0 aspect-square  mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-full aspect-square rounded-full" src="https://s2.dmcdn.net/u/2KTSE1YJq92THDP-E/720x720"
                        alt="user photo">
                    </button>
                  </div>

@endguest
            </div>
        </div>



    </nav>


