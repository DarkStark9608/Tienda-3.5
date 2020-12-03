function cantidadProductos() {
    if (document.getElementById("cantidad").value >= 10 || document.getElementById("cantidad").value <= 0) {
        alert("La cantidad de productos deber ser mayor a 0 y menor a 10");
        document.getElementById("cantidad").value = 0;
        return false;
    } else {
        document.formularioview.submit();
        return true;   
    }  
}