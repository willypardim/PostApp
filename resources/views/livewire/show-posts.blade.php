



<div>
    Show posts

    <p>
        {{$content}}
    </p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            {{$message}}
        @enderror
        <button type="submit">Create Post</button>
    </form>

    <hr>

    @foreach ($posts as $post)
    <div class="flex">
        <div class="w-2/8">
            @if ($post->user->photo)
                <img src="{{url("storage/{$post->user->photo}") }}" alt="{{ $post->user->name }}" class="rounded-full h-8 w-8"> 
            @else
                <img src="{{url('image/no-image.png')}}" alt="{{ $post->user->name }}" class="rounded-full h-8 w-8">
            @endif
                {{ $post->user->name }}
        </div>
        
        {{ $post->content }}
        <div class="w-7/8">
            @if ($post->likes->count())
                <a href="#" wire:click.prevent="unlike({{$post->id}})">Unlike</a>
            @else
                <a href="#" wire:click.prevent="like({{$post->id}})">Like</a>
            @endif
        </div>
    </div>
        
        
        <br>
    @endforeach

    <hr>

    <div>
        {{$posts->links()}}
    </div>
</div>

<div class="grid.grid-cols-1 lg:grid-cols-2">
    <div class="bg-blue-600 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12">
        <div class="flex-grow">
            <h1 class="text-white text-center text-2xl sm:text-5xl mb-2">
                Seja bem vindo
            </h1>
            <p class="text-center text-blue-200 sm:text-lg">
                Faça seu login para começar
            </p>
        </div>
    </div>
</div>





