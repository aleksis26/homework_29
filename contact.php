<?php 
$a = $_POST ["password"];
$b = $_POST ["password_confirm"];

if ($a == $b) {
    echo $_POST["name"], " კეთილი იყოს თქვენი მობრძანება!";
} else {
    echo "პაროლი არასწორია";
}

?>

