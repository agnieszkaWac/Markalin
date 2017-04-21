<?php
    include_once 'user.php';
    include_once 'products.php';
        
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: zaloguj.php");
    }
     
?>
<!DOCTYPE html>
<html>
<head>
<title>Orchidaria</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div id="header">
  <div>
    <div>
      <div id="logo"> <a href="#"><img src="images/logo.gif" alt=""></a> </div>
      <div>
        <div> <a> Witaj <?php echo ($_SESSION['username']); ?></a> <a href="zamowienie.php">Moje zamówienie</a> <a href="wyloguj.php" class="last">Wyloguj</a> </div>
      </div>
    </div>
    <ul>
      <li><a href="glowna.php">Strona główna</a></li>
      <li><a href="produkty.php">Sklep</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
    </ul>
      <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
    <div id="content" style="width:940px; margin-top: 20px; margin-left: auto; margin-right: auto">
        <form action="zamowienie.php" method="post">
            <table class="table table-striped" >
              <tr>
                  <th>Gatunek</th>
                  <th>Nazwa</th>
                  <th>Opis</th>
                  <th>Cena</th>
                  <th>Ilość</th>
              </tr>
              <?php
                  include_once "Baza.php";
                  $login = $_SESSION['username'];
                  $server = mysqli_connect("localhost", "root", "", "sklep"); 
                  $query = mysqli_query($server, "SELECT `gatunek`, `nazwa`, p.`opis`, `cena`, `ilosc` FROM produkt p JOIN pozycja z on p.`id_produkt` = z.`id_produkt` JOIN uzytkownik u ON z.login = u.login JOIN kategoria k on p.`id_kategoria` = k.`id_kategoria` WHERE u.`login`='$login' ORDER BY 1");
                  while ($row = mysqli_fetch_array($query)) {
                     echo "<tr>";
                     echo "<td>".$row['gatunek']."</td>";
                     echo "<td>".$row['nazwa']."</td>";
                     echo "<td>".$row['opis']."</td>";
                     echo "<td>".$row['cena']."</td>";
                     echo "<td>".$row['ilosc']."</td>";
                     echo "</tr>";
                  }   
              ?>
            </table>
        </form>
    </div>
    
        
        ?>
    
</body>
</html>
