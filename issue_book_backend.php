<?php
$conn = new mysqli('localhost', 'root', '!@#@#%#$#$#$#', 'library_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book_id = $_POST['book_id'];
$student_id = $_POST['student_id'];
$issue_date = date('Y-m-d');
$return_date = date('Y-m-d', strtotime('+7 days'));

$sql = "INSERT INTO issued_books (book_id, student_id, issue_date, return_date) VALUES ('$book_id', '$student_id', '$issue_date', '$return_date')";
$update_book = "UPDATE books SET available = 0 WHERE book_id = '$book_id'";

if ($conn->query($sql) === TRUE && $conn->query($update_book) === TRUE) {
    echo "Book issued successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
