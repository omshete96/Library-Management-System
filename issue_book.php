<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
</head>
<body>
    <h2>Issue a Book</h2>
    <form action="issue_book_backend.php" method="POST">
        <label>Book ID:</label><input type="text" name="book_id" required><br>
        <label>Student ID:</label><input type="text" name="student_id" required><br>
        <button type="submit">Issue Book</button>
    </form>
</body>
</html>
