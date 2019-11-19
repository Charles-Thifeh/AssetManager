<?php
ob_start();
session_start();
require 'connect_inc.php';
require 'core.inc.php';
function loggedin() {
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }else {
        return false;
    }
}


if (loggedin()) {
    $id = $_SESSION['user_id'];
    $query2= "SELECT admin_Surname, admin_firstname, sex, Organization_name FROM admin WHERE id = '$id'";
    if ($query_run2 = mysqli_query($conn, $query2)) {
        $query_row = mysqli_fetch_assoc($query_run2);
        $surname = $query_row['admin_Surname'];
        $name = $query_row['admin_firstname'];
        $sex = $query_row['sex'];
        $organization = $query_row['Organization_name'];
    }
    require 'welcome.php';
    

}else {
    include  'admin_login.php';
}

?>
