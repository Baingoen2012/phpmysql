<?php

$host ="localhost";
$user ="root";
$pass ="12345678";
$db ="bb";
mysql_connect ($host,$id,$name) or die ("Database Server ไม่สำเร็จ");
mysql_select_db($db) or die ("select DB Failed");
mysql_query("SET NAMES utf8");
if ($_POST(['save'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "INSERT INTO tebel01(id,name)";
    "VALUES('001','Baingoen')";
    mysql_query($sql);
}


