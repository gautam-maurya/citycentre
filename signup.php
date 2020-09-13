<?php
require ('formval.php');
?>
<html>
    <head>
        <title align=center>Make your new Account</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/main.js"></script>
        <style>
            .error{
                color: red;
                font-size : 16px;
            }
        </style>
    </head>
    <body>
        <div class="logindiv">
            <div class = "logodiv">
                <img src="images/logo.png" class="logophoto" alt= "Logo Here">
            </div>
            <div class="authdiv">
            <h1 align=center class="headtext">Create Account</h1>
            <p>
            <form class="signupform" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <label for="fname" class="formtext">&nbsp;&nbsp;First Name</label>
                <br>
                &nbsp;<input id="fname" type="text" class="inputsignup" name="fname" placeholder="Enter your First Name">
                &nbsp;<span class="error"> * <?php echo $firstnameErr;?></span><br>
                <label for="lname" class="formtext">&nbsp;&nbsp;Last Name</label><br>
                &nbsp;<input id="lname" type="text" class="inputsignup" name="lname" placeholder="Enter your Last Name">
                &nbsp;<span class="error"> * <?php echo $lastnameErr;?></span><br>
                <label for="dob" class="formtext">&nbsp;&nbsp;Date of Birth</label>
                <br>
                &nbsp;<input id="dob" type="text" class="inputsignup" name="dob" placeholder="YYYY-MM-DD">
                &nbsp;<span class="error"> * <?php echo $dobErr;?></span><br>
                <label for="phone" class="formtext">&nbsp;&nbsp;Phone No.</label>
                <br>
                &nbsp;<input id="phone" type="tel"  class="inputsignup" name="phone" placeholder="Enter your Phone Number">
                &nbsp;<span class="error"> * <?php echo $phoneErr;?></span><br>
                <label for="mail" class="formtext" name="mail" >&nbsp;&nbsp;Email Id.</label>
                <br>
                &nbsp;<input id="mail" class="inputsignup" type="email" name="email">
                &nbsp;<span class="error"> * <?php echo $emailErr;?></span><br>
                <label for="pass" class="formtext">&nbsp;&nbsp;Your Password</label>
                <br>
                &nbsp;<input id="pass" class="inputsignup" type="password" name="pass" placeholder="Password must be 8-15 characters">
                &nbsp;<span class="error"> * <?php echo $passErr;?></span><br>
                <label for="repass" class="formtext" name="pass">&nbsp;&nbsp;Re-Enter Password</label>
                <br>
                &nbsp;<input id="repass" class="inputsignup" type="password" name="repass">
                &nbsp;<span class="error"> * <?php echo $repassErr;?></span><br>
                &nbsp;&nbsp;&nbsp;<button type="submit" id="signupbut" name="signup" class="buttonsignup">Continue</button>
                <br><br>
                &nbsp;&nbsp;&nbsp;<a href="login.php"><button type="button" class="buttonsignup">&lt;&lt;&lt; Back to Login</button></a>
            </form>
            </p>
        </div>
    </div>
    </body>
</html>