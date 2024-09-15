<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h2>Add a New Book</h2>
    <form action="add_book_backend.php" method="POST">
        <label>Title:</label><input type="text" name="title" required><br>
        <label>Author:</label><input type="text" name="author" required><br>
        <label>Genre:</label><input type="text" name="genre" required><br>
        <button type="submit">Add Book</button>
    </form>
</body>
</html>
