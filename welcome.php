
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
    <body style="height: auto">
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
            <div class="col-md-10" style="width: 80%">
                    <div class="row">
                            <div class="col text-center" style="height: 100%">
                                <h3 style="margin-top: 15%;">Welcome,
                                    <?php
                                          if ($sex == "M") {
                                            echo "Mr ",$surname, " ", $name;
                                        }else{
                                            echo "Mrs/Miss ",$surname, " ", $name;
                                       }    ?>
                                    </h5>
                             </div>
                        </div>
            </div>


    </div>
</div>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    <!-- <footer class="" style="background-color: whitesmoke; margin-bottom:0px;">
        <div class="container-fluid" style="text-align: center; margin-bottom:0px;">
            <div class="col-md-12 text-center" style="font-size: 13px; height: 15px; margin-bottom:0px;">
                <p>&copy; <?php echo $organization?>, 2019</p>
            </div>
        </div>
    </footer> -->
</html>
