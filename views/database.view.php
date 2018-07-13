<?php

include('./database/config.php');
// var_dump($admin_password);
$sql = $conn->prepare("SELECT admin_password FROM passwords WHERE id=1");
$admin_password = $sql->execute();
$admin_password = $sql->fetch(PDO::FETCH_ASSOC);
// If password is valid let the user get access
if ((isset($_POST["admin_password"])) && (password_verify($_POST["admin_password"], implode($admin_password)))) {
  require './components/partials/header.php';
  require './components/database-update.php';
  require './components/partials/footer.php';
}
else {
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $admin_password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"admin_password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
