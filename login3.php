<?php
session_start();

$name=$_SESSION["name"];
if(strcmp($name, "")==0)
{
    echo "<center>Please do login first!";
}
else
{
    $name=$_SESSION["name"];
    echo "<center>Welcome <b>$name</b>";
    echo "<p><a href=logout.php>Sign out</a>";
}
?>