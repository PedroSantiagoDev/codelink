<div>
    <h2>Login</h2>
    @if ($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Email">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div><input type="password" name="password" placeholder="Senha">
            @error('password')
                {{ $message }}
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
</div>
