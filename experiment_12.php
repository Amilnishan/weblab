<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        body {
            background-color: #f1fa8e;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        div {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 50%;
            padding: 20px;
            margin-top: 50px;
        }
        form {
            text-align: left;
        }
        h2 {
            color: #444;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
        input[type="reset"] {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <center>
        <div>
            <h2>Registration Form</h2>
            <hr><br>
            <form method="post" name="myform" action="#">
                &emsp;Name &emsp;&nbsp;&nbsp;<input type="text" maxlength="30" name="name"><br>
                Email  <input type="email" name="mail"><br>
                Mobile  <input type="tel" name="mob"><br>
                User name <input type="text" name="user"><br>
                Password  <input type="password" name="pass"><br>
                <input type="submit" value="Submit" name="submit"><br><br>
                <input type="reset" value="Reset">
            </form>
        </div>
    </center>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['mail'];
            $mobile = $_POST['mob'];
            $user = $_POST['user'];
            $password = $_POST['pass'];

            if(empty($name)) {
                echo "<script> alert('Enter Name!!')</script>";
            } else if(!preg_match("/^[a-zA-Z]*$/", $name)) {
                echo "<script>alert('Enter Valid Name!!')</script>";
            } else if(empty($email)) {
                echo "<script>alert('Enter Email!!')</script>";
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Enter valid Email!!')</script>"; 
            } else if(empty($mobile)) {
                echo "<script>alert('Enter Mobile No!!')</script>";
            } else if(!preg_match("/^[0-9]*$/", $mobile)) {
                echo "<script>alert('Enter Valid Mobile No!!')</script>";
            } else if(strlen($mobile) != 10) {
                echo "<script>alert('Enter Valid Mobile No!!')</script>";
            } else if(empty($user)) {
                echo "<script>alert('Enter Username!!')</script>";
            } else if(empty($password)) {
                echo "<script>alert('Enter Password!!')</script>";
            } else if(strlen($password) < 8) {
                echo "<script>alert('Password must contain at least 8 characters!!')</script>";
            } else {
                echo "<script>alert('Registration Successful!')</script>";
            }
        }
    ?>
</body>
</html>
