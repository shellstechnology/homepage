<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleAlmacenes.css">
    <title>Document</title>
</head>
@include('header')
<body>
    <div class="principalDiv">

        <div class="barraDeNavegacion">

            <div class="item"><a style="text-decoration: none; color: black;" href=" /choferes">Volver</a></div>

        </div>
        <div class="container">
            <div class="cuerpo">
                <div id="contenedorTabla">
                    <table>
                        <thead>
                            <th>Nombre Paquete</th>
                            <th>Direccion</th>
                            <th>Receptor</th>
                            <th>Entregado</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>10kg de arroz</th>
                                <th>1023 Perez</th>
                                <th>Juancho Panza</th>
                                <th><input type="checkbox" name="entregado" id="entregado"></th>
                            </tr>
                            <tr>
                                <th>10kg de granos de café</th>
                                <th>1023 Perez</th>
                                <th>Juancho Panza</th>
                                <th><input type="checkbox" name="entregado" id="entregado"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
@include('footer')
</html>
