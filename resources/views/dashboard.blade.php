<div>
    <h1>Dashboard</h1>
    <h2>Bem vindo, {{ auth()->user()->name }}</h2>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('profile') }}">Atualizar perfil</a>
    <a href="{{ route('links.create') }}">Criar novo link</a>

    <ul>
        @foreach ($links as $link)
            <li style="display: flex; gap: 8px;">
                {{-- @dump($loop) --}}
                @unless($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">⬆️</button>
                    </form>
                @endunless
                @unless ($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">⬇️</button>
                    </form>
                @endunless

                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->id }} {{ $link->name }}
                </a>

                <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este link?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
