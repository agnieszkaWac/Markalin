<!DOCTYPE html>
<html>
<head>
<title>Cake Delights | SignUp</title>
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
          <form action="rejestracja.php" method="post">
          <span>Rejestracja</span>
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
                <td><label for="email_input">E-mail</label></td>
                <td><input type="text" id="email" name="email" value="<?php echo ((isset($_POST["email"]))?htmlspecialchars($_POST["email"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="nazwisko_input">Nazwisko</label></td> 
                <td><input type="text" id="nazwisko" name="nazwisko" value="<?php echo ((isset($_POST["nazwisko"]))?htmlspecialchars($_POST["nazwisko"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="imie_input">Imie</label></td> 
                <td><input type="text" id="imie" name="imie" value="<?php echo ((isset($_POST["imie"]))?htmlspecialchars($_POST["imie"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="ulica_input">Ulica</label></td> 
                <td><input type="text" id="ulica" name="ulica" value="<?php echo ((isset($_POST["ulica"]))?htmlspecialchars($_POST["ulica"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="nr_mieszk_input">Numer mieszkania</label></td> 
                <td><input type="text" id="nr_mieszk" name="nr_mieszk" value="<?php echo ((isset($_POST["nr_mieszk"]))?htmlspecialchars($_POST["nr_mieszk"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="nr_dom_input">Numer domu</label></td> 
                <td><input type="text" id="nr_dom" name="nr_dom" value="<?php echo ((isset($_POST["nr_dom"]))?htmlspecialchars($_POST["nr_dom"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="kod_pocz_input">Kod pocztowy</label></td> 
                <td><input type="text" id="kod_pocz" name="kod_pocz" value="<?php echo ((isset($_POST["kod_pocz"]))?htmlspecialchars($_POST["kod_pocz"]):""); ?>"></td>
            </tr>
            <tr>
                <td><label for="miasto_input">Miasto</label></td> 
                <td><input type="text" id="miasto" name="miasto" value="<?php echo ((isset($_POST["miasto"]))?htmlspecialchars($_POST["miasto"]):""); ?>"></td>
            </tr>
          </table>
          <input type="submit" name="rejestruj" value="rejestruj" class="submitbtn">
          
          
        </form>
      </div>
    </div>
  </div>
</div>

    <?php
        include_once 'user.php';
        if (filter_input(INPUT_POST, "rejestruj")) {
            User::rejestruj();
        }
        
        ?>
    
</body>
</html>
