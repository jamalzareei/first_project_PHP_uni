<?php
    session_start();
    if($_SESSION["deg"]!=1){
        header("location: index.php");
    }
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Style.css"/>
    </head>
    <body>
        <div class="main">
            <div class="main-child">
        <?php
        // put your code here
        include 'header.php';
        ?>
                <div class="login">
                    <form action="insert_book.php" method="post">
                        <div>ثبت درس</div>
                        <div class="login_form_left">
                            نام درس
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_book" class="txt_username" />
                        </div>
                        <div class="login_form_left">
                        کد درس
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_idbook" class="txt_password" />                            
                        </div>
                        <div class="login_form_left">
                        تاریخ برگزاری
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_date_do" class="txt_username" />
                        </div>
                        <div class="login_form_left">
                            تاریخ امتحان
                            
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_date_test" class="txt_username" />
                        </div>
                        <div class="login_form_left">
                            نام استاد
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_teacher" class="txt_username" />
                        </div>
                        <div class="login_form_left">
                        محل برگزاری کلاس
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_ma_do" class="txt_username" />
                        </div>
                        <div class="login_form_left">
                        محل برگزاری امتحان
                        </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_ma_test" class="txt_username" />
                        </div>
                        <div class="login_form_left">
                        نوع درس
                        </div>
                        <div class="login_form_right">
                            <select name="type_book">
                                <option value="عمومی">
                                    عمومی
                                </option>
                                <option value="تخصصی">
                                    تخصصی
                                </option>
                            </select>
                        </div>
                        <!--<div class="">
                            <img src="security.php" class="img_capcha" width="200" height="60" />
                        
                        </div>
                        <div class="login_form_left">Security Code</div>
                        <div class="login_form_right">
                            <input type="text" name="txt_password" class="txt_password" />  
                        </div>-->
                        
                        <div class="">
                            
                            <input type="submit" value="ثبت درس" class="btn_login" />  
                        </div>
                        <div>
                            <?php
                                if(isset($_GET["register"]) && $_GET["register"]="error"){
                                    echo 'مشخصات به درستی وارد نشده اند';
                                }
                            ?>
                        </div>
                    </form>
                    
                </div>        
        <?php
        include 'footer.php';
        ?>
            </div>
        </div>
    </body>
</html>
