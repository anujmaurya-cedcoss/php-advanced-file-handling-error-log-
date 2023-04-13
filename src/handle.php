<?php
    require('config.php');
    $fname = $_POST['fname'];
    $sql = "INSERT INTO `user`(`name`) VALUES ('$fname')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        $date = date('m/d/Y h:i:s a', time());
        error_log($date, 3, './error.log');
    }
?>