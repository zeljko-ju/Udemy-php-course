<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //foreach radi samo na nizovima(array)
    $numbers = [5,4,7,5,3,7,9,22];
    
    foreach($numbers as $key => $number){
        echo $key,'=>', $number, '<br />';

    }
    ?>
</body>
</html>