function buttonlogin() {
    if(document.loginform.ap_email.value=="" || document.loginform.ap_pass.value==""){
        window.alert('Please Enter All Details');
        window.location.reload();
    }else{
        alert('Successfully logged in');
        window.location="index.php";
    }
}
function gohome(){
    window.location="index.php";
}
function gobacklogin(){
    window.location="login.php";
}
function signout(){
    <?php 
        $conn=mysqli_connect('localhost','root','','citycentre') or die(mqsql_error());
        mysqli_query($conn,"update customer set lin=0 where Email='$ne'");
    ?>
    alert('Signed Out Successfully!');
}
function makeacnt() {
    window.location="signup.php";
}
function fname_val(fname){
    p=/^[a-zA-Z]+$/;
    if(fname.value.length==0){
        window.alert('First Name should not be empty');
        return false;
    }
    if(fname.value.match(p)){
        return true;
    }else{
        window.alert('First Name should only contain Alphabets');
        fname.focus();
        return false;
    }
}
function lname_val(lname){
    p=/^[a-zA-Z]+$/;
    if(lname.value.length==0){
        window.alert('Last Name should not be empty');
        return false;
    }
    if(lname.value.match(p)){
        return true;
    }else{
        window.alert('Last Name should only contain Alphabets');
        uname.focus();
        return false;
    }
}
function dob_val(dob){
    check=/^[0-9][0-9][0-9][0-9][-][0-9][0-9][-][0-9][0-9]$/;
    if(dob.value.length==0){
        window.alert('Date of Birth should not be empty');
        return false;
    }
    if(dob.value.match(check)){
        return true;
    }else{
        window.alert('Date of Birth be of format YYYY-MM-DD');
        uname.focus();
        return false;
    }
}
function phone_val(pno,nx){
    x=pno.value.length;
    n=/^[0-9]/;
    if(x==0){
        window.alert('Phone No. should not be empty');
        return false;
    }
    if(x==nx){
        return true;
    }
    window.alert('Phone number should contain 10 numbers');
    pno.focus();
    return false;    
}
function email_val(email){
    e=/^([a-z]+[a-z0-9]*[@][a-z]+[.]+[a-z])/;
    if(email.value.length==0){
        window.alert('Email should not be empty');
        return false;
    }
    if(email.value.match(e)){
        return true;
    }else{
        window.alert('Enter a proper email');
        email.focus();
        return false;
    }
}
function pass_val(upass,nx,ny){
    y=upass.value.length;
    if(y==0){
        window.alert('User Password should not be empty');
        return false;
    }
    if(y>=nx && y<=ny){
        return true;
    }
    window.alert('Enter a password of length ' +nx+ ' to ' +ny+ ' characters');
    upass.focus();
    return false;  
}
function repass_val(upass,repass){
    if(upass.value==repass.value){
        return true;
    }
    window.alert('Please re-write the same password');
    repass.focus();
    return false;
}
function buttonsignup() {
    var fname = document.signupform.fname;
    var lname = document.signupform.lname;
    var dob = document.signupform.dob;
    var pno = document.signupform.phone;
    var email = document.signupform.mail;
    var upass = document.signupform.pass;
    var repass = document.signupform.repass;
    if(fname_val(fname)){
        if(lname_val(lname)){
            if(dob_val(dob)){
                if(phone_val(pno,10)){
                    if(email_val(email)){
                        if(pass_val(upass,8,15)){
                            if(repass_val(upass,repass)){
                                window.location.href="insertcust.php?cor=fname.value";
                            }
                        }
                    }
                }
            }
        }
    }
}
