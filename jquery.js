/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $(".box-akhbar").css("display", "none");
    $(".box-etla").css("display", "none");
    $(".btn_hamayesh").css("background", "green");
    $(".btn_khabar").click(function () {
        $(this).css("background", "green");
        $(".box-hamayesh").css("display", "none");
        $(".box-akhbar").css("display", "block");
        $(".box-etla").css("display", "none");
        $(".btn_hamayesh").css("background", "none");
        $(".btn_etla").css("background", "none");
    });
    $(".btn_hamayesh").click(function () {
        $(this).css("background", "green");
        $(".box-hamayesh").css("display", "block");
        $(".box-akhbar").css("display", "none");
        $(".box-etla").css("display", "none");
        $(".btn_khabar").css("background", "none");
        $(".btn_etla").css("background", "none");
    });
    $(".btn_etla").click(function () {
        $(this).css("background", "green");
        $(".box-hamayesh").css("display", "none");
        $(".box-akhbar").css("display", "none");
        $(".box-etla").css("display", "block");
        $(".btn_hamayesh").css("background", "none");
        $(".btn_khabar").css("background", "none");
    });
});
