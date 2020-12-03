<?php
    $id_producto = $_GET['id_producto'];
    $precio = $_GET['precio'];
    $cantidad = $_GET['cantidad'];
    $fecha=  date("j, n, Y");   
    date_default_timezone_set('America/Mexico_City');
    $hora=date("g:i "); 
    $total=$precio*$cantidad;   
    $existencia =$_GET['existencia'];
    $existencia=$existencia-$cantidad;


    $db = new SQLite3('../../tienda.db');
    //$PKTICKET  = $db->query ("SELECT ID_PRODUCTO FROM PRODUCTO WHERE ID_PRODUCTO = (SELECT MAX(ID_PRODUCTO) FROM PRODUCTO) WHERE ESTADO_COMPRA='P');");


    $db->exec("INSERT INTO TBLTICKET (FECHA, HORA_VENTA, CANTIDAD_PRODUCTO, KPRODUCTO, TOTAL_PRODUCTO, ESTADO_COMPRA)
    VALUES (  '$fecha','$hora',    '$cantidad',  '$id_producto', '$total','P');");
    $db->exec("UPDATE PRODUCTO SET EXISTENCIA= '$existencia' where ID_PRODUCTO='$id_producto';");
   
   header("Location: ../listarventa.php");

 
?>