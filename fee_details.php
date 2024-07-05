<?php
include "dbc.inc";
if (isset($_POST['search'])) {
    $student_name = $_POST['student_name'];
    $query = "SELECT * FROM stdfee WHERE name LIKE '%$student_name%'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row['name'] . "<br>";
            echo "Course Fee: " . $row['course_fee'] . "<br>";
            echo "Paid Fee: " . $row['paid_fee'] . "<br>";
            echo "Due Fee: " . $row['due_fee'] . "<br>";
            echo "Paid Fee Date: " . $row['paid_fee_date'] . "<br>";
        }
    } else {
        echo "No records found for the given name.";
    }
}
?>
