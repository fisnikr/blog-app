<x-layout>


<div class="flex items-center p-12 mx-auto space-y-4 bg-gray-50">
    <article class="bg-white p-4 rounded lg">
        <h2 class="font-bold text-3xl">
        {{ $post->title }}
        </h2>
        <p>
            By <a href="#">{{ $post->user->name }}</a> in
        <a href="/categories/{{ $post->category->slug }}" class="text-blue-400 font-semibold">{{ $post->category->name }}</a>
        </p>

        <div class="py-2">
        {!! $post->body !!}
        </div>
    
   
    </article>

    
    </div>
    <div class="flex items-start p-12 mx-auto">
       <span class="text-blue-300 font-semibold uppercase">
       <a href="/">Go back</a>
       </span>
    </div>

</x-layout>
