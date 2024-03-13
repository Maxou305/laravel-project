<x-layout>
    <h1>Meows List</h1>
    <div style="padding: 20px; display: grid;
           grid-template-columns: repeat(5, 1fr); gap: 1rem">
        @foreach ($meows as $meow)
            <x-meow-card :meow="$meow"/>
        @endforeach
    </div>
</x-layout>
