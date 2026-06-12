<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>
    
    <?php
        $months = array(
            "January" => 31,
            "February" => 28,
            "March" => 31,
            "April" => 30,
            "May" => 31,
            "June" => 30,
            "July" => 31,
            "August" => 31,
            "September" => 30,
            "Octomber" => 31,
            "November" => 30,
            "December" => 31, 
        );
        foreach($months as $months => $days){
            echo $months . ' => ' . $days . "days<br>";
        }
    ?>
</body>
</html>