<x-layout>

    {{-- design a theatre mode --}}

    <section x-data="{theatre: false}" :class="theatre ? 'lg:px-0 px-0 py-0' : ' lg:px-16 px-6 py-8'"
        class="lg:px-16 px-6 py-8">

        <main @keydown.document.escape="theatre = false" class="w-full mx-auto mt-14 ">

            {{-- video, channel, suggestions --}}
            <div class="w-full">

                {{-- embeded video and channel info --}}
                <div :class="theatre ? 'lg:w-full lg:pr-0' : 'lg:pr-5'"
                    class="float-left w-full lg:w-8/12 px-0  lg:pr-5 ">


                    <div style="background-image:
                    url('https://images.unsplash.com/photo-1475274047050-1d0c0975c63e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmlnaHQlMjBza3l8ZW58MHx8MHx8&w=1000&q=80')""
                     :class=" theatre ? 'h-[calc(100vh-10rem)] mt-2 px-39 w-full bg-black' : 'bg-zinc-800'" >
                        <iframe
                        :class=" theatre ? 'aspect-video mx-auto h-full ' : 'w-full aspect-video max-h-screen'"
                         src=" https://www.youtube.com/embed/Ijk4j-r7qPA" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                    <div :class="theatre ? 'lg:px-16 px-6' : ' '">
                        {{-- title and buttons section --}}
                        <p class="text-lg font-semibold mt-3 leading-6 line-clamp-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nostrum rem tempore
                        </p>

                        <div>
                            <span class="flex pt-2 justify-between mb-4 ">
                                <p class="hidden sm:flex  pr-3">1,096,066 views · May 19, 2017</p>

                                <span class="ml-auto flex justify-end font-semibold ">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="bi bi-hand-thumbs-up h-7 " viewBox="0 0 16 16">
                                        <path
                                            d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                                    </svg>
                                    <p class="pl-1 pr-2 md:pr-3">1K</p>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="bi bi-hand-thumbs-down h-7 " viewBox="0 0 16 16">
                                        <path
                                            d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z" />
                                    </svg>
                                    <p class=" pl-1 pr-2 md:pr-3">354</p>

                                    <svg id="Capa_1" class="h-7" enable-background="new 0 0 512.231 512.231"
                                        viewBox="0 0 512.231 512.231" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m271.249 121.448c-70.515 3.65-136.443 33.004-187.025 83.587-54.152 54.151-83.975 125.899-83.975 202.025v105.171l38.098-87.825c44.499-88.669 134.739-147.458 232.902-152.927v121.202l240.733-196.638-240.733-196.043zm30 29.612v-87.94l163.267 132.958-163.267 133.361v-88.379h-15c-56.878 0-112.732 15.993-161.522 46.249-36.948 22.913-68.428 53.121-92.593 88.604 15.408-126.529 123.493-224.853 254.115-224.853z" />
                                        </g>
                                    </svg>
                                    <p class="pl-1 pr-2 md:pr-3">Share</p>

                                    <svg height="512" viewBox="0 0 32 32" class="h-7"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="b52bde4b-a7b9-4f14-89de-ad90c2ceed67" data-name="Layer 6">
                                            <path
                                                d="m17 9h-14a1 1 0 0 1 0-2h14a1 1 0 0 1 0 2zm1 4a1 1 0 0 0 -1-1h-14a1 1 0 0 0 0 2h14a1 1 0 0 0 1-1zm-7 5a1 1 0 0 0 -1-1h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 1-1zm18-1h-6v-6a1 1 0 0 0 -2 0v6h-6a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2z" />
                                        </g>
                                    </svg>
                                    <p class="pl-1 pr-2 md:pr-3">Save</p>

                                    <svg x-on:click="theatre = ! theatre" xmlns="http://www.w3.org/2000/svg"
                                        class="hidden lg:block h-7" fill="currentColor" class="bi bi-aspect-ratio"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                        <path
                                            d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z" />
                                    </svg>
                                    <p x-on:click="theatre = ! theatre" class=" hidden lg:block  pl-1 pr-2 md:pr-3">
                                        Theatre </p>

                                </span>

                            </span>

                            @php
                            $award = [[2,1],[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8]
                            ,[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8],[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8]
                            ,[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8],[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8]
                            ,[5,8],[2,1],[5,8],[2,1],[5,8],[2,1],[5,8]];
                            @endphp
                            @isset($award)
                            <div class="w-full px-2 ">
                                @foreach($award as $key => $value)
                                <div class="hover:cursor-pointer inline-block">
                                    <x-award award_id="{{$value[0]}}" class="h-4  inline"></x-award>
                                    <p class="text-xs inline mr-1 ">{{$value[1]}}</p>
                                </div>
                                @endforeach
                                @endisset
                            </div>

                            <div class="divider m-0 "></div>

                            <div class="flex pt-2 justify-between">
                                <span class="flex  pr-3">
                                    <img class="hover:cursor-pointer inline object-cover w-12 h-12 mr-2 rounded-full"
                                        src="https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj"
                                        alt="Profile image" />
                                    <div class="pl-1">
                                        <p class="text-base font-semibold hover:cursor-pointer">Adam Something</p>
                                        <p class="text-sm">748K subscribers</p>
                                    </div>
                                </span>


                                <span class="ml-auto flex justify-end font-semibold ">
                                    <button type="button" class="mt-1 h-9 uppercase font-semibold text-sm text-white bg-red-700 hover:bg-red-800 focus:outline-none
                                        focus:ring-4 focus:ring-red-300  rounded-sm
                                        px-3 py-1 text-center mr-2 mb-2 dark:bg-red-600
                                        dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Subscribe
                                    </button>
                                </span>

                            </div>


                            <p style="" class="line-clamp-3 ml-12 pl-3 pt-3 pr-2">Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Maiores quasi tempora nostrum debitis iusto,
                                repellendus distinctio odit suscipit velit veritatis architecto possimus corrupti,
                                laudantium cum id excepturi esse labore numquam.</p>

                            <div class="divider">Show more</div>
                        </div>
                    </div>



                </div>




                {{-- video suggestions --}}

                <div :class="theatre ? 'lg:pr-16 pr-6' : ' '" class="float-right w-full lg:w-4/12   ">

                    <div class="w-full ">

                        @for ($i = 0; $i < 14; $i++) <x-watch-suggestion>
                            </x-watch-suggestion>
                            @endfor
                            <x-button name="rect_button"
                                class="w-full bg-gray-200 text-gray-600 hover:bg-gray-300 focus:ring-gray-200">
                                Load More Videos</x-button>

                    </div>

                </div>




                {{-- comment section --}}
                <div :class="theatre ? 'lg:pl-16 pl-6' : ' '"
                    class="float-left w-full lg:w-8/12  px-0 lg:pr-5 overflow-clip">
                    <div id="comment_section" class=" grid grid-cols-1 w-full">

                        <div class="grid grid-cols-2">

                            <p class="m-2">821 Comments</p>


                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class=" relative inline-block text-right" x-data="{ show: false}">
                                {{-- order commentsection button --}}
                                <div>
                                    <button type="button" @click="show= !show" @click.away="show = false"
                                        class="inline-flex justify-right w-30 rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 focus:outline-none hover:bg-gray-50"
                                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                                        Sort By
                                        <!-- Heroicon name: solid/chevron-down -->
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                {{-- dropdown menu for comment section --}}
                                <div x-show="show" style="display:none;"
                                    class="z-10 text-left origin-top-right absolute right-0 mt-2 w-28 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <p class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer"
                                            role="menuitem" tabindex="-1" id="menu-item-1">Rising</p>
                                        <p class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer"
                                            role="menuitem" tabindex="-1" id="menu-item-0">Popular</p>
                                        <p class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer"
                                            role="menuitem" tabindex="-1" id="menu-item-1">Controversial</p>

                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 w-full col-span-2 p-1">
                                {{-- textarea --}}
                                <textarea
                                    x-data="{ resize: () => { $el.style.height = '5px'; $el.style.height = $el.scrollHeight + 'px' } }"
                                    x-init="resize()" @input="resize()" id="message"
                                    class="mb-3 mt-3 w-full peer block p-2 resize-none text-sm text-gray-900 bg-gray-50 rounded-sm
                            border-t-0 border-x-0 border-b-1 border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:border-1 "
                                    placeholder="Leave a comment...">
                        </textarea>
                                <div class=" justify-end w-full hidden peer-focus:flex">
                                    <x-button name="rect_button"
                                        class="mr-2 bg-white-200 text-gray-600 focus:ring-gray-200 max-w-min ">
                                        Cancel</x-button>
                                    <x-button name="rect_button"
                                        class=" bg-gray-200 text-gray-600 hover:bg-gray-300 focus:ring-gray-200 max-w-min mr-0">
                                        Comment</x-button>
                                </div>
                            </div>
                        </div>


                        <x-watch-comment
                            img='https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj'
                            name='Toby Claxton' time='2 days ago'
                            body='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus illo dignissimos esse fuga aliquam error, aut ad cum asperiores dolorum voluptates tempora beatae provident quaerat id illum neque nesciunt.'
                            replies='10' likes='3' dislikes='155' button='0' level='7' children='0' endthread='1'
                            :award="[[1,10],[2,1],[6,4],[3,200],[4,5000],[5,2000000],[7,900000000]]" pinned=1>
                        </x-watch-comment>
                        <x-watch-comment
                            img='https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj'
                            name='Toby Claxton' time='2 days ago'
                            body='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus illo dignissimos esse fuga aliquam error, aut ad cum asperiores dolorum voluptates tempora beatae provident quaerat id illum neque nesciunt.'
                            replies='10' likes='3' dislikes='155' button='0' {{-- 0 both unselected, 1 like button, 2
                            dislike button --}} level='0' children='1'
                            :award="[[1,10],[2,1],[6,4],[3,200],[4,5000],[5,2000000],[7,900000000]]"></x-watch-comment>
                        <x-watch-comment
                            img='https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj'
                            name='Toby Claxton' time='2 days ago'
                            body='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus illo dignissimos esse fuga aliquam error, aut ad cum asperiores dolorum voluptates tempora beatae provident quaerat id illum neque nesciunt.'
                            replies='10' likes='3' dislikes='155' button='0' {{-- 0 both unselected, 1 like button, 2
                            dislike button --}} level='1' children='1'></x-watch-comment>
                        <x-watch-comment
                            img='https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj'
                            name='Toby Claxton' time='2 days ago'
                            body='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus illo dignissimos esse fuga aliquam error, aut ad cum asperiores dolorum voluptates tempora beatae provident quaerat id illum neque nesciunt.'
                            replies='10' likes='3' dislikes='155' button='0' {{-- 0 both unselected, 1 like button, 2
                            dislike button --}} level='2' children='0'
                            :award="[[1,10],[2,1],[6,4],[3,200],[4,5000],[5,2000000],[7,900000000]]"></x-watch-comment>
                        <x-watch-comment
                            img='https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj'
                            name='Toby Claxton' time='2 days ago'
                            body='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus illo dignissimos esse fuga aliquam error, aut ad cum asperiores dolorum voluptates tempora beatae provident quaerat id illum neque nesciunt.'
                            replies='0' likes='3' dislikes='155' button='0' {{-- 0 both unselected, 1 like button, 2
                            dislike button --}} level='2' children='0' endthread='1'></x-watch-comment>
                        <x-watch-comment
                            img='https://yt3.ggpht.com/cD8fBOG8RvVZo9vvWENNlk022NSfCKQRhFHbywxONZbM1lmn666P4scbBm4-Jj3jBsOd247qGpU=s88-c-k-c0x00ffffff-no-rj'
                            name='Toby Claxton' time='2 days ago'
                            body='Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus illo dignissimos esse fuga aliquam error, aut ad cum asperiores dolorum voluptates tempora beatae provident quaerat id illum neque nesciunt.'
                            replies='10' likes='3' dislikes='155' button='0' {{-- 0 both unselected, 1 like button, 2
                            dislike button --}} level='1' children='0' endthread='1'></x-watch-comment>



                        {{-- <p>234 Comments</p>
                        <section class="col-span-8 col-start-5 mt-10 space-y-7">
                            @auth


                            @include('posts._add-comment-form');

                            @else
                            <p>Log in to post a comment</p>
                            @endauth
                            @foreach ($post->comments as $comment)
                            <x-post-comment :comment="$comment" />
                            @endforeach
                        </section> --}}
                    </div>
                </div>



            </div>


        </main>


