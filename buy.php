<?php
    $mid=$_GET['mid'];
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $records=mysqli_query($conn,"select Cid from customer where lin=1");
    $mrec=mysqli_query($conn,"select * from mobiles where ID=$mid");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['Cid'];
    if($loggedin['Cid']==""){
        header('Location:login.php');
    }
    else{
    }
?>
<html>
    <head>
        <title>Buy Now</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/main.js"></script>
    </head>
    <body>
        <h1>Buy Now</h1>
        <form action="bill.php?mid=<?php echo "$mid"; ?>" method="POST">
            <table class="tablemob">
                    <?php
                        while($mobile=mysqli_fetch_assoc($mrec)){
                            $mname=$mobile['Name'];
                            $mob=$mobile['ID'];                        
                            echo "<tr>";
                            echo "<td class='imgmobile'>"."<a href=mobilepage.php?mob=$mob class='modelname'><img width=250px height=250px src='images/$mname.png'></a>"."</td>";
                            echo "<td class='mobiledata'>"."<a href=mobilepage.php?mob=$mob class='modelname'>".$mobile['Name']."</a><br>";
                            echo "<br>".$mobile['RAM']." GB RAM";
                            echo " | ".$mobile['ROM']." GB ROM";
                            if($mobile['Exmem'] == 0){}
                            else{
                            echo "<br>".$mobile['Exmem']." GB Expandable memory";
                            }
                            echo "<br>".$mobile['Display']."inch display";
                            echo "<br>".$mobile['Backcam']." Rear Camera";
                            echo " | ".$mobile['Frontcam']." Front Camera";
                            echo "<br>".$mobile['Battery']." mah Lithium Polymer Battery";
                            echo "<br>".$mobile['Processor']." Processor";
                            echo "<br>"."Brand Warranty of ".$mobile['Warranty']." year Available for Mobile and 6 months for accesories";
                            echo "</td>";
                            echo "<td class='mobprice'>";
                            echo "Rs. ".$mobile['Price']."<br>"."No Cost EMI"."<br><br>";
                            echo "Enter Quantity<br>";
                            echo "<input type='number' name='quan'>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    ?>
                </table>
            <button type="submit" class="buttonsignup" style="width:100%; height:60px;">Proceed to checkout </button>
        </form>
        <a href="lindex.php?sort=basic"><button class="buttonsignup" style="width:100%; height:60px;">Back to Home Page</button></a>
    </body>
</html>
