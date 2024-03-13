{{--<div class="card text-bg-warning mb-3">--}}
{{--    <div class="card-header">{{$comment->user->name}}</div>--}}
{{--    <div class="card-body">--}}
{{--        <p class="card-text">{{$comment->content}}</p>--}}
{{--    </div>--}}
{{--    <div class="blockquote-footer fst-italic mt-1">{{$comment->created_at}}</div>--}}
{{--</div>--}}

<div
    class="mt-5  block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <p class="font-normal text-gray-700 text-xl">{{$comment->content}}</p>
    <p class="text-2xl font-bold tracking-tight text-gray-900 italic">Author : {{$comment->user->name}}</p>
</div>
