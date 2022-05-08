<x-layout>

        <section class="px-6 py-8">

            <main class="w-full mx-auto mt-10 pt-5">
            <div class="grid grid-cols-10  ">

                <div class="col-span-10 lg:col-span-6 ">
                    <div class=" bg-zinc-800 rounded-xl">
                     <iframe  class="w-full aspect-video rounded-xl" src="https://www.youtube.com/embed/Ijk4j-r7qPA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="hidden lg:block col-span-0 lg:col-span-4 bg-indigo-500-">



                        <div class="w-full mx-2">
                            <div
                          class=" grid grid-cols-10 grid-flow-row overflow-hidden
                          rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow
                          duration-300 ease-in-out"
                        >
                          <div class="col-span-4">
                            <a href="#">
                              <img
                                src="https://picsum.photos/640/400/?random"
                                alt="Placeholder"
                                class=" rounded-xl object-cover aspect-video w-full"
                              />
                            </a>
                          </div>

                          <div class="col-span-6 ">
                            <div class="flex align-bottom flex-col leading-none p-2 ">
                              <div class="flex flex-row justify-between items-center">
                                <a
                                  class="flex items-center no-underline hover:underline text-black"
                                  href="#"
                                >
                                  <img
                                    alt="Placeholder"
                                    class="block rounded-full"
                                    src="https://picsum.photos/32/32/?random"
                                  />
                                  <span class="ml-2 text-sm"> John Doe </span>
                                </a>
                              </div>
                            </div>

                            <div class="">
                                <header
                                  class="flex items-center justify-between leading-tight "
                                >
                                  <h1 class="text-lg">
                                    <a class="no-underline hover:underline text-black" href="#">
                                      Title
                                    </a>
                                  </h1>
                                  <p class="text-grey-darker text-sm">9 min ago</p>
                                </header>
                              </div>

                        </div>



                        </div>
                      </div>


                </div>

            </div>
            </main>


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

                            <x-category-button :category="$post->category"/>
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
                            <x-post-comment :comment="$comment"/>
                        @endforeach
                    </section>
                </article>
            </main>
 --}}


</x-layout>


