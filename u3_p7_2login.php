<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $conn= new mysqli("localhost:3307","root"," ","logindb");
        $username=$_POST['Username'];
        $password=$_POST['Password'];
        $sql = "SELECT * FROM users
                WHERE Username='$username'
                AND Password='$password'";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION["Username"]=$username;
            header("Location: u3_p7_3home.php");
            exit();
        }
        else
        {
            echo"Username or password is incorrect";
        }
    ?>
</body>
</html>