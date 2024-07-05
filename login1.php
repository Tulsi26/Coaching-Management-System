
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0px;
            padding: 0px;
            background-image: url("mmm2.jpg");
            background-size: cover;
            background-repeat: no-repeat; 
            height: 100vh;
           
        }
        form {
            max-width: 300px;
            margin: 0 auto;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            /* background-color: #000080; */
             background-color: #7B3F00; 

            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .font{
            font-size: 16px;
        }
        .head{
            font-size: 45px;
            color: #7B3F00; 
        }
    </style>
</head>
<body>
<?php

$s=$_GET["abc"];
        if(strcmp($s, "")!=0)
        {
            if(strcmp($s, "inv")==0)
            {
                echo "<font color=red>Invalid login credentials!</font>";
            }
            if(strcmp($s, "bahar")==0)
            {
                echo "<font color=blue>Thank you</font>";
            }
        }
?>

    <form id="loginForm" action="login2.php" method="GET">
       <h1 class="head">Login </h1>
        <label for="name"></label>
        <input type="text" placeholder="Enter your name" name="name" required>

        <label for="password"></label>
        <input type="password" placeholder="Enter your password" name="pass" required>

        <label for="email"></label>
        <input type="email" placeholder="Enter your email" name="email" required>

        <button type="submit">Login</button>
        <pre><a href=forget_pass.php class="font">Forget Password</a>      <a href="adminform.php" class="font">Sign Up</a></pre>
     
    </form>

</body>
</html>
