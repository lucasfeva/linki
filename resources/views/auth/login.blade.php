<div>
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" />
            @error('email')
                <span>
                    {{ $message }}
                </span>
            @enderror
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
        <button type="submit">Login</button>
    </form>
</div>
