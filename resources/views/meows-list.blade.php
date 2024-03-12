<div>
    <h1>Meows List</h1>
    @foreach ($meows as $meow)
        <h2 style="color: forestgreen">{{$meow->content}}</h2>
        <p style="color: darkblue">Author : {{ $meow->user->name}}</p>
        @foreach($meow->comments as $comment)
            <p style="color: darkred">Comment : {{ $comment->content}} - {{$comment->user->name}}</p>
        @endforeach
    @endforeach
</div>
