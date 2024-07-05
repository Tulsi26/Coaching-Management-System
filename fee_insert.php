<center>
       <?php
       $conn = mysqli_connect("localhost", "root", "");
       mysqli_select_db($conn, "student");
       
$id=$_POST["id"];
$name=$_POST["name"];
$course_fee=$_POST["course_fee"];

$paid_fee=$_POST["paid_fee"];
$due_fee=$_POST["due_fee"];
$paid_fee_date=$_POST["paid_fee_date"];

$qry="insert into stdfee values('$id', '$name', '$course_fee','$paid_fee','$due_fee','$paid_fee_date')";
echo $qry;
mysqli_query($conn, $qry);
?>
<center>
    Congratulations</b>!!
    <p> successfully registered
