<form method="post" action="/posts/{{$post->slug}}/comments" class="border border-gray-200 bg-gray-10 p-6 rounded-xl space-x-4">
    @csrf
    <header class="flex items-center">
            {{-- {{auth()->user()->id; || auth->id();}} --}}
            <img style="width: 40px; height:40px;"
            class="rounded-full "
            src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="">

        <h2 class="ml-5">Comment</h2>
    </header>
    <div class="mt-6">
        <textarea
        class=" p-2 w-full border border-gray-300 bg-gray-100 focus:outline-none "
        name="body"
        id=""
        rows="5"
        placeholder="Add a comment"
        required>
    </textarea>
    @error('body')
        <span>{{$message}}</span>

    @enderror

    </div>
    <div class="flex justify-end">
        <button type="button"
         class="mt-3 mr-1 text-xs uppercase font-semibold text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 rounded-lg  px-5 py-2.5  mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"
        >cancel</button>
        <button type="submit"
        class="mt-3 text-xs uppercase font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg  px-5 py-2.5  mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
       >comment</button>
    </div>
</form>
