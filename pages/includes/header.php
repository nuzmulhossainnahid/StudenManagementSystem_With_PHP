<?php  session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/all.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>
<?php  if(isset($_SESSION['id'])) { ?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">NAHID</a>
        <ul class="navbar-nav ml-auto">

            <?php if($_SESSION['user_type'] == 1) {?>
            <li><a href="home.php" class="nav-link">Add Student</a></li>
            <li><a href="action.php?status=manage" class="nav-link">Manage Student</a></li>
            <?php } else { ?>

                <li><a href="" class="nav-link">Add Subject</a></li>
                <li><a href="" class="nav-link">My Profile</a></li>

            <?php } ?>

            <li><a href="action.php?status=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>

<?php } ?>