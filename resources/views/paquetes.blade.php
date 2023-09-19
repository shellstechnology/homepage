<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylePaquetes.css">
    <title>Document</title>
</head>
<body>
    @include('header')
    <div class="divPrincipalBody">
        <div class="formulario">
            <form action="#" method="post">
                @csrf
                <input class="campoTexto" type="number" name="paquete" id="paquete" placeholder="Ingrese el id del paquete:"><br>
                <input class="botonSubmit" type="submit" value="Buscar Paquete">
            </form>
        </div>

        <div class="container">

            <div class="step completed">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    El paquete ha llegado a su destino.
                </div>
            </div>

            <div class="step active">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    El paquete ha salido del almacen y se encuentra en camino.
                </div>
            </div>

            <div class="step">
                <div class="v-stepper">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    El paquete no ha salido del almacén.
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer')
</html>
