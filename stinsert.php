<center>
<?php
       $conn = mysqli_connect("localhost", "root", "");
       mysqli_select_db($conn, "student");
       
$name=$_GET["name"];
$pass = $_GET["pass"];
$dob=$_GET["dob"];
$branch=$_GET["branch"];

$semester=$_GET["semester"];
$st_id=$_GET["st_id"];
$email=$_GET["email"];

$mobile=$_GET["mobile"];
$address = $_GET["address"];


$rs=mysqli_query($conn, "select * from stdreg where name='$name'");
if($rw=mysqli_fetch_row($rs))
{
    
    echo "<center>Already exists";
}
else
{
       $qry="insert into student values('$name','$pass','$dob', '$branch','$semester','$st_id','$email','$mobile','$address',1)";
        echo $qry;
        mysqli_query($conn, $qry);
        echo "<center> Congratulations</b>!!
    <p> successfully registered";
}

?>



