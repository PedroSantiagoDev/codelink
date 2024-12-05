<div>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Nome">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <input type="email" name="email" placeholder="Email">
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div>
            <input type="email" name="email_confirmation" placeholder="Confirme o email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Senha">
            @error('password')
                {{ $message }}
            @enderror
        </div>
        <button type="submit">Registrar</button>
    </form>
</div>
