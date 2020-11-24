@extends("layouts.plantilla");

<!-- // -->
@section("cabecera")
    <h1>Página de galería</h1>
@endsection

<!-- // Sintaxis php-blade -->
@section("contenidoCentral")
    @if(count($paises))
    <ul>
        @foreach($paises as $pais)
            <li>
                {{$pais}}  <!-- (echo "$pais")  -->
            </li>
        @endforeach
    </ul>
    @endif
@endsection

<!-- // -->
@section("footer")

@endsection