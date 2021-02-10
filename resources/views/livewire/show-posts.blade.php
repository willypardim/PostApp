<div>
    Show posts

    <p>
        {{$message}}
    </p>

    <form method="post" wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Create Post</button>
    </form>

    <hr>

    @foreach ($posts as $post)
        {{ $post->user->name }} - {{ $post->content }} <br>
    @endforeach
</div>
