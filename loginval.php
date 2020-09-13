<?php
    $email=$pass=$ne=null;
    $emailErr=$passErr=null;
    $c=0;
    function test_input($data){    
        $data=trim($data);             
        $data=stripslashes($data);      
        $data=htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER['REQUEST_METHOD']=="POST"){  
        if (empty($_POST["email"])){             
            $emailErr="email should not be empty";        
        } else {
            $email=test_input($_POST["email"]);          
            if (!preg_match("/^[a-z0-9.]+[a-z0-9.]*[@][a-z]+[.][a-z]+$/",$email)) { 
            $emailErr = "Enter a proper email id";
            }else{
                $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8') or die(mqsql_error());
                $echeck=mysqli_query($conn,"select Email as echeck from customer where Email='$email'");
                $ec=mysqli_fetch_array($echeck);
                $ne=$ec['echeck'];
                if($ne!=$email){
                    $emailErr="No such email exist";    
                }else{
                    $c=$c+1;
                }
            }
        }
        if (empty($_POST["pass"])){             
            $passErr="Password should not be empty";        
        } else {
            $pass=test_input($_POST["pass"]);          
            if (strlen((string)$pass)<=8 and strlen((string)$pass)>=15) { 
            $passErr = "Password should be of length 8 t0 15 characters";
            }else{
                $conn=mysqli_connect('localhost','root','','citycentre') or die(mqsql_error());
                $dec=convert_uuencode($pass);
                $pcheck=mysqli_query($conn,"select Password as pcheck from customer where Password='$dec'");
                $pc=mysqli_fetch_array($pcheck);
                $np=$pc['pcheck'];
                if($dec!=$np){
                    $passErr="Wrong password";    
                }else{
                    $c=$c+1;
                }
            }
        }
        if($c==2){
            $conn=mysqli_connect('localhost','root','','citycentre') or die(mqsql_error());
            mysqli_query($conn,"update customer set lin=1 where Email='$ne'");
            header('Location:lindex.php?sort=basic');
        }
    }
?>