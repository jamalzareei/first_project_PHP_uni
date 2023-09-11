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
                    <form action="insert_register.php" method="post">
                        <div>Register</div>
                        <div class="login_form_left">first name </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_firstname" class="txt_username" />
                        </div>
                        <div class="login_form_left">last name</div>
                        <div class="login_form_right">
                            <input type="text" name="txt_lastname" class="txt_password" />                            
                        </div>
                        <div class="login_form_left">code meli </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_codemeli" class="txt_username" />
                        </div>
                        <div class="login_form_left">email</div>
                        <div class="login_form_right">
                            <input type="text" name="txt_email" class="txt_username" />
                        </div>
                        <div class="login_form_left">tell</div>
                        <div class="login_form_right">
                            <input type="tel" name="txt_tell" class="txt_username" />
                        </div>
                        <div class="login_form_left">birth day </div>
                        <div class="login_form_right">
                            <input type="text" name="txt_birthday" class="txt_username" />
                        </div>
                        <div class="login_form_left">karbari </div>
                        <div class="login_form_right">
                            <select name="deg">
                                <option value="2">
                                    ostad
                                </option>
                                <option value="3">
                                    daneshjo
                                </option>
                            </select>
                        </div>
                        <div class="login_form_left">shomare daneshjo</div>
                        <div class="login_form_right">
                            <input type="text" name="txt_uid" class="txt_username" />
                        </div>
                        <!--<div class="">
                            <img src="security.php" class="img_capcha" width="200" height="60" />
                        
                        </div>
                        <div class="login_form_left">Security Code</div>
                        <div class="login_form_right">
                            <input type="text" name="txt_password" class="txt_password" />  
                        </div>-->
                        
                        <div class="">
                            
                            <input type="submit" value="register" class="btn_login" />  
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
