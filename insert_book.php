<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
if (strlen($_POST["txt_book"]) > 0 &&
        strlen($_POST["txt_idbook"]) > 0 &&
        strlen($_POST["txt_date_do"]) > 0 &&
        strlen($_POST["txt_date_test"]) > 0 &&
        strlen($_POST["txt_teacher"]) > 0 &&
        strlen($_POST["txt_ma_do"]) > 0 &&
        strlen($_POST["txt_ma_test"]) > 0 &&
        strlen($_POST["type_book"]) > 0) {

    $name_book = $_POST["txt_book"];
    $id_book = $_POST["txt_idbook"];
    $date_do = $_POST["txt_date_do"];
    $date_test = $_POST["txt_date_test"];
    $name_teacher = $_POST["txt_teacher"];
    $ma_do = $_POST["txt_ma_do"];
    $ma_test = $_POST["txt_ma_test"];
    $type = $_POST["type_book"];


    $con = @mysqli_connect("localhost", "root", "", "db_uni");
    mysqli_set_charset($con, 'utf8');
    if (!mysqli_connect_error()) {

        $query_tek = "select * from tbl_books where id_books='$id_book'";
        $res = mysqli_query($con, $query_tek);

        if (mysqli_num_rows($res) == 0) {
            $query_reg = "insert into tbl_books (name_books,id_books,date_do,date_test,name_teacher,type_book,ma_do,ma_test)
            values(N'$name_book',N'$id_book',N'$date_do',N'$date_test',N'$name_teacher',N'$type',N'$ma_do',N'$ma_test')";
            mysqli_query($con, $query_reg);
            mysqli_close($con);
            echo 'اطلاعات با موفقیت وارد گردید';
        }
 else {
                        echo 'کد کتاب تکراری میباشد';}
    }
} else {
    echo 'همه فیلد ها را پر کنید';
}
?>