</x-layout>

{{--
<main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
        <div class="col-span-4 lg:text-center lg:mb-10 ">
            <img src="/images/illustration-1.png" alt="" class="rounded-xl">

            <p class="mt-4 block text-gray-400 text-xs">
                Published <time>{{ $post->created_at->diffForHumans(); }}</time>
            </p>

            <div class="flex items-center lg:justify-center text-sm mt-4">
                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3 text-left">
                    <a href="?authors={{ $post->author->username; }}">
                        <h5 class="font-bold">{{$post->author->name;}}</h5>
                    </a>
                    <h6>Mascot at Laracasts</h6>
                </div>
            </div>
        </div>

        <div class="col-span-8">
            <div class="hidden lg:flex justify-between mb-6">
                <a href="/"
                    class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                    <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path class="fill-current"
                                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                            </path>
                        </g>
                    </svg>

                    Back to Posts
                </a>

                <x-category-button :category="$post->category" />
            </div>

            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                {{ $post->title; }}
            </h1>

            <div class="space-y-4 lg:text-lg leading-loose">
                {!! $post->body; !!}
            </div>
        </div>
        <section class="col-span-8 col-start-5 mt-10 space-y-7">
            @auth


            @include('posts._add-comment-form');

            @else
            <p>Log in to post a comment</p>
            @endauth
            @foreach ($post->comments as $comment)
            <x-post-comment :comment="$comment" />
            @endforeach
        </section>
    </article>
</main>
--}}
