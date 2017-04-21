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
    </ul>
      <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
<div id="content">
  <div>
    <div id="account">
      <div>
        <form action="zarejestrowano.php" method="get">
          <span>  </span>
          <table>
            <tr>
              <td>Jesteś już zalogowany!</td>
              <td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <?php
        include_once 'user.php';
        if (filter_input(INPUT_GET, "wyloguj")) {
            User::wyloguj();
        }
        
        ?>
</body>
</html>
