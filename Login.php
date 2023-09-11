<?php
    session_start();
    if($_SESSION["deg"]!=NULL || isset($_SESSION["deg"])){
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
                    <form action="form_login.php" method="post">
                        <div> صفحه لاگین</div>
                        <div class="login_form_left">User Name </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_username" class="txt_username" />
                        </div>
                        <div class="login_form_left">Password</div>
                        <div class="login_form_right">
                            <input type="password" name="txt_password" class="txt_password" />                            
                        </div>
                        <select name="deg">
                            <option value="1">
                                مدیر
                            </option>
                            <option value="2">
                                استاد
                            </option>
                            <option value="3">
                                دانشجو
                            </option>
                        </select>
                        <!--<div class="">
                            <img src="security.php" class="img_capcha" width="200" height="60" />
                        
                        </div>
                        <div class="login_form_left">Security Code</div>
                        <div class="login_form_right">
                            <input type="text" name="txt_password" class="txt_password" />  
                        </div>-->
                        
                        <div class="">
                            
                            <input type="submit" value="login" class="btn_login" />  
                        </div>
                        <div>
                            <?php
                                if(isset($_GET["login"]) && $_GET["login"]="error"){
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
