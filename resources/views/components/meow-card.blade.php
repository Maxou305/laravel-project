<div class="card text-bg-dark mb-3">
    <div class="card-header">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="meow icon"
             style="width: 25px">
        {{ Str::upper($meow->user->name) }}
    </div>
    <div class="card-body" style="display: flex; flex-direction:column; gap: 10px">
        <h5 class="card-title">{{ $meow->content}}</h5>
        <div class="blockquote-footer fst-italic mt-1">{{$meow->created_at}}</div>
        <div>
            @if($meow->comments->count() > 0)
                @foreach($meow->comments as $comment)
                    <x-comment-card :comment="$comment"/>
                @endforeach
            @else
                <p style="font-style: italic" class="card-text">No comment yet</p>
            @endif
        </div>
    </div>
</div>
