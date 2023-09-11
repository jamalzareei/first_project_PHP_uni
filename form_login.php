<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if (!empty($_POST["txt_username"]) && !empty($_POST["txt_password"])) {
    $uid = $_POST["txt_username"];
    $password = $_POST["txt_password"];
    $deg=$_POST["deg"];
    $con = @mysqli_connect("localhost", "root", "", "db_uni");
    if (!mysqli_connect_error()) {
        $query = "select * from tbl_users where u_id='$uid' and password='$password' and deg='$deg'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION["username"]=$uid;
            $_SESSION["id"]=$uid;
            $_SESSION["deg"]=$deg;
            header("location: index.php");
        } else {
            header("location: login.php?login=error");
        }
        while ($rows = mysqli_fetch_assoc($result)) {
            $_SESSION["username"]=$rows["uid"];
            $_SESSION["fullname"]=$rows["fname"]." ".$rows["lname"];
            $_SESSION["deg"]=$rows["deg"];
            
        }
    }
}
?>
