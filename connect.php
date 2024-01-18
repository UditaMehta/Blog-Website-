<?php
    $con=mysqli_connect("localhost", "root");
    mysqli_select_db($con, "mehtaji_writes");
    if($con){
        echo "";
    }
    else{
        echo "connection failed";
    }
?>