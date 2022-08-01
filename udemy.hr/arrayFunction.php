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
        $list = [ 12,53,43,22323,123,566,7,446,32];

        echo max($list), '<br />';//najveća vrijednost u nizu

        echo min($list), '<br />';// najmanja vrijednost
        sort($list); // slaže nam vrijednosti od najmanje prema najvećoj
        print_r($list); //prikazuje sve vrijednosti niza uz njihov index

        


    ?>
</body>
</html>