<x-layout>
    @foreach ($meows as $meow)
        <x-meow-card :meow="$meow"/>
    @endforeach
</x-layout>
