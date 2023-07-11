<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> 
</head>
<body>
   <!-- Creando la estructura de las páginas (Plantilla) --> 

    @include("layouts.menuNavbar") <!-- Incluimos el Menú -->
    @yield("cabecera")  <!-- Sección 1 -->
        
    <section class="d-flex justify-content-center mt-5">
        @include("layouts.centralCard") <!-- Incluimos el Card -->
        @yield("contenidoCentral")  <!-- Sección 2 -->
    </section>

    <section class="d-flex justify-content-center mt-5 bg-success">
        @yield("footer")    <!-- Sección 3 -->
        <p class="mb-0 py-2 text-white">Derechos Reservador <i>joseantoniovalen1@gmail.com</i></p>
    </section>

</body>
</html>