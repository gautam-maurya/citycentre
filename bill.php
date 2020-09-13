<?php
    $mid=$_GET['mid'];
    $quan=$_POST['quan'];
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $gb=mysqli_query($conn,"select * from mobiles where ID=$mid");
    $bill=mysqli_fetch_array($gb);
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
                <form action="ordered.php?mid=<?php $mid=$_GET['mid']; echo $mid; ?>" method="POST">
                    <table border = 1 cellspacing = 0 cellpadding = 5 width =97%>
                        <?php
                            echo "<tr><td>Mobile Name</td><td>Quantity</td><td>Price</td></tr>";
                            echo "<tr><td>".$bill['Name']."</td><td><input name='quan' style='width:30px;' value='".$quan."' readonly></td><td>".$bill['Price']."</td></tr>";
                        ?>
                    </table>
                    <br><br>
                    Total : <?php echo $quan*$bill['Price']; ?><br><br>
                    <button type="submit" name="pay" class="buttonsignup" style="width:97%">Pay and Proceed</button>
                </form>
                </p>
            </div>
        </div>
    </body>
</html>
