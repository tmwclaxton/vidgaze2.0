@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl space-x-4 border border-gray-200">
    <div class="flex-shrink-0 ">
        <img style="width: 100px; height:100px;"
        class="rounded-xl"
        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">Posted <time>{{ $comment->created_at->diffForHumans() }}</time> </p>
        </header>

    <p>{{ $comment->body }}</p>
    </div>
</article>
