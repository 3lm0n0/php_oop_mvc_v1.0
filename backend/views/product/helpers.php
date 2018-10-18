<?php
  // define variables and set to empty values
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);

    if ($username == "username") {
      if (strlen($value) < 4) {
        echo "El usuario debe tener al menos 3 caracteres!";
      } else {
        echo "<span> El nombre de usuario es valido! </span>";
      }
    }
    // Check Valid or Invalid password when user enters password in password input field.
    if ($password == "password") {
      if (strlen($value) < 6) {
        echo "La clave es demasiado corta!";
      } else {
        echo "<span> La clave isnertada es valida! </span>";
      }
    }
    // Check Valid or Invalid email when user enters email in email input field.
    if ($email == "email") {
      if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $value)) {
        echo "El e-mail no es valido!";
      } else {
        echo "<span> El e-mail insertado es valido! </span>";
      }
    }
    // Check Valid or Invalid website address when user enters website address in website input field.
    if ($website == "website") {
      if (!preg_match("/b(?:(?:https?|ftp)://|www.)[-a-z0-9+&@#/%?=~_|!:,.;]*[-a-z0-9+&@#/%=~_|]/i", $value)) {
        echo "Invalid website";
      } else {
        echo "<span>Valid</span>";
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



?>
