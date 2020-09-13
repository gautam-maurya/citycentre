<html>
    <?php
        $id=$_GET['mob'];
        $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
        $sql="select * from mobiles where ID=$id";
        $records=mysqli_query($conn,$sql);
        $mobile=mysqli_fetch_assoc($records);
    ?>      
    <head>
        <link rel="stylesheet" href="css/main.css"> 
        <script src="js/main.js"></script>
        <title>
            <?php
                echo $mobile['Name'];
            ?>
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
        <div class="mpage">
            <div class=mpageimg>
                <?php
                    $mname=$mobile['Name'];
                    echo "<br><td class='imgmobile'>"."<img width=600px height=600px src='images/$mname.png'>"."</td>";
                ?>
            </div>
            <div class="mpagedetail">
                <?php
                    echo "<br><br>";
                    echo "<h1>".$mobile['Name']."</h1>";
                    echo "<p class='mpagedata'>";
                    echo "<br>".$mobile['RAM']." GB RAM";
                    echo "<br>".$mobile['ROM']." GB ROM";
                    if($mobile['Exmem'] == 0){}
                    else{
                    echo "<br>".$mobile['Exmem']." GB Expandable memory";
                    }
                    echo "<br>".$mobile['Display']."inch display";
                    echo "<br>".$mobile['Backcam']." Rear Camera";
                    echo "<br>".$mobile['Frontcam']." Front Camera";
                    echo "<br>".$mobile['Battery']." mah Lithium Polymer Battery";
                    echo "<br>".$mobile['Processor']." Processor";
                    echo "<br>"."Brand Warranty of ".$mobile['Warranty']." year Available for Mobile and 6 months for accesories";
                    echo "</p>";
                    $mid=$mobile['ID'];
                    echo "<a href='carto.php?mid=$mid'><button class='buttonsignup' style='width:94%; height:60px;'>Add to Cart</button></a><br><br>";
                    echo "<a href='buy.php?mid=$mid'><button class='buttonsignup' style='width:94%; height:60px;'>Buy Now</button></a>";
                ?>
            </div>
        </div>
        
    </body>
</html> 