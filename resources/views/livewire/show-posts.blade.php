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
        {{ $post->user->name }} - {{ $post->content }}
        @if ($post->likes->count())
            <a href="#" wire:click.prevent="unlike({{$post->id}})">Unlike</a>
        @else
            <a href="#" wire:click.prevent="like({{$post->id}})">Like</a>
        @endif
        
        <br>
    @endforeach

    <hr>

    <div>
        {{$posts->links()}}
    </div>
</div>
