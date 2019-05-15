<h1>Registro de usuario</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label>Nombre</label>
    <input type="text" name="name">
    <label>Correo</label>
    <input type="text" name="email">
    <label>Contraseña</label>
    <input type="password" name="password">
    <input type="submit" value="Registrar">
</form>
