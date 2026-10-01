<?php
include 'config.php';

$result = $conn->query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibraryMT Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>LibraryMT Dashboard</h1>

<a href="index.html" class="button">Home</a>
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

<?php while ($row = $result->fetch_assoc()) { ?>

<tr>

    <td><?= $row['id']; ?></td>

    <td><?= htmlspecialchars($row['title']); ?></td>

    <td><?= htmlspecialchars($row['author']); ?></td>

    <td><?= htmlspecialchars($row['category']); ?></td>

    <td><?= htmlspecialchars($row['isbn']); ?></td>

    <td><?= $row['quantity']; ?></td>

    <td><?= htmlspecialchars($row['status']); ?></td>

    <td>

        <a href="edit.php?id=<?= $row['id']; ?>">
            Edit
        </a>

        |

        <a href="delete.php?id=<?= $row['id']; ?>"
           onclick="return confirm('Are you sure you want to delete this book?')">
            Delete
        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>
</html>
