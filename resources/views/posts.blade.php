<x-layout>
<div class="flex flex-col items-center p-12 mx-auto space-y-4">
    @foreach ($posts as $post)
     <article class="bg-gray-100 p-4 space-y-2 rounded-md shadow-md">

        
        <h2 class="font-bold text-xl">
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h2>
        <div>
        {{ $post->excerpt }}
        </div>
     </article>   
     @endforeach
    </div>
</x-layout>