<?php
$conn = new mysqli('localhost', 'root', '!@#@#%#$#$#$#', 'library_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];

$sql = "INSERT INTO books (title, author, genre) VALUES ('$title', '$author', '$genre')";

if ($conn->query($sql) === TRUE) {
    echo "New book added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
