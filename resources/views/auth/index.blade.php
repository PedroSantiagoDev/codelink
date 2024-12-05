<div>
    <h2>Login</h2>
    @error('message')
        {{ $message }}
    @enderror
    <form method="POST" action="/login">
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
