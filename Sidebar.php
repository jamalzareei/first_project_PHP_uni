<?php

echo'
<div><a href="index.php">صفحه اصلی</a></div>
<div><a href="login.php">ورود به سیستم</a></div>
<div><a href="#">رشته های دانشگاهی</a></div>
<div><a href="#">تماس با آموزش</a></div>
<div><a href="#">پرسش و پاسخ</a></div>';
if($_SESSION["deg"]==1){
    echo '
      <div><a href="books.php"> اضافه کردن درس </a></div>  
      <div><a href="register.php"> ثبت نام کاربر </a></div>  

';
}
if($_SESSION["deg"]==2){
    echo '
        
';
}
if($_SESSION["deg"]==3){
    echo '
        <div><a href="show_book.php">انتخاب واحد</a></div>
        <div><a href="vahed.php">لیست دروس انتخابی </a></div> 
';
}
if(isset($_SESSION["deg"])){
     echo '
        <div><a href="logout.php">خروج</a></div>
';
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>