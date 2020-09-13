<?php
    $mid=$_GET['mid'];
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $records=mysqli_query($conn,"select Cid from customer where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['Cid'];
    mysqli_query($conn,"delete from cart where Cid=$cid and Mid=$mid");
    header('Location:cart.php');
?>