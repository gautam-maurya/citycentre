<?php 
    $mid=$_GET['mid'];
    $quan=$_POST['quan'];
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $records=mysqli_query($conn,"select Cid from customer where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['Cid'];
    $min=mysqli_query($conn,"select Mid from buys where cid=$cid and mid=$mid");
    $minn=mysqli_fetch_array($min);
    if($minn['Mid']==$mid){
        mysqli_query($conn,"update buys set Cid=$cid,Mid=$mid,Quantity=Quantity+$quan where Mid=$mid and cid=$cid");
    }else{
        mysqli_query($conn,"insert into buys(Cid,Mid,Quantity) values($cid,$mid,$quan)");
    }
    mysqli_query($conn,"update mobiles set Quantity=Quantity-$quan where ID=$mid");
    $mobb=mysqli_query($conn,"select * from mobiles where ID=$mid");
    $mob=mysqli_fetch_array($mobb);
    if($mob['Quantity']<=$mob['Reorder']){
        mysqli_query($conn,"update mobiles set Quantity=Quantity+500 where ID=$mid");
    }
?>
<html>
    <head>
        <title>Ordered Successfully</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body align=center>
        <img src="images/tick.png" alt="Tick" height="300px" width="300px">
        <h1>Ordered Successfully</h1>
        <a href=lindex.php?sort=basic><button class="buttonsignup" style="width:20%; height:60px;">&lt;&lt;&lt;&lt; Back to Home</button></a>
    </body>
</html>
