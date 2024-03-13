<x-layout>
    <div style="padding: 20px; display: grid;
           grid-template-columns: repeat(1, 1fr); gap: 1rem; max-width: 1000px; margin: auto">
        @foreach ($meows as $meow)
            <x-meow-card :meow="$meow"/>
        @endforeach
    </div>
</x-layout>
