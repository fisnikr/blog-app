@props(['posts'])

<x-post-hero-card :post="$posts[0]" />

        @if ($posts->count() > 1)  
            <div class="2xl:grid 2xl:grid-cols-3"> 
                @foreach ($posts->skip(1) as $post)
                    
                    <x-post-card 
                        :post="$post" 
                        class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" 
                    />
                
                @endforeach
            </div> 
        @endif
       