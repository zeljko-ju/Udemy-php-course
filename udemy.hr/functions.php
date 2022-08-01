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
        function saySomething()
        {
            echo "hello";
        }
        //saySomething();
    //funkcije možemo stavljati jednu unutar druge

   /* function calculate(){
        echo 456 +345;
    }
    function init(){
        saySomething();
        calculate();
    
    }
    //init();
     
    function pozdravi($poruka)
    {echo $poruka;

    }
    //pozdravi("pozdrav svima!");
*/
    function calculate($number1, $number2)
   {        $sum=$number1 + $number2;
    echo $sum;

    }

    calculate(13,13);
    echo '<hr />';
    
    function addNumbers($number1, $number2)
    {
        $sum=$number1 +$number2;
        return  $sum;
    }
    $result = addNumbers(32,24);
    echo $result, '<br>';
    $result= addNumbers(100, $result); //u ovom slučaju dobivamo zbroj 100 + predhodni zbroj od rezultata
    echo $result;
    ?>
</body>
</html>