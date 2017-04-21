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
      <li class="current"><a href="produkty.php">Sklep</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
    </ul>
      <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
<div id="content">
<form action="produkty.php" method="get">
  <div>
    <ul>
      <li>
        <div>
          <div>
            <h2><a>Phalaenopsis</a></h2>
            <p></p>
            <a><input type="submit" name="phalaenopsis" value="Zobacz" class="submitbtn"></a> </div>
          <a href="#"><img src="images/special-treats.jpg" alt=""></a> </div>
      </li>
      <li>
        <div>
          <div>
            <h2><a>Paphiopedilum</a></h2>
            <p></p>
            <a><input type="submit" name="paphiopedilum" value="Zobacz" class="submitbtn"></a> </div>
          <a href="#"><img src="images/tarts.jpg" alt=""></a> </div>
      </li>
      <li>
        <div>
          <div>
            <h2><a>Cymbidium</a></h2>
            <p></p>
            <a><input type="submit" name="cymbidium" value="Zobacz" class="submitbtn"></a> </div>
          <a href="#"><img src="images/cakes.jpg" alt=""></a> </div>
      </li>
      <li>
        <div>
          <div>
            <h2><a>Dendrobium</a></h2>
            <p></p>
            <a><input type="submit" name="dendrobium" value="Zobacz" class="submitbtn"></a> </div>
          <a href="#"><img src="images/dessert.jpg" alt=""></a> </div>
      </li>
      <li>
        <div>
          <div>
            <h2><a>Cattleya</a></h2>
            <p></p>
            <a><input type="submit" name="cattleya" value="Zobacz" class="submitbtn"></a> </div>
          <a href="#"><img src="images/pastries.jpg" alt=""></a> </div>
      </li>
      <li>
        <div>
          <div>
            <h2><a>Akcesoria</a></h2>
            <p></p>
            <a><input type="submit" name="akcesoria" value="Zobacz" class="submitbtn"></a> </div>
          <a href="#"><img src="images/healthy-food.jpg" alt=""></a> </div>
      </li>
    </ul>
  </div>
</form>
</div>
    
    <?php
        include_once 'user.php';
        include_once 'products.php';
        if (filter_input(INPUT_GET, "wyloguj")) {
            
            User::wyloguj();
        }
        if (filter_input(INPUT_GET, "paphiopedilum")) {
            Products::wybor("1");
        }
        if (filter_input(INPUT_GET, "phalaenopsis")) {
            Products::wybor("2");
        }
        if (filter_input(INPUT_GET, "cymbidium")) {
            Products::wybor("3");
        }
        if (filter_input(INPUT_GET, "dendrobium")) {
            Products::wybor("4");
        }
        if (filter_input(INPUT_GET, "cattleya")) {
            Products::wybor("5");
        }
        if (filter_input(INPUT_GET, "akcesoria")) {
            Products::wybor("6");
        }
        ?>
</body>
</html>
