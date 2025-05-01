<div>
    <h1>Criar um link</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('links.create') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input name="name" value="{{ old('name') }}" />
            @error('name')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <label for="url">Url:</label>
            <input name="url" value="{{ old('url') }}" />
            @error('url')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit">Criar</button>
    </form>
</div>
