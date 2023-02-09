<?php
$persona=$_POST['txtPersona'];
$banco=$_POST['txtBanco'];
$cantidad=$_POST['txtCantidad'];
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Jockey+One&display=swap" rel="stylesheet">

    </head>
    <body>
        <header></header>
        <div class="div1">
            <h3 class="t1">¡Listo! Ya hiciste tu <br>transferencia</h3>
            <h4 class="t2"><?php echo($persona) ?></h4>
            <h4 class="t3"><?php echo($banco) ?></h4>
        </div>
        <div class="div2">
            <h2 class="t4">$<?php echo($cantidad) ?></h2>
            <h4 class="t5">Motivo: Varios</h4>
        </div>
        
        <div class="div3">
            <span class="logo"></span>
            <h4 class="t6">Con dinero en cuenta de Mercado <br> Pago</h4>
        </div>
        <button class="boton1" style="color: #E7E7E7;font-size: 28px; line-height: 34px;">Compartir comprobante</button>
        <form action="index.html">
            <button class="boton2" class="boton2" type="submit">Ir al inicio</button>
        </form>
    </body>
</html>