<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <style>
        .cabecera{
            background-color: black;
            color: white;
            text-align: center;
            padding: 2px 0px;
        }
        .contenidoCentral{
            background-color: green;
            margin: 100px 0px;
            text-align: center;
            color: white;
            font-weight: bold;
            padding: 2px 0px;
        }
        .footer{
            background-color: chocolate;
            text-align: center;
            color: white;
            font-weight: bold;
            padding: 2px 0px;
        }
    </style>
</head>
<body>
   <!-- Creando la estructura de las páginas (Plantilla) --> 

    <section class="cabecera">

        @yield("cabecera")  <!-- Sección 1 -->

    </section>
        
    <section class="contenidoCentral">

        @yield("contenidoCentral")  <!-- Sección 2 -->

    </section>

    <section class="footer">

        @yield("footer")    <!-- Sección 3 -->
        <p>Derechos Reservador <i>joseantoniovalen1@gmail.com</i></p>

    </section>
</body>
</html>