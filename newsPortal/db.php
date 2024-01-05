<?php
$host="localhost:3306";
$user="root";
$pass="";
$db="news_website";

$conn = mysqli_connect($host, $user, $pass, $db);

function formatDate1($date){
    return date('y-m-d', strtotime($date));
}
function formatDate2($date2){
    return date('g:i a', strtotime($date2));
}
function formatDate3($date3){
    return date('l', strtotime($date3));
}
?>