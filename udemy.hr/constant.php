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
        $number = 10;

        echo $number;


        //za konstante trebamo funkcije
        define("NAME", 1000);
        const NAME2 = 1000; //noviji način definiranja konstante
        echo NAME, '<br />';
        echo NAME2;
        //sa novim načinom definiranja konstante možemo prizvati niz:
        const ZIVOTINJE = ['pas'=>'ovčar'];
        print_r(ZIVOTINJE);
        echo ZIVOTINJE['pas'];


        //sa varijablama možemo što hoćemo, mijenjati im tip podatka, vrijednost itd
        //sa konstantama ne možemo!

    ?>
</body>
</html>