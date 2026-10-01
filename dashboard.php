<?php
include 'config.php';

$result = $conn->query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html>

<head>

<title>LibraryMT</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h1>LibraryMT</h1>

<a href="add.php" class="button">+ Add Book</a>

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Category</th>
    <th>ISBN</th>
    <th>Quantity</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

<td><?= $row['id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['author']; ?></td>
<td><?= $row['category']; ?></td>
<td><?= $row['isbn']; ?></td>
<td><?= $row['quantity']; ?></td>
<td><?= $row['status']; ?></td>

<td>

<a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |

<a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this book?')">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>
