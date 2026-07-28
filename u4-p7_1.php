<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","studentdb");
        if($conn){
            echo "database connected successfully. <br>";
        }
        else{
            die ("connection failed".$conn->connect_error());
        }
        $sql = "UPDATE students2 
            SET name='meet',
            email='meet@gmail.com',
            city='jetpur',
            WHERE id=2";

        if($conn->query($sql))
        {
            echo "<br> Record update successfully.";
        }
        else{
            echo "Error";
        }

        $conn->close();
    ?>
</body>
</html>