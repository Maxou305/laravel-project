<div class="rounded overflow-hidden shadow-lg bg-white px-6">
    <div class="py-4 gap-4 flex flex-col">
        <div class="flex flex-row gap-4  items-center">
            <img src="{{$meow->user->avatar}}" alt="meow icon"
                 style="width: 60px; border-radius: 50px">
            <p class="text-gray-700">
                {{ Str::upper($meow->user->name) }}
            </p>
        </div>
        <div class="font-bold text-xl mb-2 justify-between flex flex-row"
             style="font-family: 'Comic Sans MS', serif">{{ $meow->content}}
            <div class="flex flex-row gap-2">
                @if(Auth::user()->id === $meow->user_id)
                    <x-secondary-button onClick="displayEditForm()" class="mt-2">Edit</x-secondary-button>
                @endif
                <form action="/delete/meow/{{$meow->id}}" method="POST">
                    @csrf
                    @Method('DELETE')
                    @if(Auth::user()->id === $meow->user_id)
                        <x-danger-button class="mt-2">Delete</x-danger-button>
                    @endif
                </form>
            </div>
        </div>
    </div>


    <div class="flex flex-row gap-4 w-full mb-4" id="edit-form" style="display: none">
        <x-input-edit-meow :meow="$meow"/>
    </div>

    <span
        class="w-fit text-end inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$meow->created_at}}</span>
    <div class="gap-2">
        @if($meow->comments->count() > 0)
            @foreach($meow->comments as $comment)
                <x-comment-card :comment="$comment"/>
            @endforeach
        @else
            <p style="font-style: italic" class="card-text">No comment yet</p>
        @endif
    </div>
    <div class="py-4">
        <x-input-new-comment :meow="$meow"/>
    </div>
</div>

<script>
    function displayEditForm() {
        document.getElementById('edit-form').style.display = document.getElementById('edit-form').style.display === 'none' ? 'block' : 'none';
    }
</script>
