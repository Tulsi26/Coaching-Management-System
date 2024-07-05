<?php
class dbc
{
    var $conn;
    function __construct()
    {
        $this->conn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "student");
    }
    function stdfee($id, $name, $course_fee,$paid_fee,$due_fee,$paid_fee_date)
    {
        $qry="insert into stdfee values($id, $name, $course_fee,$paid_fee,$due_fee,$paid_fee_date) values('E0001','roshni','13000','7000','6000','2023/12/23)";
        mysqli_query($this->conn, $qry);
    }
}
?>