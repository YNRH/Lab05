<?php
    date_default_timezone_set('America/Lima');
    $precio_actual = $_POST['precio_actual'];
    $cantidad = $_POST['cantidad'];

    $precio_nuevo = $precio_actual - $precio_actual * 0.05;
    $importe_compra = $cantidad * $precio_nuevo;
    $descuento = $importe_compra * 0.07;
    
    echo "<br> Nuevo precio : ".round($precio_nuevo, 2);
    echo "<br> Importe de compra : ".round($importe_compra, 2);
    echo "<br> Descuento : ".round($descuento, 2);
    echo "<br> Importe a pagar: ".round(($importe_compra - $descuento), 2);
    echo "<br> Obsequio : ".($cantidad * 2)." caramelos";

?>