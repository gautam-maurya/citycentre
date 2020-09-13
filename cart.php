<?php
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $records=mysqli_query($conn,"select Cid from customer where lin=1");
    $loggedin=mysqli_fetch_assoc($records);
    $cid=$loggedin['Cid'];
    if($loggedin['Cid']==""){
        header('Location:login.php');
    }
    $mrec=mysqli_query($conn,"select * from cart as cr,mobiles as m where cr.Cid=$cid and cr.Mid=m.ID");
?>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/main.js"></script>
    </head>
    <body>
        <h1>Cart</h1>
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
                        echo "<a href='delete.php?mid=$mob'><button class='buttonsignup' style='width:80%; height:40px;'>Delete</button></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            </table>
        <a href="billcart.php"><button class="buttonsignup" style="width:100%; height:60px;">Proceed to checkout </button></a>
        <a href="lindex.php?sort=basic"><button class="buttonsignup" style="width:100%; height:60px;">Back to Home Page</button></a>
    </body>
</html>
