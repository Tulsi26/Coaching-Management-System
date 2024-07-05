<?php
include "dbc.inc";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBranch = $_POST["branch"];

    
    $sql = "SELECT * FROM stdreg WHERE branch = '$selectedBranch'";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
        echo "<h2>Student Details for $selectedBranch:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Student Name</th><th>Semester</th><th>Enrollment ID</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["semester"] . "</td>";
            echo "<td>" . $row["e_id"] . "</td>";
            //echo "<td>" . $row["fee"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found for $selectedBranch";
    }
}
$conn->close();
?>
