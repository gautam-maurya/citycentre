<?php

$firstname=$lastname=$dob=$phone=$email=$pass=$repass=null;
$firstnameErr=$lastnameErr=$dobErr=$phoneErr=$emailErr=$passErr=$repassErr=null;
$c=0;
function test_input($data){    
    $data=trim($data);             
    $data=stripslashes($data);      
    $data=htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD']=="POST"){    
    if (empty($_POST["fname"])){             
        $firstnameErr="First Name is Required";        
    } else {
        $firstname=test_input($_POST["fname"]);          
        if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {  
        $firstnameErr = "Only letters allowed";                    
        }
        else{
            $c=$c+1;
        }
    }
    if (empty($_POST["lname"])){             
        $lastnameErr="Last Name is Required";        
    } else {
        $lastname=test_input($_POST["lname"]);          
        if (!preg_match("/^[a-zA-Z]*$/",$lastname)) { 
        $lastnameErr = "Only letters allowed";
        }else{
            $c=$c+1;
        }
    }
    if (empty($_POST["dob"])){             
        $dobErr="Date of Birth should not be empty";        
    } else {
        $dob=test_input($_POST["dob"]);          
        if (!preg_match("/^[0-9][0-9][0-9][0-9][-][0-9][0-9][-][0-9][0-9]$/",$dob)) { 
        $dobErr = "Date of Birth should be of format YYYY-MM-DD";
        }else{
            $c=$c+1;
        }
    }
    if (empty($_POST["phone"])){             
        $phoneErr="Phone no. should not be empty";        
    } else {
        $phone=test_input($_POST["phone"]);          
        if (strlen((string)$phone)!=10) { 
        $phoneErr = "Phone no. should contain 10 numbers";
        }else{
            $c=$c+1;
        }
    }
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
            if($ne==$email){
                $emailErr="Email already in use!";    
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
            $c=$c+1;
        }
    }
    if (empty($_POST["repass"])){             
        $repassErr="Password should be re-entered";        
    } else {
        $repass=test_input($_POST["repass"]);          
        if ($repass!=$pass) { 
        $repassErr = "Please enter the same password as above";
        }else{
            $c=$c+1;
        }
    }
    
    if($c==7){
            $conn=mysqli_connect('remotemysql.com','VWKzbiddv8','ohh02PJ6J6','VWKzbiddv8') or die(mqsql_error());
            $enc=convert_uuencode($pass);
            $rowSQL=mysqli_query($conn,"select max(Cid) as max from customer;");
            $row=mysqli_fetch_array($rowSQL);
            $nid=$row['max']+1;
            $query="insert into customer(Cid,Fname,Lname,DOB,Email,PhoneNo,Password,lin) values($nid,'$firstname','$lastname','$dob','$email','$phone','$enc',0)";
            mysqli_query($conn,$query);
            header('Location:login.php');
    }
}
?>
