<?php
session_start();

include_once("dbc.inc");
extract($_GET);
$rs=mysqli_query($conn, "select * from admin  where name='$name' and pass='$pass'");
if($rw=mysqli_fetch_row($rs))
{
    $_SESSION["name"]=$name;
    $_SESSION["pass"]=$rw[1];
    $_SESSION["email"]=$rw[2];
    header("Location: dash.php");
}
else
{
   header("Location: login1.php?abc=inv");
}
?>