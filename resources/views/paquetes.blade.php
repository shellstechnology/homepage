<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Logo Aplicación.png">
    <link rel="stylesheet" href="css/stylePaquetes.css">
    <script src="{{ asset('js/funciones.js') }}"></script>

    <title>Paquetes</title>
</head>
<body>
    @include('header')
    <div class="divPrincipalBody">
        <div>

            <div class="formulario">
                <form action="{{route('estadoPaquete')}}" method="post">
                    @csrf
                    <input class="campoTexto" type="number" name="paquete" id="paquete" placeholder="Ingrese el id del paquete:"><br>
                    <input class="botonSubmit" type="submit" value="Buscar Paquete">
                </form>
            </div>
            <x-estado-paquete-component/>
        </div>
    </div>
</body>
@include('footer')
</html>
