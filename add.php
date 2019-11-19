<?php
require 'connect_inc.php';
require 'core.inc.php';
$table = strtolower($organization);
if (isset($_POST['asset_id'])&&isset($_POST['name'])&&isset($_POST['date_of_purchase'])&&isset($_POST['type'])&&isset($_POST['initial_cost'])&&isset($_POST['submit'])){
  $asset_id = $_POST['asset_id'];
  $name = $_POST['name'];
  $date_of_purchase = $_POST['date_of_purchase'];
  $type = $_POST['type'];
  $initial_cost = $_POST['initial_cost'];
  $description = $_POST['description'];

  $query = "INSERT INTO `$table` (`asset_id`, `name`, `date_of_purchase`, `type`, `initial_cost`, `description`) VALUES ('$asset_id', '$name', '$date_of_purchase', '$type', '$initial_cost', '$description')";
  if(mysqli_query($conn, $query)){
    echo "<script>alert ('Success!')</script>";
  }else{
    echo "<script>alert ('Try again!')</script>";
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
    <body class="fixed-nav" style="height: auto">
        <header style="height: 60px;">
        <nav class="navbar navbar-dark fixed-top bg-dark">
            <div class = "container-fluid" style="color: whitesmoke" >
                <h4 style="margin-top: 10px">Asset Manager [<?php echo $organization?>]</h4>
                <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="signout.php" style="height: 35px; font-size: 13px; color: white">Sign Out</a>
                </li>
                </ul>
            </div>
        </nav>
        </header>

        <div class= "container-fluid">
            <div class="row in-line">
            <div class="col-md-2 bg-dark fixed-nav" style="height: 100%; color: white; position:relative; width: 20%;">
                <br>
                <ul class="navbar-nav navbar-sidenav fixed-nav" >
                    <li class="nav-item text-center">
                    <h5>Dashboard</h5><img src="img/1.png" style="height: 38px">
                  </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="add_inc.php" style="color: white; font-size:13px " >
                          <img src="img/7.png" style="height: 14px">
                          Add Asset</a>
                    </a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="view_inc.php" style="color: white; font-size:13px " >
                        <img src="img/2.png" style="height: 14px">
                          View Asset</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="#" style="color: white; font-size:13px " >
                        <img src="img/4.png" style="height: 14px">
                          Update Asset</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="delete_inc.php" style="color: white; font-size:13px " >
                        <img src="img/6.png" style="height: 14px">
                          Delete Asset</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#" style="color: white; font-size:13px " >
                          <img src="img/3.png" style="height: 14px">
                            Monthly Report</a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link" href="#" style="color: white; font-size:13px " >
                        <img src="img/5.png" style="height: 14px">
                          My Profile</a>
                    </li>
                </ul>
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
      <div class="col-md-10" style="width: 80%;">
			<div class= "row">
              <div class="col-md-12" style="height: 20px;"></div>
              <div class="col-sm-12">
                <div class="card mb-3" style="margin-left: 10%; margin-right: 10%;">
                    <div class="card-header ">
                      <i class="fa fa-table"></i>Add Asset</div>
                      <div class="card-body">
				<form role="form" method= "POST">
					<div class="form-group in-line col-sm-12">
            <input type = "text" name = "asset_id"  class= "form-control col-sm-6" placeholder="Input Asset Id" style="margin-left: 25%; margin-right: 25%;">
        </div>
        <div class="form-group in-line col-sm-12">
            <input type = "text" name = "name"  class= "form-control col-sm-6" placeholder="Input Name" style="margin-left: 25%; margin-right: 25%;">
        </div>
        <div class="form-group in-line col-sm-12">
            <input type="text" name = "date_of_purchase"  class= "form-control col-sm-6 datepicker" placeholder="2018-06-14" style="margin-left: 25%; margin-right: 25%;">
        </div>
        <div class="form-group in-line col-sm-12">
            <input type = "text" name = "type"  class= "form-control col-sm-6" placeholder="Input Asset Type" style="margin-left: 25%; margin-right: 25%;">
        </div>
        <div class="form-group in-line col-sm-12">
            <input type = "text" name = "initial_cost"  class= "form-control col-sm-6" placeholder="Input Cost" style="margin-left: 25%; margin-right: 25%;">
        </div>
        <div class="form-group in-line col-sm-12">
            <textarea type = "text" name = "description"  class= "form-control col-sm-6" placeholder="Description[optional]" style="margin-left: 25%; margin-right: 25%;"></textarea>
        </div>
        <div class="form-group in-line col-sm-12">
            <input type = "submit" name = "submit"  class= "form-control col-sm-6 btn btn-primary" value="Add Asset" style="margin-left:25%; margin-right: 25%;">
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </body>
        </html>
