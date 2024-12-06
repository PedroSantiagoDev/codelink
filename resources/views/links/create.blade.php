<div>
    <h2>Criar link</h2>
    @if ($message = session()->get('message'))
        <span>{{ $message }}</span>
    @endif

    <form method="POST" action="{{ route('links.store') }}">
        @csrf
        <div>
            <input name="name" placeholder="Nome">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div><input name="url" placeholder="URL">
            @error('url')
                {{ $message }}
            @enderror
        </div>
        <button type="submit">Adicionar</button>
    </form>
</div>

