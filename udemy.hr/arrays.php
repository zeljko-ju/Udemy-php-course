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
    //sa echo možemo pozvati jednu vrijednost iz niza, a sa print r izlistatzi sve vrijednosti
    $numberList = [100,15,16,33,'Pero','<h3>Aloo!</h1>'];
    echo $numberList[0], '<br />';
    echo '<pre>';
    print_r($numberList);
    echo '</pre>';
    ?>
</body>
</html>