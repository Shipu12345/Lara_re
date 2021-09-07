<x-panel>


@auth
    <form action="/posts/{{$post->slug}}/comments" method="post">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="10"
                      placeholder="Quick, Think of something!" required></textarea>
            @error('body')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-6 border-t border-gray-200 p-6 ">
           <x-submit-button>Post</x-submit-button>
        </div>

    </form>
@else
    <div class="font-semibold">
        <p><a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log
                In</a> to leave a comment.</p>
    </div>
@endauth
</x-panel>
