{{--<div class="card text-bg-light mb-3">--}}
{{--    <div class="card-header" style="font-family: 'Comic Sans MS', serif">--}}
{{--        <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="meow icon"--}}
{{--             style="width: 25px">--}}
{{--        {{ Str::upper($meow->user->name) }}--}}
{{--    </div>--}}
{{--    <div class="card-body" style="display: flex; flex-direction:column; gap: 10px">--}}
{{--        <h5 class="card-title">{{ $meow->content}}</h5>--}}
{{--        <div class="blockquote-footer fst-italic mt-1">{{$meow->created_at}}</div>--}}
{{--        <div>--}}
{{--            @if($meow->comments->count() > 0)--}}
{{--                @foreach($meow->comments as $comment)--}}
{{--                    <x-comment-card :comment="$comment"/>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <p style="font-style: italic" class="card-text">No comment yet</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <form action="/meows/{{$meow->id}}/comments" method="POST">--}}
{{--            @csrf--}}
{{--            <div class="input-group mb-3">--}}
{{--                <input type="text" class="form-control" placeholder="Add a comment" name="content">--}}
{{--                <button class="btn btn-outline-secondary" type="submit">Comment</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
    <div class="px-6 py-4 gap-4 flex flex-col">
        <div class="flex flex-row gap-4">
            <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="meow icon"
                 style="width: 25px">
            <p class="text-gray-700 text-base">
                {{ Str::upper($meow->user->name) }}
            </p>
        </div>
        <div class="font-bold text-xl mb-2"
             style="font-family: 'Comic Sans MS', serif">{{ $meow->content}}</div>
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">-{{$meow->created_at}}</span>
        <div class="gap-2">
            @if($meow->comments->count() > 0)
                @foreach($meow->comments as $comment)
                    <x-comment-card :comment="$comment"/>
                @endforeach
            @else
                <p style="font-style: italic" class="card-text">No comment yet</p>
            @endif
        </div>
        <div class="flex gap-4">
            <input type="search" id="default-search"
                   class="w-full block p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Add comment"/>
            <button>
                <img src="https://www.svgrepo.com/show/457745/send.svg" alt="" style="width: 50px">
            </button>
        </div>
    </div>
</div>
