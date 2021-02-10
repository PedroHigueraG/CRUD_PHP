<?php

include("db.php"); // Trae las variables de ese archivo

// Si se llama al boton guarda las variables
if(isset($_POST['save_task'])){

    $title = $_POST['title'];
    $desc = $_POST['description'];

    //Hace la consulta para insertar datos
    $query = "INSERT INTO task(title,description) VALUES ('$title','$desc')";
    $result = mysqli_query($conn,$query);
    
    if(!$result){
        die("Query failed"); // Si falla
    }

    // Si esta bien guarda en sesion
    $_SESSION['message'] = 'Task saved succesfully';

    //Redireccion a index
    header("Location: ../../index.php");
}