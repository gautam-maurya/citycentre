<?php
require ('loginval.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js"></script>
        <title>Login to your Account</title>
        <style>
            .error{
                color: red;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class = "logindiv">
            <div class = "logodiv">
                <img src="images/logo.png" class="logophoto" alt= "Logo Here">
            </div>
            <br><br>
            <div class= "authdiv">
                <form name="loginform" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <h1 align=center class="headtext">Login</h1>
                    <label for = "email" class="formtext">&nbsp;&nbsp;Email</label>
                    <br>
                    <input type="text" id = "email" name="email" class="inputsignup">
                    &nbsp;<span class="error"> * <?php echo $emailErr;?></span><br>
                    <label for = "pass" class="formtext">&nbsp;&nbsp;Password</label>
                    <br>
                    <input type="password" id = "pass" name="pass" class="inputsignup">
                    &nbsp;<span class="error"> * <?php echo $passErr;?></span><br>
                    &nbsp;&nbsp;
                    <br>
                    &nbsp;&nbsp;&nbsp;<button type="submit" class="buttonsignup">Sign in<Inp></Inp></button>
                    <br><br>
                    &nbsp;&nbsp;&nbsp;<a href="signup.php"><button type="button" class="makeacnt">New To City Centre? Sign Up</button></a>
                </form>
            </div>
        </div>
    </body>
</html>
 