<?php
// Connect to MySQL
$connection = mysqli_connect("localhost", "username", "password", "database");

// Fetch comments
$query = "SELECT * FROM comment WHERE parentId IS NULL ORDER BY date DESC";
$result = mysqli_query($connection, $query);

// Display comments
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "<p>{$row['author']} says: {$row['comment']}</p>";
    
    // Display form to reply to comment
    echo "<form method='post' action='reply.php'>";
    echo "<input type='hidden' name='parentId' value='{$row['id']}'>";
    echo "<input type='text' name='author' placeholder='Your Name'>";
    echo "<textarea name='comments' placeholder='Your Reply'></textarea>";
    echo "<button type='submit'>Reply</button>";
    echo "</form>";
    
    // Fetch and display replies
    $query_replies = "SELECT * FROM comment WHERE parent_id = {$row['id']}";
    $result_replies = mysqli_query($connection, $query_replies);
    
    while ($reply = mysqli_fetch_assoc($result_replies)) {
        echo "<div style='margin-left: 20px;'>";
        echo "<p>{$reply['author']} replies: {$reply['comment']}</p>";
        echo "</div>";
    }
    
    echo "</div>";
}

// Close connection
mysqli_close($connection);
?>