<?php
session_start();
?><!DOCTYPE html>
<html>
  
  <head>
        <?php include "templates/header.php"; ?>
  <h2>Add Drink</h2>
  <form action="insert_drink.php" method="post" id="drink_insert">
    <fieldset>
      <div>
        <label for="NAME">Name:</label>
        <input type="text" id="NAME" name="NAME" size="35" maxlength="35" required></p>
      </div>

      <div>
        <label for="DESC">Description:</label>
        <textarea id="DESC" name="DESC" form="drink_insert" rows="5" cols="50" maxlength="150">
        </textarea>
      </div>

      <div>
        <label for="Price">Price:</label>
        <input type="number" id="Price" name="Price" size="4" min=" 0.00" max="99.99" step=".10" required></p>
      </div>
  
    <input type="submit" value="Add Drink to Menu" />
    </fieldset>

  </form>
  <?php include "templates/footer.php"; ?>