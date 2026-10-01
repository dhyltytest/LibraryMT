<?php

include 'config.php';

if (!isset($_GET['id'])) {
    die("Book ID is missing.");
}

$id = intval($_GET['id']);

$result = $conn->query("SELECT * FROM books WHERE id = $id");

if ($result->num_rows == 0) {
    die("Book not found.");
}

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Book - LibraryMT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Edit Book</h2>

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <label>Title</label>
    <input type="text"
           name="title"
           value="<?= htmlspecialchars($row['title']); ?>"
           required>

    <label>Author</label>
    <input type="text"
           name="author"
           value="<?= htmlspecialchars($row['author']); ?>"
           required>

    <label>Quantity</label>
    <input type="number"
           name="quantity"
           value="<?= $row['quantity']; ?>"
           required>

    <label>Status</label>

    <select name="status">

        <option value="Available"
            <?= $row['status'] == 'Available' ? 'selected' : ''; ?>>
            Available
        </option>

        <option value="Borrowed"
            <?= $row['status'] == 'Borrowed' ? 'selected' : ''; ?>>
            Borrowed
        </option>

    </select>

    <br><br>

    <input type="submit" value="Update Book">

</form>

<br>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>
