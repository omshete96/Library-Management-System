<?php
$conn = new mysqli('localhost', 'root', 'Microsoft9798', 'library_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM books WHERE available = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Available Books</h2>";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row['book_id'] . " - Title: " . $row['title'] . " - Author: " . $row['author'] . "<br>";
    }
} else {
    echo "No available books!";
}

$conn->close();
?>
