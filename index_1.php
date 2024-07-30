<?php
include('conexion.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <br>
    <br>
    <div class="form">
    <br>
    <br>
    <h2>Reserva</h2>
    <br>
    <br>
    <form action="index_1.php" name="reserva" method="post">
        <input type="number" name="id_cliente" placeholder="id_cliente">
        <input type="submit" name="registro_reserva">

    </form>
    </div>

   
<?php

    if(isset($_POST ['registro_reserva'])){
        $id_cliente= $_POST['id_cliente'];
        
        $consulta = $enlace -> query("SELECT * FROM reserva.reserva");

        while ($fila = $consulta -> fetch_array()){
            echo 'ID: '.$fila['ID'].'<br>';
            echo 'Origen: '.$fila['Origen'].' ';
            echo 'Destino: '.$fila['Destino'].'<br>';
            echo 'Fecha: '.$fila['Fecha'].' ';
            echo 'Plaza: '.$fila['Plaza'].'<br>';
            echo 'Precio: '.$fila['Precio'].'<br>';

        }
}
    
?>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>