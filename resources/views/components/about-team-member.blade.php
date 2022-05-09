{{-- @props(['img','fullname','discription','github','twitter','instagram'])


<div>
    <img class="object-cover rounded-xl h-64 w-full" src="{{$img}}" alt="">

    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">{{$fullname}}</h1>

    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">{{$discription}}</p>

    <div class="w-full flex justify-left pt-4 ">
        <a href="{{$github}}" class="mx-2">
            <div aria-label="Github" role="img">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
            </div>
        </a>
        <a href="{{$twitter}}" class="mx-2">
            <div aria-label="Twitter" role="img">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg" alt="twitter" />
            </div>
        </a>
        <a href="{{$instagram}}" class="mx-2">
            <div aria-label="Instagram" role="img">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
            </div>
        </a>
    </div>

</div>



 --}}

 @props(['img','fullname','discription','github','twitter','instagram'])

    <div class="w-full bg-white rounded-lg shadow-2xl overflow-hidden
    flex flex-col justify-center items-center ">
        <div>
            <img class="aspect-square w-full" src="{{$img}}" alt="photo">
        </div>
        <div class="text-center py-8 sm:py-6">
            <p class="text-xl text-gray-700 font-bold mb-2">{{$fullname}}</p>
            <p class="text-base text-gray-400 font-normal">{{$discription}}</p>
            <div class="w-full flex justify-center pt-4 ">
                <a href="{{$github}}" class="mx-2">
                    <div aria-label="Github" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                    </div>
                </a>
                <a href="{{$twitter}}" class="mx-2">
                    <div aria-label="Twitter" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg" alt="twitter" />
                    </div>
                </a>
                <a href="{{$instagram}}" class="mx-2">
                    <div aria-label="Instagram" role="img">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                    </div>
                </a>
            </div>
        </div>
    </div>
