<?php
$conn = mysqli_connect("localhost", "root", "", "library");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

if (isset($_POST['add'])) {
$book_id = $_POST['book_id'];

$book_title = $_POST['book_title'];
$book_author = $_POST['book_author'];
$book_edition = $_POST['book_edition'];
$book_publisher = $_POST['book_publisher'];

$sql = "INSERT INTO books (book_id, book_title, book_author, book_edition,
book_publisher) VALUES ('$book_id', '$book_title', '$book_author',
'$book_edition', '$book_publisher')";

if (mysqli_query($conn, $sql)) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if (isset($_POST['search'])) {
$book_author = $_POST['author'];
echo "Author: " . $book_author . '<br>';
$sql = "SELECT * FROM books WHERE book_author='$book_author'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
while ($row = mysqli_fetch_assoc($res)) {
echo $row["book_id"] . '<br>';
echo $row["book_title"] . '<br>';
echo $row["book_author"] . '<br>';
echo $row["book_edition"] . '<br>';

echo $row["book_publisher"] . '<br>';
}
} else {
echo "No results found";
}
}

?>


