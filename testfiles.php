<?php
                            $con=  @mysqli_connect("localhost", "root", "", "db_uni");
                            if(mysqli_connect_error()){
                                $query="select * from tbl_news where type='khabar'";
                                $table=  mysqli_query($con, $query);
                                echo "
                                    <div>
                                        <div style='width:25%'></div>
                                        <div style='width:70%'></div>
                                    </div>
                                    ";
                                while ($rows=  mysqli_fetch_assoc($table)){
                                    echo "
                                        <div>
                                        <div style='width:25%'>".$rows['date']."</div>
                                        <div style='width:70%'>".$rows['message']."</div>
                                    </div>                                        
";
                                }
                            }
 else {
                                                                echo 'jamal';}
                            mysqli_close($con);
                        ?>



 <div class="footer">
            <div class="footer-right">
                <img src="logo.jpg" height="200" width="300" />
            </div>
            <div class="footer-center">
                <div><a href="#">صفحه اصلی</a></div>
                    <div><a href="#">ورود به سیستم</a></div>
                    <div><a href="#">رشته های دانشگاه</a></div>
                    <div><a href="#">تماس با آموزش</a></div>
                    <div><a href="#">پرسش و پاسخ</a></div>
                    <div><a href="#">گالری تصاویر</a></div>
            </div>
            <div class="footer-left">
                 <div><a href="#">سایت سنجش</a></div>
                    <div><a href="#">امور دانشجویان</a></div>
            </div>
        </div>