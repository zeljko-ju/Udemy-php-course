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
$x= "vani";

function convert()
{
    global $x;
    $x="unutra";
}
echo $x, '<br />';
convert();
echo $x;
?>
</body>
</html>