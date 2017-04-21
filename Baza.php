<?php

class Baza {

    private $mysqli; //uchwyt do BD

    public function __construct($serwer, $user, $pass, $sklep) {
        $this->mysqli = new mysqli($serwer, $user, $pass, $sklep);
        /* sprawdz połączenie */
        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n", $mysqli->connect_error);
            exit();
        }
        /* zmien kodowanie na utf8 */
        if ($this->mysqli->set_charset("utf8")) {
            //udało sie zmienić kodowanie
        }
    }

//koniec funkcji konstruktora

    function __destruct() {
        $this->mysqli->close();
    }

    public function select($sql, $pola) {
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola);
            $ile = $result->num_rows;
            $tresc.="<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc.="<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    @$tresc.="<td>" . $row->$p . "</td>";
                }
                $tresc.="</tr>";
            }
            $tresc.="</tbody></table>";
            $result->close();
        }
        return $tresc;
    }
    
    public function selectQuery($sql) {
        return $this->mysqli->query($sql)->fetch_object();
    }

    public function insert($sql) {
        if ($this->mysqli->query($sql)) {
            return true;
        }
        else{
            return false;
        }
    }

    public function delete($sql) {
        if ($this->mysqli->query($sql)) {
            return true;
        }
        else{
            return false;
        }
    }
    
    public function count($sql){
        if ($result = $this->mysqli->query($sql)){
            $ile = $result->num_rows;
        }
        return $ile;
    }
    
    
    
}
//koniec klasy Baza

