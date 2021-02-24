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