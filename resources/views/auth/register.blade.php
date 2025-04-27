<div>
    {{ auth()->id() }}
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
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
            <label for="email">Email:</label>
            <input name="email" value="{{ old('email') }}" />
            @error('email')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div>
            <label for="email_confirmation">Email:</label>
            <input name="email_confirmation" />
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
            @error('password')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit">Registrar</button>
    </form>
</div>
