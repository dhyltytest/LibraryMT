<?php

include 'config.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM books WHERE id=$id");

$row = $result->fetch_assoc();

?>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id']; ?>">

Title
<input type="text" name="title" value="<?= $row['title']; ?>">

Author
<input type="text" name="author" value="<?= $row['author']; ?>">

Quantity
<input type="number" name="quantity" value="<?= $row['quantity']; ?>">

Status

<select name="status">

<option <?= $row['status']=="Available"?"selected":"" ?>>Available</option>

<option <?= $row['status']=="Borrowed"?"selected":"" ?>>Borrowed</option>

</select>

<br><br>

<input type="submit" value="Update">

</form>
