<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            Enter Your Name:
            <input type="text" name="name" required>
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </center>
    <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            if($_COOKIE['username']==$name)
            {
                echo "<h2> Welcome, ".$name."!</h2>";
                echo "<h2> You are a Repeated User.</h2>";
            }
            else
            {
                setcookie("username",$name,time()+(30*24*60*60),"/");
                echo "<h2> Welcome, ".$name."!</h2>";
                echo "<h2> You are a new User.</h2>";
            }
        }
    ?>
</body>
</html>