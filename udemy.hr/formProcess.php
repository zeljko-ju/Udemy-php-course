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