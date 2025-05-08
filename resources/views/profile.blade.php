<div>
    <h1>Profile</h1>
    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <img src="/storage/{{ $user->photo }}" alt="Foto de perfil" style="width: 100px; height: 100px; border-radius: 50%;" />
            <label for="photo">Foto de perfil:</label>
            <input type="file" name="photo" />
        </div>
        <div>
            <label for="name">Nome:</label>
            <input name="name" value="{{ old('name', $user->name) }}" />
            @error('name')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <label for="description">Resumo:</label>
            <textarea name="description">{{ old('description', $user->description) }}</textarea>
            @error('description')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <label for="handler">linki.com/@:</label>
            <input name="handler" value="{{ old('handler', $user->handler) }}" />
            @error('handler')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>

        <a href="{{ route('dashboard') }}">Voltar</a>
        <button type="submit">Salvar</button>
    </form>
</div>
