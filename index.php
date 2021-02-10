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
            <textarea name="description" rows="6" class="input-description" placeholder="Task description"></textarea>
            <input type="submit" value="Add task" name="save_task" class="input-button">
        </form>
    </div>

    <!-- Division donde va la tabla -->
    <div class="div-table">
        <table class="table-task">
            <thead class="head-table">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="body-table">
                <?php // Mostrar la tabla
                    $query = "SELECT * FROM task"; //Selecciona todo de la tabla
                    $result_task = mysqli_query($conn,$query);
                    
                    //Imprimir filas
                    while($row = mysqli_fetch_array($result_task)){
                        ?>
                            <tr>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td>
                                    <a href="./assets/php/edit.php?id=<?php echo $row['id']?>">Edit</a>
                                    <a href="./assets/php/delete_task.php?id=<?php echo $row['id']?>">Delete</a>
                                </td>
                                
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php include("./assets/includes/footer.php"); ?>