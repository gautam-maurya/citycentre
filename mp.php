<?php
    $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8');
    $sort=$_GET['sort'];
    if($sort=='asc'){
        $sql="select * from mobiles ORDER BY Price asc";
    }else if($sort=='desc'){
        $sql="select * from mobiles ORDER BY Price desc";
    }else{
        $sql="select * from mobiles";
    }
    $records=mysqli_query($conn,$sql);
    $crec=mysqli_query($conn,"select * from customer");
    while($lina=mysqli_fetch_assoc($crec)){
        mysqli_query($conn,"update customer set lin=0 where Fname like '%'");   
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <title>City Center</title>
    </head>
    <body>
        <section class="mainlogo">
            <nav style="width:20%; float:left;">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo.png" class="logophoto" a alt="City Center">
            </nav>
            <article class="searchindex"style="width:55%;">    
                <br><br>
                <br>
                <form method = "POST" name = "searchform" action="searchbar.php">
                    <input type="text" class="searchbar" align=center placeholder=" Search For Product, Brands And More" name="search">
                    <input type="submit" value="search">
                </form>
                </article>
        </section>
        <div class="menudiv">
                <ul class="menuul">
                        <li type="button" class="menuli" onclick="location.reload()"><a>Home</a></li>
                        <div class="dropdown">
                        <button class="dropbtn">Product</button>
                                <div class="dropdown-content">
                                  <a href=search.php?brand="Mi">Xiaomi</a>
                                  <a href=search.php?brand="OnePlus">OnePlus</a>
                                  <a href=search.php?brand="Honor">Honor</a>
                                </div>
                              </div>
                        <li class="rightbar"><a  href="https://goo.gl/forms/qLqjPHXebjchH0bX2">Feedback</a></li>
                        <li class="rightbar"><a  href="about.php">About</a></li>
                        <li class="rightbar"><a href="contact.php">Contact Us</a></li>
                        <li class="rightbar"><a  href="login.php">Login</a></li>
                        <li class="imgbar"><a href="cart.php"><img src="images/shopcart.jpg" height="40"></a></li>
                      </ul>                      
        </div>
        <div class="product">
        <div class="leftsort">
            <p style="font-size : 30px;">Sort</p>
            <a href="?sort=asc"><p style="font-size : 20px;" name="sortasc" value=value1>&nbsp;Price Low to High</p></a>
            <a href="?sort=desc"><p style="font-size : 20px;" name="sortdesc">&nbsp;Price High to Low</p></a>
            <a href="?sort=basic"><p style="font-size : 20px;" name="sortbasic">&nbsp;Default</p></a>
        </div>
        <div class="productsection">
            <table class="tablemob">
                <?php
                    while($mobile=mysqli_fetch_assoc($records)){
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
                    }
                    echo "</table>";
                ?>
            </table>
        </div>
        </div>
    </body>
</html>
