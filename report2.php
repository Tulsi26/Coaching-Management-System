<?php
$conn=mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "student");

$rs=mysqli_query($conn, "select * from stdreg");
$n=0;
while($rw=mysqli_fetch_row($rs))
{
    $n++;
    echo "<p>";
    echo "<br>$rw[0]";
    echo "<br>$rw[1]";
    echo "<br>$rw[2]";
    echo "<br>$rw[3]";
    echo "<br>$rw[4]";
    echo "<br>$rw[5]";
    echo "<br>$rw[6]";
    echo "<br>$rw[7]";
    
}
echo "<p><b>$n</b> record(s)";

?>