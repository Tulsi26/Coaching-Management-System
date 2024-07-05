<?php
include_once("dbc.inc");
$rs=mysqli_query($conn, "select * from stdreg where status=0");
$nm=""; $e_id="";

while($rw=mysqli_fetch_row($rs))
{
    $name=$rw[0];
    $e_id=$rw[5];
                            //Query String
    //echo "<p><a href=details2.php?e_id=$e_id>$nm</a>";
    echo "<p>$name <a href=st_status.php?e_id=$e_id&status=1>APPROVE</a>";
    echo " <a href=br_search.php?e_id=$e_id&status=9> REJECT</a>";
}
//update stdreg set status=1 where e_id='$e_id'

?>