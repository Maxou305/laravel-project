<div
    class="mt-5 block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <form action="/delete/comment/{{$comment->id}}" method="POST">
        @csrf
        @method('DELETE')
        <p class="font-normal text-gray-700 text-xl">{{$comment->content}}</p>
        <p class="tracking-tight text-gray-900 italic">Author : {{$comment->user->name}}</p>
        @if(Auth::user()->id === $comment->user_id)
            <x-secondary-button onClick="displayEditCommentForm({{$comment->id}})" class="mt-2">Edit</x-secondary-button>
            <x-danger-button class="mt-2">Delete</x-danger-button>
        @endif
    </form>
    <div class="mt-5 flex flex-row gap-4 w-full mb-2" id="edit-comment-{{$comment->id}}" style="display: none">
        <x-input-edit-comment :comment="$comment"/>
    </div>
</div>
<script>
    function displayEditCommentForm(id) {
        let editComment = document.getElementById('edit-comment-' + id);
       editComment.style.display = editComment.style.display === 'none' ? 'block' : 'none';
    }
</script>
