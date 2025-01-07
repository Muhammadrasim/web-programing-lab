<!DOCTYPE html>
<html lang="en">
<head>

<title>Library Management</title>
<style>
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
background-color: #f8f9fa;
}
.container {
width: 50%;
margin: 50px auto;
padding: 20px;
background: #fff;
border: 1px solid #ddd;

border-radius: 5px;
}
h1, h2 {
text-align: center;
}
form {
margin-bottom: 20px;
}
label {
display: block;
margin-bottom: 5px;
font-weight: bold;
}
input[type="text"], input[type="number"], input[type="submit"] {
width: 100%;
padding: 10px;
margin: 10px 0;
border: 1px solid #ccc;
border-radius: 3px;
}
input[type="submit"] {
background-color: #007bff;
color: #fff;
cursor: pointer;
}
input[type="submit"]:hover {

background-color: #0056b3;
}
</style>
</head>
<body>
<div class="container">
<h1>Add Books</h1>
<form action="book.php" method="post">
<label for="book_id">Book ID:</label>
<input type="number" id="book_id" name="book_id" >
<br><br>

<label for="book_title">Book Title:</label>
<input type="text" id="book_title" name="book_title" >
<br><br>

<label for="book_author">Book Author:</label>
<input type="text" id="book_author" name="book_author" >
<br><br>

<label for="book_edition">Book Edition:</label>
<input type="text" id="book_edition" name="book_edition" >
<br><br>

<label for="book_publisher">Book Publisher:</label>
<input type="text" id="book_publisher" name="book_publisher" >

<br><br>

<input type="submit" name="add" value="Add">
</form>

<h2>Search Book by Author</h2>
<form action="book.php" method="post">
<label for="author">Author Name:</label>
<input type="text" id="author" name="author" >
<br><br>
<input type="submit" name="search" value="Search">
</form>
</div>
</body>
</html>

