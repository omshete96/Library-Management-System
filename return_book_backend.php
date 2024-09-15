<?php
$conn = new mysqli('localhost', 'root', '!@#@#%#$#$#$#', 'library_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book_id = $_POST['book_id'];
$student_id = $_POST['student_id'];

$sql = "DELETE FROM issued_books WHERE book_id = '$book_id' AND student_id = '$student_id'";
$update_book = "UPDATE books SET available = 1 WHERE book_id = '$book_id'";

if ($conn->query($sql) === TRUE && $conn->query($update_book) === TRUE) {
    echo "Book returned successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
