<?php
    date_default_timezone_set('America/Lima');
    $importe = $_POST['importe'];
    $hijos = $_POST['hijos'];
    $sueldo_basico = 600;

    $comision = $importe * 0.075;
    $bonificacion = $hijos * 50;
    $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
    $descuento = $sueldo_bruto * 0.11;
    $sueldo_neto = $sueldo_bruto - $descuento;

    echo "<br> Sueldo basico : S/. ".round($sueldo_basico, 2);
    echo "<br> Comision: S/. ".round($comision, 2);
    echo "<br> Bonificacion : S/. ".round($bonificacion, 2);
    echo "<br> Sueldo bruto: S/. ".round($sueldo_bruto, 2);
    echo "<br> Descuento : S/. ".round($descuento, 2);
    echo "<br> Sueldo neto : S/. ".round($sueldo_neto, 2);
?>