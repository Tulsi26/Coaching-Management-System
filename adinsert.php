<?php


include_once("dbc.inc");
extract($_GET);
$rs = mysqli_query($conn, "select * from admin where name = '$name'");
if($rw= mysqli_fetch_row($rs)){
   echo "<center>Already exists";
}
else{
$qry="insert into admin values('$name','$pass','$email')";
mysqli_query($conn,$qry);
echo "<center>Congratulations,<br><b> You have been successfully registered! </b></center>";
}
?>