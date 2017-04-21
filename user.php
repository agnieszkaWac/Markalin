<?php

include_once "Baza.php";

class User {
    
    public $login;
    public $haslo;
    public $email;
    public $nazwisko;
    public $imie;
    public $ulica;
    public $nr_dom;
    public $nr_mieszk;
    public $kod_pocz;
    public $miasto;
    
    function __construct($login,$haslo,$email,$nazwisko,$imie,$ulica,$nr_dom,$nr_mieszk,$kod_pocz,$miasto ) {
        $this->login=$login;
        $this->haslo=$haslo;
        $this->email=$email;
        $this->nazwisko=$nazwisko;
        $this->imie=$imie;
        $this->ulica=$ulica;
        $this->nr_dom=$nr_dom;
        $this->nr_mieszk=$nr_mieszk;
        $this->kod_pocz=$kod_pocz;
        $this->miasto=$miasto;  
    }

    function rejestruj() {

        $blad = false;
        $errors = "Niepoprawne dane: \\n";
        $opt = array("options" => array("regexp" => "/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{2,12}$/"));
        if (!filter_var($_REQUEST['login'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $login = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['login'])))); 
        } else {
              $errors = $errors."Błędny login \\n";
              $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{6,20}$/"));
        if (!filter_var($_REQUEST['haslo'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $haslo = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['haslo']))));

        } else {
              $errors = $errors."Hasło powinno się składać z 6-20 liter i/lub cyfr \\n";
              $haslo = "";
              $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{2,}$/"));
        if (!filter_var($_REQUEST['nazwisko'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $nazwisko = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['nazwisko']))));

        } else {
              $errors = $errors."Niepoprawne nazwisko \\n";
                $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{2,}$/"));
        if (!filter_var($_REQUEST['imie'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $imie = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['imie']))));

        } else {
              $errors = $errors."Niepoprawne imie \\n";
                $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[A-Z][a-z]{2,}$/"));
        if (!filter_var($_REQUEST['ulica'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $ulica = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['ulica']))));

        } else {
              $errors = $errors."Niepoprawna ulica \\n";
                $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[A-Z][a-z]{2,}$/"));
        if (!filter_var($_REQUEST['miasto'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $miasto = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['miasto']))));

        } else {
              $errors = $errors."Niepoprawne miasto\\n";
                $blad = true;
        }


        if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $email = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['email']))));

        } else {
              $errors = $errors."Niepoprawny email \\n";
                $blad = true;
        }


        $opt = array("options" => array("regexp" => "/^[0-9]*$/"));
        if (!filter_var($_REQUEST['nr_dom'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $nr_dom = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['nr_dom']))));

        } else {
            $errors = $errors."Niepoprawny numer domu \\n";
            $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[0-9]*$/"));
        if (!filter_var($_REQUEST['nr_mieszk'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $nr_mieszk = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['nr_mieszk']))));

        } else {
            $errors = $errors."Niepoprawny numer mieszkania \\n";
            $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^([0-9]{2})(-[0-9]{3})?$/i"));
        if (!filter_var($_REQUEST['nr_mieszk'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $kod_pocz = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['kod_pocz']))));

        } else {
            $errors = $errors."Niepoprawny kod pocztowy \\n";
            $blad = true;
        }

        $id_uzytkownik = NULL;
        $data = date("Y-m-d");


        if (!$blad) {
              $ob = new Baza("localhost", "root", "", "sklep");
              $spr = $ob->count("SELECT `login` FROM uzytkownik WHERE `login`='$login'");
              echo "asjd".$spr;
              if($spr == 0){
                    $ob->insert("INSERT INTO uzytkownik (`id_uzytkownik`,`login`,`haslo`,`email`,`imie`,`nazwisko`, `ulica`, `nr_domu`, `nr_mieszkania`, `kod_pocztowy`, `miasto`, `data_rejestracji`) VALUES (NULL, '$login','$haslo','$email','$imie','$nazwisko','$ulica','$nr_dom','$nr_mieszk','$kod_pocz','$miasto', '$data')");
                    header("Location: zarejestrowano.php");
              }else {
                    echo "<script type='text/javascript'>alert('Przepraszamy, użytkownik o podanym loginie jest już w systemie!');</script>";
              }
        }
        else{
             echo "<script type='text/javascript'>alert('$errors');</script>";
        }
    }

    function zaloguj(){

        $blad = false;
        $errors = "Wystąpił błąd! \\n";
        $opt = array("options" => array("regexp" => "/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{2,12}$/"));
        if (!filter_var($_REQUEST['login'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $login = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['login'])))); 
        } else {
              $errors = $errors."Błędny login! \\n";
              $blad = true;
        }

        $opt = array("options" => array("regexp" => "/^[0-9a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{6,20}$/"));
        if (!filter_var($_REQUEST['haslo'], FILTER_VALIDATE_REGEXP, $opt) === false) {
            $haslo = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['haslo']))));
        }else {
              $errors = $errors."Hasło powinno mieć długość 6-20 znaków i zawierać litery oraz cyfry! \\n";
              $blad = true;
        }

        if (!$blad) {
              $ob = new Baza("localhost", "root", "", "sklep");
              $usser = $ob->count("SELECT `login` FROM uzytkownik WHERE `login`='$login'");
              $pass = $ob->count("SELECT `haslo` FROM uzytkownik WHERE `login` = '$login' AND `haslo`='$haslo'");
              echo $usser.$pass;

              if($usser == 0){
                    echo "<script type='text/javascript'>alert('Przepraszamy, nie ma takiego użytkownika...');</script>";
              }else if ($pass == 0){
                    echo "<script type='text/javascript'>alert('Błędne hasło!');</script>";
              }else{
                  echo "<script type='text/javascript'>alert('$errors');</script>";
                  session_set_cookie_params(0);
                  session_start();
                  $_SESSION['username'] = $login;
                  header("Location: glowna.php");
              }
        }
        else{
             echo "<script type='text/javascript'>alert('$errors');</script>";
        }

    }

    function wyloguj(){
        session_start(); 
        session_destroy(); 
        header("location:zaloguj.php");
        exit();
    }


    function dodaj($item, $login){
        $ob = new Baza("localhost", "root", "", "sklep");
        $res = $ob->selectQuery("SELECT ilosc FROM `pozycja` WHERE `login`='$login' AND id_produkt='$item'");
        if(!$res) {
            $ob->insert("INSERT INTO `pozycja` (`id_pozycja`, `id_produkt`, `ilosc`, `login`) VALUES (NULL, '$item', '1', '$login')");
        }else{
            $inc = $res->ilosc + 1;
            $ob->insert("UPDATE `pozycja` SET `ilosc`=".$inc." WHERE `login`='$login' AND id_produkt='$item'");
        }
    }
    
    function usun($item, $login){
        $ob = new Baza("localhost", "root", "", "sklep");
        echo "<script type='text/javascript'>alert('$item');</script>";
        echo "<script type='text/javascript'>alert('$login');</script>";
        $res = $ob->selectQuery("SELECT ilosc FROM `pozycja` p JOIN `produkt` k ON p.`id_produkt` = k.`id_produkt` WHERE `login`='$login' AND nazwa='$item'");
        $ob->select("SELECT `id_pozycja` FROM `pozycja` WHERE `login`='$login' AND nazwa='$item'", array($poo));
        echo "<script type='text/javascript'>alert('$res');</script>";
        echo "<script type='text/javascript'>alert('$poo');</script>";
        echo "dasda";
        echo $poo;
        if($res == '1') {
            $ob->delete("DELETE FROM `pozycja` WHERE `pozycja`.`id_pozycja`='$poo'"); 
        }else{
            $inc = $res->ilosc - 1;
            $ob->insert("UPDATE `pozycja` SET `ilosc`=".$inc." WHERE `login`='$login' AND nazwa='$item'");
        }
    }
}
