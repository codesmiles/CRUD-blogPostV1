<?php

$conn = mysqli_connect('localhost', 'root', '', 'blogpost');

if(!$conn){
    // die("Connection failed: " . mysqli_connect_error());
    echo "<h3 class='container bg-danger text-center p-3 text-warning rounded-lg mt-5'>Not able to establish database connection</h3>";
};

// if(isset($_REQUEST['title']) && isset($_REQUEST['content'])){
//     $title = $_REQUEST['title'];
//     $content = $_REQUEST['content'];
//     $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
//     $result = mysqli_query($conn, $sql);
//     if($result){
//         echo "Post added successfully";
//     }
}
?>