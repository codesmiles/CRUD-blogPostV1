<?php

$conn = mysqli_connect('localhost', 'root', '', 'blogpost');

if(!$conn){
  // to show error  die("Connection failed: " . mysqli_connect_error());
    echo "<h3 class='container bg-danger text-center p-3 text-warning rounded-lg mt-5'>Not able to establish database connection</h3>";
}

$sql = "SELECT * FROM blog";
$query = mysqli_query($conn, $sql);

 if(isset($_REQUEST['add_post'])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    
    $sql = "INSERT INTO blog(title, content) VALUES ('$title', '$content')";
    $result = mysqli_query($conn, $sql);
   
    //```````````````Optional
    if($result){
        echo "<h3 class='container bg-success text-center p-3 text-warning rounded-lg mt-5'>Post added successfully</h3>";
    }
    else{
        // echo "<h3 class='container bg-danger text-center p-3 text-warning rounded-lg mt-5'>Post not added</h3>";
        echo mysqli_error($conn); //to see the error
    }
// ``````````````````````
  
header("location: index.php?info=added");
  exit;
 };


 if(isset($_REQUEST['id'])){
   $id = $_REQUEST['id'];

   $sql = "SELECT * FROM blog where id = $id";
   $query = mysqli_query($conn, $sql);
 
 
  };

  if(isset($_REQUEST['update_post'])){
  $id = $_REQUEST['id'];
  $title = $_REQUEST['title'];
  $content = $_REQUEST['content'];

  $sql = "UPDATE blog SET title = '$title', content = '$content' WHERE id = $id";
  mysqli_query($conn, $sql);

  header("location: index.php?info=updated");
  exit;
}

if (isset($_REQUEST['delete'])) {
  $id = $_REQUEST['id'];

  $sql = "DELETE FROM blog where id = $id";
  $query = mysqli_query($conn, $sql);
  
  header("location: index.php?info=deleted");
  exit;
};

?>