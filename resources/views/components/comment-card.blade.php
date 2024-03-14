<div
    class="mt-5 block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <p class="font-normal text-gray-700 text-xl">{{$comment->content}}</p>
    <p class="tracking-tight text-gray-900 italic">Author : {{$comment->user->name}}</p>
    <x-danger-button wire:click="delete({{$comment->id}})" class="mt-2">Delete</x-danger-button>
</div>
