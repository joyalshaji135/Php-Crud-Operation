<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>
    <center>
        <h1>Add Books</h1>
        <form action="index.php" method="post">
            <p>
                <label for="book_no">Enter Your Book Id</label>
                <input type="number" name="id" id="">
            </p>
            <p>
                <label for="book_name">Enter Your Book Name</label>
                <input type="text" name="book_name" id="">
            </p>
            <p>
                <label for="author_name">Enter Author Name</label>
                <input type="text" name="author_name" id="">
            </p>
            <p>
                <label for="book_price">Enter Your Book Price</label>
                <input type="number" name="book_price" id="">
            </p>
            <button>Submit</button>
        </form>
    </center>
</body>
</html>

<?php

if ($_POST) {
    
    
}