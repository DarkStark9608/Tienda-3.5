  
<?php
    $id_PRODUCTO = $_GET["id_producto"];
print($id_PRODUCTO);
    $db = new SQLite3("../../tienda.db");

    $db->exec("DELETE FROM PRODUCTO where ID_PRODUCTO='$id_PRODUCTO';");
    header("Location: ../index.php");
?>