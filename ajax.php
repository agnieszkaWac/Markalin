<?php
    include_once "user.php";
   
    session_start();
    if($_POST['action'] == 'dodaj_produkt') {
        $login = $_SESSION['username'];
        $produkt = $_POST['id'];
        User::dodaj($produkt, $login);
        //echo "Dodano produkt ".$produkt." przez ".$login;
        echo "Dodano produkt do listy!";
    }
    

?>