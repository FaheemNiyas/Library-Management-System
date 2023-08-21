<?php


// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$image = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$folder = "book_img/".$image;
    $book = $_POST['bookname'];
    $author = $_POST['author'];
    $description = $_POST['description'];
	$category = $_POST['cat_id'];
		
	$db = mysqli_connect("localhost", "root", "", "library");

		// Get all the submitted data from the form
		$sql ="INSERT INTO `image`(`id`, `image`, `bookname`, `author`, `description`, `cat_id`) VALUES (null,'$image', '$book', '$author', '$description', $category)"; 
        
     

        
		// Execute query
		mysqli_query($db, $sql);
		
		
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}

	header('location: books.php');
}