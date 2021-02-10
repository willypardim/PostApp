<div>
    <h1>Atualize sua foto do perfil</h1>
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        @error('photo')
            {{$message}}
        @enderror
        <button type="submit">Atualizar foto</button>
    </form>
</div>