<!DOCTYPE html>

<html>

<head>

<title>Add Book</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>Add New Book</h2>

<form action="save.php" method="POST">

<label>Title</label>
<input type="text" name="title" required>

<label>Author</label>
<input type="text" name="author" required>

<label>Category</label>
<input type="text" name="category" required>

<label>ISBN</label>
<input type="text" name="isbn" required>

<label>Publisher</label>
<input type="text" name="publisher">

<label>Publication Year</label>
<input type="number" name="publication_year">

<label>Quantity</label>
<input type="number" name="quantity" required>

<label>Status</label>

<select name="status">

<option>Available</option>
<option>Borrowed</option>

</select>

<input type="submit" value="Save Book">

</form>

</body>

</html>
