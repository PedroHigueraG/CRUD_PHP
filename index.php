<?php include("./assets/php/db.php"); ?>
<?php include("./assets/includes/header.php"); ?>

<main class="container">

    <!-- PHP para que guarde en sesion si se añadió una tarea correcta -->
    <?php 
        if(isset($_SESSION['message'])){
            ?> <script> alert("Task saved succesfully");</script> <?php
            session_unset();
        }
    ?>

    <!-- Division donde va el formulario -->
    <div class="div-form">
        <form action="./assets/php/save_task.php" method="POST">
            <input type="text" name="title" class="input-title" placeholder="Task title">
            <textarea name="description" rows="3" class="input-description" placeholder="Task description"></textarea>
            <input type="submit" value="Add task" name="save_task" class="input-button">
        </form>
    </div>

    <!-- Division donde va la tabla -->
    <div class="div-table">
        
    </div>
</main>

<?php include("./assets/includes/footer.php"); ?>