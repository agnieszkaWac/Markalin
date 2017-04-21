<?php
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
      <li class="current"><a href="glowna.php">Strona główna</a></li>
      <li><a href="produkty.php">Sklep</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
<div id="content">
  <div class="home">
    <div class="aside">
      <h1>Witaj na stronie Orchidaria</h1>
      <p>Witaj na stronie sklepu Orchidaria. Mamy w ofercie storczyki różnych gatunków. </p>
    </div>
    <div class="section">
      <div>
        <h2>Nasza oferta</h2>
        <p>Oferujemy państwu rośliny pochodzące ze sprawdzonych źródeł, tylko od doskonałych sprzedawców. </p>
        <p></p>
        <p></p>
      </div>
      <ul>
        <li class="first"> <a href="#"><img src="images/cake.jpg" alt=""></a> </li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
