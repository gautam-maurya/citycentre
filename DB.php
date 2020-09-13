<?php
    $servername = 'remotemysql.com';
    $username = 'VWKzbiddv8';
    $password = 'ohh02PJ6J6';
    $dbname = 'VWKzbiddv8';
    $conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysql_error());
    echo "Connected Successfully";
    $password='gautam@123';
    $enc=convert_uuencode($password);
    $query15="insert into customer(Cid,Fname,Lname,DOB,Email,PhoneNo,Password,lin) values(0001,'Gautam','Maurya','1999-06-30','gautammaurya552@gmail.com',9004820117,'$enc',0)";
    mysqli_query($conn,$query15) or die(mysql_error());
    echo "Data Successfully Inserted";
    $query="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0001,'Mi','Redmi Note 5 Pro',4,64,128,5.99,'12MP+5MP','20MP',4000,'Qualcomm Snapdragon 636',14999,1,500,10)";
    mysqli_query($conn,$query) or die(mysql_error());
    $query1="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0002,'Mi','Redmi Note 5',4,64,128,5.99,'12MP','5MP',4000,'Qualcomm Snapdragon 625',11999,1,500,10)";
    mysqli_query($conn,$query1) or die(mysql_error());
    $query2="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0003,'Mi','Redmi 4A',3,32,128,5,'13MP','5MP',3120,'Qualcomm Snapdragon 425',6999,1,500,10)";
    mysqli_query($conn,$query2) or die(mysql_error());
    $query3="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0004,'Mi','Mi A2',4,64,256,5.99,'12MP+20MP','20MP',3010,'Qualcomm Snapdragon 660 AIE',16999,1,500,10)";
    mysqli_query($conn,$query3) or die(mysql_error());
    $query4="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0005,'Mi','Poco F1',6,64,128,6.18,'12MP+5MP','20MP',4000,'Qualcomm Snapdragon 845',20999,1,500,10)";
    mysqli_query($conn,$query4) or die(mysql_error());
    $query5="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0006,'Mi','Redmi 5A',2,16,128,5,'13MP','5MP',3000,'Qualcomm Snapdragon 425',5999,1,500,10)";
    mysqli_query($conn,$query5) or die(mysql_error());
    
    $query6="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0007,'OnePlus','OnePlus 5',8,128,0,5.5,'16MP+20MP','16MP',3000,'Qualcomm Snapdragon 835',32999,1,500,10)";
    mysqli_query($conn,$query6) or die(mysql_error());
    $query7="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0008,'OnePlus','OnePlus 5t',6,64,0,6.01,'16MP+20MP','16MP',3300,'Qualcomm MSM8998 Snapdragon 835',33999,1,500,10)";
    mysqli_query($conn,$query7) or die(mysql_error());
    $query8="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0009,'OnePlus','OnePlus 6',8,128,0,6.28,'16MP+20MP','16MP',3300,'Qualcomm MSM8998 Snapdragon 835',35999,1,500,10)";
    mysqli_query($conn,$query8) or die(mysql_error());
    
    $query10="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0010,'Honor','Honor 7A',3,32,256,5.7,'13MP+2MP','8MP',3000,'Qualcomm Snapdragon Octa Core',8999,1,500,10)";
    mysqli_query($conn,$query10) or die(mysql_error());
    $query11="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0011,'Honor','Honor 9 Lite',3,32,256,5.65,'13MP+2MP','13MP+2MP',3000,'Kirin 659',10999,1,500,10)";
    mysqli_query($conn,$query11) or die(mysql_error());
    $query12="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0012,'Honor','Honor 9i',4,64,128,5.9,'16MP+2MP','13MP+2MP',3340,'Kirin 659 Octa Core',15999,1,500,10)";
    mysqli_query($conn,$query12) or die(mysql_error());
    $query13="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0013,'Honor','Honor 10',6,128,0,5.84,'24MP+16MP','24MP',3400,'Kirin 970',32999,1,500,10)";
    mysqli_query($conn,$query13) or die(mysql_error());
    $query14="insert into mobiles(ID,Model,Name,RAM,ROM,Exmem,Display,Backcam,Frontcam,Battery,Processor,Price,Warranty,Quantity,Reorder) values(0014,'Honor','Honor 9N',3,32,256,5.84,'13MP+2MP','16MP',3000,'Kirin 659',8999,1,500,10)";
    mysqli_query($conn,$query14) or die(mysql_error());
    echo "Data Successfully Inserted";
?>