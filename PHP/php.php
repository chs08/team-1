<?php
    $conn = mysqli_connect('localhost','root','','mydb');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속실패 : '.mysqli_connect_error();
        exit();
    }
    
?>