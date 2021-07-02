<!DOCTYPE HTML>
<html>
    <head><title>REGISTRATION FORM</title></head>
<body bgcolor="pink">
<center><h2>REGISTRATION FORM </h2></center>
<br>
<?php
include("DBConnection.php");
$id=$_POST["id"];
$name=$_POST["name"];
$age=$_POST["age"];
$address=$_POST["address"];
$date=$_POST["date"];
$dname=$_POST["dname"];
$covid=$_POST["covid"];
$query = "insert into patient(id,name,age,address,date,dname,covid) values('$id','$name','$age','$address','$date','$dname','$covid')"; 
$result = mysqli_query($db,$query);

?>
<h3> PATIENT INFORMATION  INSERTED SUCCESSFULLY </h3>
<a href="first.php.php"> CLICK HERE TO CONTINUE </a>
</body>
</html>
