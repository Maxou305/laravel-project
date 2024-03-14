<div class=" rounded overflow-hidden shadow-lg bg-white">
    <div class="px-6 py-4 gap-4 flex flex-col">
        <div class="flex flex-row gap-4">
            <img src="{{$meow->user->avatar}}" alt="meow icon"
                 style="width: 25px">
            <p class="text-gray-700 text-base">
                {{ Str::upper($meow->user->name) }}
            </p>
        </div>
        <div class="font-bold text-xl mb-2"
             style="font-family: 'Comic Sans MS', serif">{{ $meow->content}}</div>
        <span
            class="w-fit text-end inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$meow->created_at}}</span>
        <div class="gap-2">
            @if($meow->comments->count() > 0)
                @foreach($meow->comments as $comment)
                    <x-comment-card :comment="$comment"/>
                @endforeach
            @else
                <p style="font-style: italic" class="card-text">No comment yet</p>
            @endif
        </div>
        <x-input-new-comment :meow="$meow"/>
    </div>
</div>
