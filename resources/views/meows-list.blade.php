<div>
    <h1>Meows List</h1>
    <ul>
        @foreach ($meows as $meow)
            <li>{{ $meow->content }}</li>
        @endforeach
    </ul>
</div>
