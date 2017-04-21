<?php

include_once "Baza.php";

class Products {
    
    public $id_produkt;
    public $id_kategoria;
    public $nazwa;
    public $cena;
    public $opis;
    
    
    function __construct($id_produkt,$id_kategoria,$nazwa,$cena,$opis) {
        $this->id_produkt=$id_produkt;
        $this->id_kategoria=$id_kategoria;
        $this->nazwa=$nazwa;
        $this->cena=$cena;
        $this->opis=$opis;
        
    }
    
    function wybor ($cat){
        //redirect("Location: listy.php?cat=".$cat);
        header("Location: listy.php?cat=".$cat);
        exit();
    }
    
}