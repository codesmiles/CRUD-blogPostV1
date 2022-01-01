<!DOCTYPE html>
<?php
include 'logic.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>create blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h3 class="my-5 text-center text-uppercase">Write your blog post</h3>
        <form method="POST">
            <input type="text" name="title"  placeholder="Blog Title" class="form-control bg-dark text-white py-3">
            <textarea name="content"  class="form-control bg-dark text-white my-3"></textarea>
            <input type="submit" name="add_post" value="Add Post" class="btn btn-dark">
        </form>
    </div>

    <script src="" async defer>
 
    </script>
</body>

</html>