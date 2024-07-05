<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        h3{
            color:  rgb(37, 18, 123);
            
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            
        }

        th, td {
            border: 1px solid rgb(37, 18, 123); 
            padding: 10px;
            text-align: left;
            color:black;
        }

        th {
            background-color: rgb(215, 201, 154);
        }

        input[type="text"],input[type="varchar"], input[type="email"], input[type="date"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid black; 
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color:  rgb(37, 18, 123); 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgb(215, 201, 154);
            
        }
    </style>
</head>
<body>
    <center><h2><img src="mmm.jpg"width=150px hight=100px>
<h3>Empower Your Learning Journey: Join Our Classes Today</h3></center>

    <form action="adinsert.php" method="get">
        <table>
            <tr>
                <th>Field</th>
                <th>Details</th>
            </tr>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr> 
            <td><label for="name">Password:</label></td>
                <td><input type="varchar" id="pass" name="pass" required></td>      
    </tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob" required></td>
            </tr>
            <tr>
                <td><label for="branch">Subject Teacher:</label></td>
                <td><input type="text" id="branch" name="branch" required></td>
            </tr>
    
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="mobile">Mobile Number:</label></td>
                <td><input type="text" id="mobile" name="mobile" required></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea id="address" name="address" rows="4" required></textarea></td>
            </tr>
            <tr>
            
            <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
