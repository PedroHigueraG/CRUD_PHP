<?php include("./assets/php/db.php"); ?>
<?php include("./assets/includes/header.php"); ?>

<main class="container">
    <div class="div-form">
        <form action="./assets/php/save_task.php" method="POST">
            <input type="text" name="title" class="input-title" placeholder="Task title">
            <textarea name="description" rows="3" class="input-description" placeholder="Task description"></textarea>
            <input type="submit" value="Add task" name="add" class="input-button">
        </form>
    </div>
</main>

<?php include("./assets/includes/footer.php"); ?>