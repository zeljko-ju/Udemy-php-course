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
    $i = 0;
       while($i<10){
        echo "alo alo!", '<br />';
        $i= $i+1; // sa ovom naredbom spriječavamo beskonačnu petlju! dodajemo brojač gore datoj vrijednosti te će program brojiti od 0 do zadanog broja
        $i++//isto kao i ovo gore
        }

    ?>
</body>
</html>