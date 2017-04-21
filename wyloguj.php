<?php
    session_start(); //to ensure you are using same session
    session_destroy();
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
        <form action="zarejestrowano.php" method="get">
          <span>Dziękujemy!</span>
          <table>
            <tr>
              <td>Zostałeś wylogowany!</td>
              <td>
            </tr>
          </table>
          <input type="submit" name="zaloguj" value="Zaloguj" class="submitbtn">
        </form>
      </div>
    </div>
  </div>
</div>
    
    <?php
        if(filter_input(INPUT_GET, "zaloguj")){
            header("Location: zaloguj.php");
        }
    ?>
</body>
</html>
