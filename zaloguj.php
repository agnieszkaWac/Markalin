<?php
    session_start();
    if (isset($_SESSION['username'])){
        header("Location: zalogowany.php");
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
      </div>
    </div>
    <div class="section"> <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt=""></a> </div>
  </div>
</div>
<div id="content">
  <div>
    <div id="account">
      <div>
        <form action="zaloguj.php" method="post">
          <span>Zaloguj się</span>
          <table>
            <tr>
              <td><label for="login_input">Login</label></td>
                <td><input type="text" id="login" name="login" value="<?php echo ((isset($_POST["login"]))?htmlspecialchars($_POST["login"]):""); ?>"></td>
            </tr>
            <tr>
              <td><label for="haslo_input">Hasło</label></td>
              <td><input type="password" id="haslo" name="haslo"></td>
            </tr>
            <tr>
              <td></td>
              <td><a href="rejestracja.php">Nie masz jeszcze konta? Załóż je!</a></td>
            </tr>
          </table>
          <input type="submit" name="zaloguj" value="Zaloguj" class="submitbtn">
        </form>
      </div>
    </div>
  </div>
</div>
    
    <?php
        include_once 'user.php';
        if (filter_input(INPUT_POST, "zaloguj")) {
            User::zaloguj();
        }
        
        ?>
</body>
</html>
