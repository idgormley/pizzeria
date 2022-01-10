<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<br>
<br>
    <?php include "templates/header.php"; ?>
    <fieldset>
        <legend>Add to Menu</legend>
        <p><a href="add_pizza.php"><button class="" type="submit"> Add Pizza</button></a>
        <p><a href="add_side.php"><button class="" type="submit">Add Side</button></a>
        </p><a href="add_drink.php"><button class="" type="submit">Add Drink</button></a>
    </fieldset>
    <fieldset>
        <legend>Remove from Menu</legend>
        </p><a href="remove_pizza.php"><button class="" type="submit">Remove Pizza</button></a>
        </p><a href="remove_side.php"><button class="" type="submit">Remove Side</button></a>
        </p><a href="remove_drink.php"><button class="" type="submit">Remove Drink</button></a>
</main>
        <?php include "templates/footer.php"; ?>