<?php

  require './components/partials/header.php';
  require './components/sign-up-form.php';
  require './components/partials/footer.php';

// include('./password/password.php');
// $password = password_hash($password, PASSWORD_BCRYPT);
// // If password is valid let the user get access
// if ((isset($_POST["password"])) && (password_verify($_POST["password"], $password))) {
//   require './components/partials/header.php';
//   require './components/sign-up-form.php';
//   require './components/partials/footer.php';
// }
// else {
// // Wrong password or no password entered display this message
// if (isset($_POST['password']) || $password == "") {
//   print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
//   print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
//   print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
// }
