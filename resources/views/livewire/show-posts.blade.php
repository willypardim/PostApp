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
        <div class="w-6/8">
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
