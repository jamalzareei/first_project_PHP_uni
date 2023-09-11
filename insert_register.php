<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo ' <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
if(strlen($_POST["txt_firstname"])>0 &&
    strlen($_POST["txt_lastname"])>0 &&
    strlen($_POST["txt_codemeli"])>0 &&
    strlen($_POST["txt_email"])>0 &&
    strlen($_POST["txt_tell"])>0 &&
    strlen($_POST["txt_birthday"])>0 &&
    strlen($_POST["deg"])>0 &&
    strlen($_POST["txt_uid"])>0){
    
    $fname=$_POST["txt_firstname"];
    $lname=$_POST["txt_lastname"];
    $code_meli=$_POST["txt_codemeli"];
    $email=$_POST["txt_email"];
    $tell=$_POST["txt_tell"];
    $birthday=$_POST["txt_birthday"];
    $deg=$_POST["deg"];
    $uid=$_POST["txt_uid"];
    $e_vahed=0;
    $mashrot=0;
    
    
    $con=@mysqli_connect("localhost", "root", "", "db_uni");
    mysqli_set_charset($con, 'utf8');
    if(!mysqli_connect_error()){
        $query_reg="insert into tbl_users (fname,lname,u_id,number_meli,email,password,tell,deg,e_vahed,mashrot,birthday)
            values('$fname','$lname','$uid','$code_meli','$email','$code_meli','$tell','$deg','$e_vahed','$mashrot','$birthday')";
        mysqli_query($con, $query_reg);
        mysqli_close($con);
        echo 'اطلاعات با موفقیت وارد گردید';
    }
}
 else {
    echo 'همه فیلد ها را پر کنید';
 }
?>
