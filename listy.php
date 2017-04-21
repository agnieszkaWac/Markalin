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
<script type="text/javascript"> 
    function dodaj($id) {
      $.ajax({
           type: "POST",
           url: 'ajax.php',
           data:{action:'dodaj_produkt', id:$id},
           success:function(html) {
             alert(html);
           }
      });
 }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
    <table class="table table-striped" >
      <tr>
          <th>Nazwa</th>
          <th>Opis</th>
          <th>Cena</th>
          <th>Dodaj do listy</th>
      </tr>
      <?php
          include_once "Baza.php";
    
          //$ob = new Baza("localhost", "root", "", "sklep");
          $cat = $_GET["cat"];
          //$tabela =  $ob->select("SELECT `nazwa`, `opis`, `cena` FROM produkt WHERE `id_kategoria`='$cat' ORDER BY 1",array("nazwa","opis","cena"));
          $server = mysqli_connect("localhost", "root", "", "sklep"); 
          $query = mysqli_query($server, "SELECT `id_produkt`, `nazwa`, `opis`, `cena` FROM produkt WHERE `id_kategoria`='$cat' ORDER BY 1");
          while ($row = mysqli_fetch_array($query)) {
             echo "<tr>";
             echo "<td>".$row['nazwa']."</td>";
             echo "<td>".$row['opis']."</td>";
             echo "<td>".$row['cena']."</td>";
             echo "<td><button class='btn btn-primary btn-xs' onclick='dodaj(".$row['id_produkt'].")'>Dodaj</button></td>";
             echo "</tr>";
          }   
      ?>
    </table>
</div>
</body>
</html>
