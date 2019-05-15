<h1>Perfil</h1>
@if (Auth::check())
    {{ Auth::user()->name }}
    <a href="{{ route('users.logout') }}">Cerrar sesión</a>
@else
    El usuario no tiene sesión.
    <ul>
        <li><a href="{{ route('users.register') }}">Registrarse</a></li>
    </ul>
@endif

