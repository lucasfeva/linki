<div>
    <h1>Editar link: {{ $link->name }}</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input name="name" value="{{ old('name', $link->name) }}" />
            @error('name')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <label for="url">Url:</label>
            <input name="url" value="{{ old('url', $link->url) }}" />
            @error('url')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <a href="{{ route('links.create') }}">Cancelar</a>
        <button type="submit">Editar</button>
    </form>
</div>
