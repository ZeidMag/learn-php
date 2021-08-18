<?php
include('config/db_connect.php');

if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM pizzas WHERE id=$id_to_delete";
    if(mysqli_query($conn, $sql)){
        // success
        header('Location: index.php');
    } else {
        // failure
        echo 'query error:' . mysqli_error($conn);
    }
} 

// check GET request id param
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM pizzas WHERE id=$id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    // free result from memory
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>





<!DOCTYPE html>
<html>
<?php include('templates/header.php') ?>
<div class="container center">
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza['title']) ?></h4>
        <p>Created by: <?php echo htmlspecialchars($pizza['email']) ?></p>
        <p><?php echo date($pizza['created_at']) ?></p>
        <h5>Ingredients:</h5>
        <ul>
            <?php foreach(explode(',',$pizza['ingredients']) as $ing): ?>
                <li><?php echo htmlspecialchars($ing) ?></li>
            <?php endforeach; ?>
        </ul>
        <!-- DELETE FORM -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="hidden" name="id_to_delete" value="<?php echo htmlspecialchars($pizza['id']) ?>">
            <input type="submit" name="delete" value="delete" class="btn brand z-dept-0">
        </form>

        <?php else: ?>
            <h5>No such pizza exists!</h5>
        <?php endif; ?>
</div>
<?php include('templates/footer.php') ?>

</html>
