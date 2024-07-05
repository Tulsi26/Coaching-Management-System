
       <?php
       $conn = mysqli_connect("localhost", "root", "");
       mysqli_select_db($conn, "student");
       
$e_id=$_GET["e_id"];
$status= $_GET["status"];
       $qry = "update stdreg set status=1 where e_id='$e_id'";
       
?>