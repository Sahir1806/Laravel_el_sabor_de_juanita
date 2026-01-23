@foreach ($usuarios as $usuario)
    <p>Nombre del usuario: {{ $usuario->name }}</p>
    <p>Email: {{$usuario->email}}</p>
@endforeach

<ul>
    @foreach ($usuarios as $usuario)
        <li>{{ $usuario->name }}</li>

    <li>Email: {{$usuario->email}}</li>
    @endforeach
</ul>