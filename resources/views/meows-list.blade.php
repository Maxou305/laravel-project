<x-layout>
    <div style="padding: 20px; display: flex; flex-direction: column; gap: 5px">
        <h1>Meows List</h1>
        @foreach ($meows as $meow)
            <x-meow-card :meow="$meow"/>
        @endforeach
    </div>
</x-layout>
