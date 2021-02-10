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

<main class="container">
<!-- Division donde va el formulario -->
<div class="div-form">
        <form action="edit.php?id=<?php echo  $_GET['id']; ?>" method="POST">
            <input type="text" name="title" class="input-title" placeholder="Task title" value="<?php echo $title ?>">
            <textarea name="description" rows="10" class="input-description" placeholder="Task description"><?php echo $description ?></textarea>
            <input type="submit" value="Update" name="update_task" class="input-button">
        </form>
    </div>
</main>

<?php include("../includes/footer.php"); ?>