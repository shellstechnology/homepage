<div class="container">

    @php
    $datos=Session('estadoPaquete',[]);
    @endphp
    <div class="step completed">
        <div class="v-stepper" id="completed">
            <div class="circle" id="completed-circle"></div>
            <div class="line" id="completed-line"></div>
        </div>

        <div class="content">
            El paquete ha llegado a su destino.
        </div>
    </div>

    <div class="step active">
        <div class="v-stepper" id="active">
            <div class="circle" id="active-circle"></div>
            <div class="line" id="active-line"></div>
        </div>

        <div class="content">
            El paquete ha salido del almacen y se encuentra en camino.
        </div>
    </div>

    <div class="step">
        <div class="v-stepper" id="step">
            <div class="circle" id="step-circle"></div>
            <div class="line" id="step-line"></div>
        </div>

        <div class="content">
            El paquete no ha salido del almacén.
        </div>
    </div>
    <script>
        var datos = <?php echo json_encode($datos); ?>;
        console.log(datos);
        var estado = datos['id_estado_p']
        console.log(estado);
        var stepCircle = document.getElementById("step-circle");
        var stepLine = document.getElementById("step-line");
        var activeCircle = document.getElementById("active-circle");
        var activeLine = document.getElementById("active-line");
        var completedCircle = document.getElementById("completed-circle");
        var completedLine = document.getElementById("completed-line");
        if (estado == 1) {
            stepCircle.style.backgroundColor = "rgb(6, 150, 215)"
            stepCircle.style.borderColor = "rgb(6, 150, 215)";
            stepLine.style.borderColor = "rgb(6, 150, 215)";
        
            activeCircle.style.backgroundColor = "white";
            activeCircle.style.borderColor = "gray";
            activeLine.style.borderColor = "gray";
            
            completedCircle.style.backgroundColor = "white";
            completedCircle.style.borderColor = "gray";
            completedLine.style.borderColor = "gray";
        }

        if(estado==2){
            stepCircle.style.backgroundColor = "white";
            stepCircle.style.borderColor = "rgb(6, 150, 215)";
            stepLine.style.borderColor = "rgb(6, 150, 215)";
        
            activeCircle.style.backgroundColor = "rgb(6, 150, 215)";
            activeCircle.style.borderColor = "rgb(6, 150, 215)";
            activeLine.style.borderColor = "rgb(6, 150, 215)";
            
            completedCircle.style.backgroundColor = "white";
            completedCircle.style.borderColor = "gray";
            completedLine.style.borderColor = "gray";
        }

        if(estado==3){
            stepCircle.style.backgroundColor = "white";
            stepCircle.style.borderColor = "rgb(6, 150, 215)";
            stepLine.style.borderColor = "rgb(6, 150, 215)";
        
            activeCircle.style.backgroundColor = "white";
            activeCircle.style.borderColor = "rgb(6, 150, 215)";
            activeLine.style.borderColor = "rgb(6, 150, 215)";
            
            completedCircle.style.backgroundColor = "rgb(6, 150, 215)";
            completedCircle.style.borderColor = "rgb(6, 150, 215)";
            completedLine.style.borderColor = "rgb(6, 150, 215)";
        }

        if(!estado){
            stepCircle.style.backgroundColor = "white";
            stepCircle.style.borderColor = "gray";
            stepLine.style.borderColor = "gray";
        
            activeCircle.style.backgroundColor = "white";
            activeCircle.style.borderColor = "gray";
            activeLine.style.borderColor = "gray";
            
            completedCircle.style.backgroundColor = "white";
            completedCircle.style.borderColor = "gray";
            completedLine.style.borderColor = "gray";
        }
    </script>
</div>