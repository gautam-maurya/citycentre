<?php
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $records=mysqli_query($conn,"select Cid from customer where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['Cid'];
    $mb=mysqli_query($conn,"select * from mobiles where ID in (select Mid from cart where Cid=$cid)");
?>
<html>
    <head>
        <title align=center>Payment Page</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/main.js"></script>
    </head>
    <body><br><br>
        <div class="logindiv">
            <div class="authdiv">
                <h1  align="center">Bill</h1>
                <p style="font-size:20px;">
                <form action="ordercart.php" method="POST">
                    <table border = 1 cellspacing = 0 cellpadding = 5 width =97%>
                    <tr><td>Mobile Name</td><td>Quantity</td><td>Price</td></tr>
                        <?php
                            $total=0;
                            while($bill=mysqli_fetch_assoc($mb)){
                                echo "<tr><td>".$bill['Name']."</td><td><input name='quan' style='width:30px;' value='1' readonly></td><td>".$bill['Price']."</td></tr>";
                                $total=$total + $bill['Price'];
                            }
                        ?>
                    </table>
                    <br><br>
                    Total : <?php echo $total; ?><br><br>
                    <button type="submit" name="pay" class="buttonsignup" style="width:97%">Pay and Proceed</button>
                </form>
                </p>
            </div>
        </div>
    </body>
</html>
