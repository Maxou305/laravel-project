<div class="card text-bg-warning mb-3">
    <div class="card-header">{{$comment->user->name}}</div>
    <div class="card-body">
        <p class="card-text">{{$comment->content}}</p>
    </div>
    <div class="blockquote-footer fst-italic mt-1">{{$comment->created_at}}></div>
</div>
