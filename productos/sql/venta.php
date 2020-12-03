<?php
    $db = new SQLite3("../tienda.db");  
    $table = "
        <table class='table table-dark'>
            <thead>
            <tr>
                <th>ID</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>CANTIDAD</th>
                <th>PRODUCTO</th>
                <th>TOTAL</th>
                <th>BORRAR</th>
            </tr>
            </thead>
            ";

    print($table);
$resultado = $db->query("SELECT PKTICKET, FECHA, HORA_VENTA, CANTIDAD_PRODUCTO, PRODUCTO, TOTAL_PRODUCTO, ESTADO_COMPRA, t2.ID_PRODUCTO FROM TBLTICKET as t1 inner join PRODUCTO as t2 on t2.ID_PRODUCTO=t1.KPRODUCTO WHERE ESTADO_COMPRA='P';");
    while ($row = $resultado->fetchArray()) {
        $id_VENTA = $row['PKTICKET'];
        $FECHA=$row['FECHA'];
        $HORA=$row['HORA_VENTA'];
        $CANTIDAD = $row['CANTIDAD_PRODUCTO'];       
        $PRODUCTO = $row['PRODUCTO'];
        $PRECIO = $row['TOTAL_PRODUCTO'];
        $id_PRODUCTO= $row['ID_PRODUCTO'];
        
        $table = "
            <tr>
                <td>$id_VENTA</td>
                <td>$FECHA</td>
                <td>$HORA</td>
                <td>$CANTIDAD</td>
                <td>$PRODUCTO</td>
                <td>$PRECIO</td>
                <td><a href='delete.php?id_producto=$id_PRODUCTO'>BORRAR</a></td>
                
            </tr>
        ";

        print($table);

    }
?>