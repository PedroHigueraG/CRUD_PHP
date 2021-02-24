<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = '$id'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
        }
    }

    if(isset($_POST['update_task'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task SET title = '$title', description = '$description' WHERE id = '$id'";
        $result = mysqli_query($conn,$query);

        // Si esta bien guarda en sesion
        $_SESSION['message'] = 'Task updated succesfully';
        
        header("Location: ../../index.php");
    }
?>

<?php include("../includes/header.php"); ?>

<?php include("../includes/view_edit.php"); ?>

<?php include("../includes/footer.php"); ?>