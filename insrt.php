<?php
require_once('PhpConnect.php');

if (
    !empty($_POST['isbn']) &&
    !empty($_POST['title']) &&
    !empty($_POST['author']) &&
    !empty($_POST['edition']) &&
    !empty($_POST['genre']) &&
    !empty($_POST['price']) &&
    !empty($_POST['vcode']) &&
    !empty($_POST['publisher_id']) &&
    !empty($_POST['admin_username']) &&
	!empty($_POST['desc'])
	
) {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $vendor_code = $_POST['vcode'];
    $publisher_id = $_POST['publisher_id'];
    $admin_username = $_POST['admin_username'];
	$des=$_POST['desc'];
	$date=date("Y-m-d");

	function generateRandomCode() {
    $prefix = 'B';
    $uniqid = uniqid($prefix, true); // Generate a unique ID
    
    // Remove the prefix and any special characters from the unique ID
    $code = preg_replace("/[^A-Za-z0-9]/", '', $uniqid);
    
    return $code;
}
        $book_id = generateRandomCode();


    $sql = "SELECT * FROM Book WHERE Book_ID = '$book_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        // The Book_ID is unique, proceed with insertion
        $sql2 = "INSERT INTO book (book_id, isbn, title, author, edition, genre, description, publisher_id, admin_username, Entry_date)
                 VALUES ('$book_id', '$isbn', '$title', '$author', '$edition', '$genre', '$des', '$publisher_id', '$admin_username','$date')";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
            // Insert into Sales table
            $sql4 = "INSERT INTO Sales VALUES ('$book_id','$isbn','$vendor_code','$price')";
            $insrt = mysqli_query($conn, $sql4);

            // Update book_copy table
            $sql5 = "SELECT MAX(Copy_No) AS max_copy FROM book_copy WHERE ISBN = '$isbn'";
            $result5 = mysqli_query($conn, $sql5);

            if (mysqli_num_rows($result5) != 0) {
                $copy_data = mysqli_fetch_array($result5);
                $total = $copy_data['max_copy'];
                $next_copy_no = $total + 1;
            } else {
                $next_copy_no = 1;
            }

            $sql6 = "INSERT INTO book_copy (Book_ID, ISBN, Status, Copy_No, Location) 
                     VALUES ('$book_id', '$isbn', 1, '$next_copy_no', '$genre')";
            $insrt2 = mysqli_query($conn, $sql6);

            echo "Success!";
        } else {
            echo "Error adding book: " . mysqli_error($conn);
        }
    } else {
        echo "Book ID '$book_id' already exists. Please provide a unique Book ID.";
    }
} else {
    echo "Please fill out all required fields.";
}
?>
