<!DOCTYPE HTML>
<html>
<body bgcolor="pink">
<center><h2>LIST</h2></center>
<br>
<?php
include("DBConnection.php");
$idsearch = $_REQUEST["idsearch"];
$dsearch = $_REQUEST["dsearch"];

$query ="select id,date from patient where id like '%$idsearch%' and date like '%$dsearch%'";
$result = mysqli_query($db,$query);
  if (mysql_num_rows($result) != 0)
  {
      echo "ALREADY VISITED ......DETAILS ARE......";
      ?>
      <table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ID </th>
<th> NAME </th>
<th> AGE </th>
<th> ADDRESS </th>
<th> DATE </th>
<th> DOCTOR NAME </th>
<th> MEDICINE </th>

</tr>
<?php
      while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row["id"];?> </td>
<td><?php echo $row["name"];?> </td>
<td><?php echo $row["age"];?> </td>
<td><?php echo $row["address"];?> </td>
<td><?php echo $row["date"];?> </td>
<td><?php echo $row["dname"];?> </td>
<td><?php echo $row["mname"];?> </td>
</tr>
<?php
  }

else
?>
<form action="lastconnection.php" method="post">
            <table align="center" bgcolor="white">
                <tr><td>PATIENT ID</td>
                <td><input type="text" name="id" size="58"></td></tr>
                <tr><td>PATIENT NAME</td>
                <td><input type="text" name="name" size="58"></td></tr>
                <tr><td>AGE</td>
                <td><input type="text" name="age" size="58"></td></tr>
                <tr><td>ADDRESS</td>
                <td><input type="text" name="address" size="58"></td></tr>
                <tr><td>DATE OF ADMISSION</td>
                <td><input type="text" name="date" size="58"></td></tr>
                <tr><td>DOCTOR'S NAME</td>
                <td><input type="text" name="dname" size="58"></td></tr>
                <tr><td>COVID RESULT</td>
                <td><input type="text" name="covid" size="58"></td></tr>
                <tr></tr>
                <tr><td><input type="submit" value="SUBMIT"></td>
                <td><input type="reset" value="RESET">
</table></form>
</table>
</body>
</html>
