<?php
session_start();
//echo $_SESSION["username"];
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo'
 //       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 //       ';
if (!empty($_POST["id_book"])) {
    $id=$_POST["id_book"];
    $con = @mysqli_connect("localhost", "root", "", "db_uni");
    mysqli_set_charset($con, 'utf8');
    if (!mysqli_connect_error()) {
        $query = "select * from tbl_books where id='" . $id . "'";
        $table=  mysqli_query($con, $query);
        while ($rows = mysqli_fetch_assoc($table)) {
            $query_reg = "insert into tbl_unit (name_book,id_book,id_stu,name_tea,date_unit,date_do,date_test) 
               values (N'" . $rows['name_books'] . "',N'" . $rows['id_books'] . "',N'" . $_SESSION["id"] . "',N'" . $rows['name_teacher'] . "',N'" . date("y-m-d") . "',N'" . $rows['date_do'] . "',N'" . $rows['date_test'] . "')";
            mysqli_query($con, $query_reg);
            echo $_SESSION["id"];
        }
            mysqli_close($con);
    }
}
?>
