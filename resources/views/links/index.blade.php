oi {{ auth()->id() ?? 'Pedro' }}

@auth
    <a href="{{ route('links.create') }}">criar link</a>
@endauth

@guest
    <a href="{{ route('login') }}">login</a>
    <a href="{{ route('register') }}">register</a>
@endguest

@foreach ($links as $link)
    <a href="{{ $link->url }}">{{ $link->name }}</a>
@endforeach
