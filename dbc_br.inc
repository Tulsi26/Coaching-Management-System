<?php
class dbc
{
    var $conn;
    function __construct()
    {
        $this->conn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "student");
    }
    function admin($branch_id, $branch_name, $course_fee)
    {
        $qry="insert into admin values ('$branch_id','$branch_name','$course_fee')";
        mysqli_query($this->conn, $qry);
    }

}
?>