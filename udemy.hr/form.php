<?php
if(isset($_POST['submit'])){
    $name = ['prika', 'mika','žbika','lika'];// sa if ćemo provjeriti dali je unešeno ime već pohranjeno, inače će se provjera vršiti iz baze
    $minimum = 5;
    $maximum = 10;
    
    $user= $_POST['user']; //najčešća praksa je da se uzme korisničko ime, proslijedi bazi i tamo se traži ima li podudaranja
    $password =$_POST['pass'];
    if(strlen($user) < 5){
        echo "username has to be longer than 5"; // korist od ovog načina, možemo predefinirati najkraću, najdužu šifru, kor ime itd
    }
    if(strlen($user)>$maximum){
        echo "username cannot be longer than 10";
    }

}
if(!in_array($user, $name)){
    echo "You don't have acc. Sign up first to access the page";  
}else {
    echo "Welcome ". $user;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="formProcess.php" method="post">
   <input type="text" name="user" id="" placeholder="Enter Username">
   <input type="text" name="pass" id="" placeholder="Enter Password">
   <input type="submit" value="predaj" name="submit">
   </form>

    
</body>
</html>