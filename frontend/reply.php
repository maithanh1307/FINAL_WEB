<?php
// Connect to MySQL
$connection = mysqli_connect("localhost", "root", "", "finalweb");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parentId = $_POST['parentId'];
    $author = $_POST['author'];
    $comments = $_POST['comments'];
    
    // Insert comment or reply into database
    $query = "INSERT INTO comment (parentId, author, comments) VALUES ('$parentId', '$author', '$comments')";
    mysqli_query($connection, $query);
    
    // Redirect back to the page with comments
    header("Location: benthanh_blog.php");
    exit();
}

// Close connection
mysqli_close($connection);
?>