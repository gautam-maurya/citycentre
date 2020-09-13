<?php 
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $records=mysqli_query($conn,"select Cid from customer where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['Cid'];
    $mrec=mysqli_query($conn,"select * from cart where Cid=$cid");        
    if(mysqli_fetch_assoc($mrec)==""){
        echo "<script type=\"text/javascript\">window.alert(\"No items in cart\");</script>";
        header('Location:cart.php');
    }
?> 
<html>
    <head>
        <title>Ordered Successfully</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body align=center>
        <?php
            $bought = array();
            $mrec=mysqli_query($conn,"select * from cart where Cid=$cid");
            $buym=mysqli_query($conn,"select mid from buys where Cid=$cid");
            while($buyed=mysqli_fetch_array($buym)){
                $bought[] = $buyed['mid'];
            }
            while($n=mysqli_fetch_array($mrec)){
                $mid=$n['Mid'];
                mysqli_query($conn,"update mobiles set Quantity=Quantity-1 where ID=$mid");
                if($bought && in_array($mid,$bought)){
                    mysqli_query($conn,"update buys set Quantity=Quantity+1 where Mid=$mid");
                }else{
                    mysqli_query($conn,"insert into buys(Cid,Mid,Quantity) values($cid,$mid,1)");
                }
            }
            mysqli_query($conn,"delete from cart where Cid=$cid");
        ?>
        <img src="images/tick.png" alt="Tick" height="300px" width="300px">
        <h1>Ordered Successfully</h1>
        <a href=lindex.php?sort=basic><button class="buttonsignup" style="width:20%; height:60px;">&lt;&lt;&lt;&lt; Back to Home</button></a>
    </body>
</html>
