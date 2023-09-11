<?php
session_start();
if(!isset($_SESSION["seshion_name"])){
    $test=$_SESSION["seshion_name"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Style.css"/>
        <script type="text/javascript" src="jquery-min.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="main-child">
        <?php
        include 'header.php';
        ?>
        <div class='main-bodys' style='height:500px;width:1000px'>
            <div class="sidebar">
                <?php
                    include 'Sidebar.php';
                ?>
            </div>
            
            <div class="bodys">
                <div> <input type="button" class="btn_etla" value="اطلاعیه ها" />
                    <input type="button" class="btn_khabar" value="اخبار" />
                    <input type="button" class="btn_hamayesh" value="همایش ها" />
                    </div>
                    <div class="box-hamayesh">
                        
                        همایشها
                        <?php
                            $con=  @mysqli_connect("localhost", "root", "", "db_uni");
                            if(!mysqli_connect_error()){
                                $query="select * from tbl_news where type='hamayesh'";
                                $table=  mysqli_query($con, $query);
                                echo "
                                    <div>
                                        <div style='width:25%;float:right;'></div>
                                        <div style='width:70%;float:right;'></div>
                                    </div>
                                    ";
                                while ($rows=  mysqli_fetch_assoc($table)){
                                    echo "
                                        <div>
                                        <div style='width:25%;float:right;'>".$rows['date']."</div>
                                        <div style='width:70%;float:right;'>".$rows['message']."</div>
                                    </div>                                        
                                    ";
                                }
                        ?>
                    </div>
                    <div class="box-akhbar">
                        خبرها
                        <?php
                        $query="select * from tbl_news where type='khabar'";
                                $table=  mysqli_query($con, $query);
                                echo "
                                    <div>
                                        <div style='width:25%;float:right;'></div>
                                        <div style='width:70%;float:right;'></div>
                                    </div>
                                    ";
                                while ($rows=  mysqli_fetch_assoc($table)){
                                    echo "
                                        <div>
                                        <div style='width:25%;float:right;'>".$rows['date']."</div>
                                        <div style='width:70%;float:right;'>".$rows['message']."</div>
                                    </div>                                        
                                    ";
                                }
                        ?>
                    </div>
                    <div class="box-etla">
                        اطلاعیه ها
                        <?php
                        $query="select * from tbl_news where type='etlaeie'";
                                $table=  mysqli_query($con, $query);
                                echo "
                                    <div>
                                        <div style='width:25%;float:right;'></div>
                                        <div style='width:70%;float:right;'></div>
                                    </div>
                                    ";
                                while ($rows=  mysqli_fetch_assoc($table)){
                                    echo "
                                        <div>
                                        <div style='width:25%;float:right;'>".$rows['date']."</div>
                                        <div style='width:70%;float:right;'>".$rows['message']."</div>
                                    </div>                                        
                                    ";
                                }
                            }
                            mysqli_close($con);
                        ?>
                    </div>
            </div>
            
        </div>
        <?php
        include 'footer.php';
        ?>
            </div></div>
    </body>
</html>
