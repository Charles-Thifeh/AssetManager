<?php
require 'connect_inc.php';
require 'core.inc.php';
if (isset($_POST['userID']) && isset($_POST['pass']) && isset($_POST['submit'])) {
    $ID_Input = $_POST['userID'];
    $pass_Input = $_POST['pass'];

    $query1 = "SELECT id FROM admin  WHERE  admin_id= '$ID_Input' AND admin_pass = '$pass_Input' ";
    if ($query_run1 = mysqli_query($conn, $query1)) {
        $query_row = mysqli_num_rows($query_run1);

        if ($query_row == 0){
            echo "<script>alert ('Wrong Username and password combination!')</script>";
        }else {
            $query_row1 = mysqli_fetch_assoc($query_run1);
            $user_id = $query_row1['id'];
            $_SESSION['user_id'] = $user_id;
            header('Location: ' .'homepage.php');
        }
    }

}

?>

<html lang = "en">
<head>
    <title>Asset Manager</title>
    <!--- Required meta tags --->
    <meta charset = "utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale = 1,  shrink-to-fit = no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
</head>
<body style="background-color: whitesmoke">
<nav class="navbar navbar-dark fixed-top bg-dark" style="color: white">
    <div class = "container-fluid">
        <h4 style="margin-top: 10px">Asset Manager</h4>
        <ul class="nav nav-pills justify-content-end">
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="login.php">Login</a>-->
<!--            </li>-->
            <li class="nav-item">
                <a class="nav-link " href="homepage.php" style="height: 35px; font-size: 13px; color: white">Admin</a>
            </li>
        </ul>
    </div>
</nav>
<br><br><br><br>

<div class="container" style="margin-top: 6%">
    <h4 style="text-align: center">ADMIN LOGIN</h4><br>
    <form role="form" action="<?php echo $current_file; ?>" method="POST">

        <div class="form-inline col-md-12">
            <div class="col-md-4"></div>
            <input type="text" name="userID" class="form-control col-md-4 mr-3" id="user_Id"  placeholder="Admin ID">
        </div>
        <br>
        <div class="form-inline">
            <div class="col-md-4"></div>
            <input type="password"  name="pass" class="form-control col-md-4 mr-3" id="user_Id"  placeholder="Admin Password">
        </div>

        <br>
        <div class="form-inline">
            <div class="col-md-5"></div>
            <input class="btn btn-primary col-md-2" type="submit" value="Login" name="submit">
        </div>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

