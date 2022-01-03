<!DOCTYPE html>
<?php
include 'logic.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">



        <div class="col-md-12 pt-5 text-center ">

            <?php if (isset($_REQUEST['info'])) { ?>

                <?php if ($_REQUEST['info'] == 'added') { ?>
                    <div class="alert alert-success" role="alert">
                        Post has been added successfully
                    </div>
                <?php } ?>
            <?php } ?>

            <a href="create.php" class="btn btn-outline-dark p-2">Create a new post</a>
        </div>

        <?php foreach ($query as $q) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-4 d-flex justfy-content-center ">
                        <div class="card text-white bg-dark mt-5 text-center">
                            <div class="card-body" style="width:18rem;">
                                <h5 class="card-title"><?php echo $q["title"]; ?></h5>
                                <p class="card-text"><?php echo $q["content"]; ?></p>
                                <a href="view.php ? info = <?php echo $q["id"]; ?>" class="btn btn-light">read more <span class="text-danger">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="" async defer></script>
</body>

</html>