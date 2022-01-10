<?php
session_start();
?><!DOCTYPE html>
<html>

<head>

  <?php include "templates/header.php"; ?>
  
  <h2>Add Pizza</h2>
  <form action="insert_pizza.php" method="post" id="pizza_insert">
    <fieldset>
      <div>
        <label for="NAME">Name:</label>
          <input type="text" id="NAME" name="NAME" size="35" maxlength="35" required></p>
      </div>
      
      <div>
        <label for="DESC">Description:</label>
        <textarea id="DESC" name="DESC" form="pizza_insert" rows="5" cols="50" maxlength="150"></textarea></p>
      </div>

      <div>
        <label for="Price">Price:</label>
        <input type="number" id="Price" name="Price" size="4" min="0.00" max="99.99" step=".10" required></p>
      </div>
  
    <input type="submit" value="Add Pizza to Menu" />
    </fieldset>

  </form>
  <?php include "templates/footer.php"; ?>