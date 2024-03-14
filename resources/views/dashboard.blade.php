<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding: 20px; display: grid;
                        grid-template-columns: repeat(1, 1fr); gap: 1rem; max-width: 1000px; margin: auto">
        <x-input-new-meow/>
        @foreach ($meows as $meow)
            <x-meow-card :meow="$meow"/>
        @endforeach
    </div>

</x-app-layout>
