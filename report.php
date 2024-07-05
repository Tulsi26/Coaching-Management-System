<?php
$conn=mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "student");

$rs=mysqli_query($conn, "select * from  branch");
$n=0;
while($rw=mysqli_fetch_row($rs))
{
    $n++;
    echo "<rw>";
    echo "<br>$rw[0]";
    echo "<br>$rw[1]";
    echo "<br>$rw[2]";
}
echo "<p><b>$n</b> record(s)";
?>