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

            if(!empty($_POST['tarea'])){
                //recibir datos
                $tarea = $_POST['tarea'];
                $descripcion = $_POST['descripcion'];
                $urgente = $_POST['urgente'];
                $tipo = $_POST['tipo'];
                $prioridad = $_POST['prioridad'];
                
                //Validar datos
                
                
                //guardar a bd
                $sql = "INSERT INTO tarea(tareae,descripccion,urgente,tipo,prioridad) VALUES ('$tarea','$descripcion','$urgente','$tipo','$prioridad')";
                $conn->exec($sql);
                
                //redireccionamiento
                header('location: index.php');
                
            }else{
                echo"No hay datos";
            }


?>