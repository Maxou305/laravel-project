<form action="/update/meow/{{$meow->id}}" method="POST" class="flex gap-4 w-full">
    @csrf
    @method('PUT')
    <input type="text" name="content" id="content"
           class="w-full block p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
           placeholder="{{$meow->content}}"/>
    <button type="submit">
        <img src="https://www.svgrepo.com/show/457745/send.svg" alt="" style="width: 50px">
    </button>
</form>
