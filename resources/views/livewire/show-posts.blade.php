<div>
    Show posts

    <p>
        {{$message}}
    </p>

    <input type="text" name="message" id="message" wire:model="message">

    <hr>

    @foreach ($posts as $post)
        {{ $post->user->name }} - {{ $post->content }}
    @endforeach
</div>
