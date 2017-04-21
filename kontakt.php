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
      <li><a href="glowna.php">Strona główna</a></li>
      <li><a href="produkty.php">Sklep</a></li>
      <li class="current"><a href="kontakt.php">Kontakt</a></li>
      <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
<div id="content">
  <div class="home">
    <div class="aside">
        <h1><br/>Agnieszka Wac</h1>
      <p><h3>ul. Własna 22 </h3></p>
      <p><h3>20-172 Miasteczko</h3></p>
    </div>
    <div class="section">
      <div>
        <h2>Kontakt</h2>
        <p>agnieszka.wac@gmail.com </p>
        <p>tel. 512 485 978</p>
        <p>pon-pt 8.00-16.00</p>
      </div>
      <ul>
        <li class="first"> <a href="#"><img src="images/italian.jpg" alt=""></a> </li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
