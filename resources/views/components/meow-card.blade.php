<div class="card text-bg-dark mb-3">
    <div class="card-header" style="gap: 10px">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="meow icon"
             style="width: 25px">
        {{ $meow->user->name }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $meow->content}}</h5>
        @foreach($meow->comments as $comment)
            <p class="card-text">{{ $comment->content }} - {{ $comment->user->name }}</p>
        @endforeach
    </div>
</div>
