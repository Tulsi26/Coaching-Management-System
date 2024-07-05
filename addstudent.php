<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <style>
        body{
            background-color: green;
        }
        .main{
            padding:500px;
        }
        .data{
            padding: 10px;
            text-align:center;
            margin-left: 40%;
            width:9%;
            cellpadding: 10px;
        }
    </style>
    <form method="get" action="stinsert.php">
      <u> <center> <h1>Admission of Students </h1></center></u>
        <table align="center" width="40%" border="0" style="border-collapse:collapse" cellpadding="10" class="main">
            <tr>
                <td>Name</td>
                <td><input type ="text" name="name" placeholder="Ex: Tulsi Dewangan" maxlength="20" required=""></td>
            </tr>
 
            <tr>
                <td>Password</td>
                <td><input type ="text" name="pass"></td>
            </tr>
         
            <tr>
                <td>Date of Birth</td>
                <td><input type ="date" name="dob"></td>
            </tr>   

            <tr>
                <td>Branch</td>
                <td><input type ="text" name="branch" maxlength="20"></td>
            </tr>

            <tr>
                <td>Semester</td>
                <td><input type ="text" name="semester" maxlength="20"></td>
            </tr>

            <tr>
                <td>Student Id </td>
                <td><input type ="text" name="st_id"></td>
               
            

            <tr>
                <td>Email</td>
                <td><input type ="text" name="email"></td>
            </tr>

            <tr>
                <td>Mobile No.</td>
                <td><input type ="text" name="mobile"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type ="text" name="address"></td>
            </tr>
          

            
        
        </table>
      <pre>  <button type="submit" class="data">Submit</button>

  <button type="submit" class="data">Reset</button></pre>
    </form>
    
</body>
</html>