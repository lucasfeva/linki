<div>
    <img src="/storage/{{ $user->photo }}" alt="Foto de perfil" style="width: 100px; height: 100px; border-radius: 50%;" />

    <h2>{{ $user->name }}</h2>
    <span>{{ $user->description }}</span>

    <ul>
        @foreach ($user->links as $link)
            <li style="display: flex; gap: 8px;">
                <a href="{{ $link->url }}" target="_blank">
                    {{-- @dump($loop) --}}
                    {{ $link->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
