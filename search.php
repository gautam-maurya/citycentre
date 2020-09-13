<html>
    <?php
        $brand=$_GET['brand'];
        $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
        $sql="select * from mobiles where Model=$brand";
        $records=mysqli_query($conn,$sql);
        $mobile=mysqli_fetch_assoc($records);
    ?> 
    <head>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js"></script>
        <title>
            
        </title>
    </head>
    <body>
        <div class="menudiv">
            <ul class="menuul">
                <a href="lindex.php?sort=basic"><li type="button" class="menuli">Home</a></li>
                <li class="rightbar"><a  href="https://goo.gl/forms/qLqjPHXebjchH0bX2">Feedback</a></li>
                <li class="rightbar"><a  href="about.php">About</a></li>
                <li class="rightbar"><a href="contact.php">Contact Us</a></li>
                <li class="imgbar"><a href="cart.php"><img src="images/shopcart.png" height="40"></a></li>
            </ul>                      
        </div>
            <div class="product">
            <div class="productsection">
                <table class="tablemob">
                    <?php
                        do{
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
                            echo "Rs. ".$mobile['Price']."<br>"."No Cost EMI";
                            echo "</td>";
                            echo "</tr>";
                        }while($mobile=mysqli_fetch_assoc($records));
                    ?>
                </table>
            </div>
            </div>
    </body>
</html>