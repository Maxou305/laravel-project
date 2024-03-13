<x-layout>
    <div style="padding: 20px; display: flex; flex-direction: column; gap: 5px">
        <h1>Meows List</h1>
        @foreach ($meows as $meow)
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
        @endforeach
    </div>
</x-layout>
