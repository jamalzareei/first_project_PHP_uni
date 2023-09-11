<?php
session_start();
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
                        <table >
                            <tr>
                                <td>
                                    ای دی کتاب
                                </td>
                                <td>
                                    نام کتاب
                                </td>
                                <td>
                                    تاریخ برگزاری
                                </td>
                                <td>
                                    تاریخ امتحان
                                </td>
                                <td>
                                    نام استاد
                                </td>
                                <td>
                                    تخصصی/عمومی
                                </td>
                                <td>
                                    مکان یرگزاری
                                </td>
                                <td>
                                    مکان امتحان
                                </td>
                                <td>
                                    انتخاب درس
                                </td>
                            </tr>
                            <?php
                            $con = @mysqli_connect("localhost", "root", "", "db_uni");
                            mysqli_set_charset($con, 'utf8');
                            if (!mysqli_connect_error()) {
                                $qu = "select * from tbl_books";
                                $res = mysqli_query($con, $qu);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo '
                                        <tr>
                                            <td>
                                                ' . $row["id_books"] . '
                                            </td>
                                            <td>
                                                ' . $row["name_books"] . '
                                            </td>
                                            <td>
                                                ' . $row["date_do"] . '
                                            </td>
                                            <td>
                                                ' . $row["date_test"] . '
                                            </td>
                                            <td>
                                                ' . $row["name_teacher"] . '
                                            </td>
                                            <td>
                                                ' . $row["type_book"] . '
                                            </td>
                                            <td>
                                                ' . $row["ma_do"] . '
                                            </td>
                                            <td>
                                                ' . $row["ma_test"] . '
                                            </td>
                                            <td>
                                                <input type="button" value="اخذ درس" onclick="akhz(' . $row["id"] . ')" name="' . $row[""] . '"/>
                                            </td>
                                        </tr>';
                                }
                            }
                            ?>
                        </table>
                    </div>

                </div>
                <?php
                include 'footer.php';
                ?>
            </div></div>
        <script>
            function akhz(id){
                $.post("entekhab_vahed.php", {id_book:id}, function(data){
                    alert(data);
                });
            }
        </script>
    </body>
</html>
