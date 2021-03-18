<!DOCTYPE html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "php-d13";
    
    try{
    
    $conn = new PDO("mysql:host=$servername;dbname=$db",$username,$password)
    $conn->setAattribute(PDO::ERRMODE_EXCEPTION);
        
    }cath(PDOException $e){
        echo "conection failed".$e->getMessage();
    }

?>

<html lang="es">
    <head>
    <meta charset=="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE-edge">
        <meta mame="viewport" content="width-device-wid-initial-scale=1.0">
              <title> PHP INtro</title>
    </head>
<body>
    <h1>Into PHP</h1>
    
        <form action= "store.php" method="POST">
        <label for="tarea">Nombre de Tarea</label><hr>
            <input type="text" name="tarea">
            <br>
        <label for="descripcion">Descripcion</label><hr>
        <textarea name="descripcion"cols="30" rows="3"></textarea>
            <br>
        <label for="prioridad">Prioridad</label><br>
        <select name="prioridad">
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
            
        </select>
             <br>
            
        <input type="checkbox" name="urgente" value="1">
        <label for="urgente">Urgente</label>
            <br>
        <input type="radio" name="tipo" value="escuela">
        <label for="urgente">Escuela</label>
        
        <input type="radio" name="tipo" value="trabajo">
        <label for="urgente">Trabajo</label>
            <br>
        <input type="submit" value="Enviar">
            
            <hr>
            <?php

                $sql = "SELECT * FROM";
                $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            echo "<table border='1'>";
            echo
            
            ?>
        </form>
            
            
</body>
</html>