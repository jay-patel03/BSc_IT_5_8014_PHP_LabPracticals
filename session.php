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
        if(isset($_POST['create']))
        {
            $_SESSION['username'] =$_POST['username'];
            echo"<h2> Session Created..! username:" .$_SESSION['username']."</h2>";
        }

        if(isset($_POST['destroy']))
        {
            session_unset();
            session_destroy();

            echo"<h1> Session Destroy</h2>";
        }

        echo" <br> <a href='session.html'> Go To Back</a>";
    ?>
</body>
</html>