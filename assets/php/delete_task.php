<?php

    // Incluye ese archivo
    include("db.php");

    // Confirma que si existe ese ID y hace la consulta
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }

    // Si esta bien guarda en sesion
    $_SESSION['message'] = 'Task removed succesfully';

    //Redireccion a index
    header("Location: ../../index.php");
    }