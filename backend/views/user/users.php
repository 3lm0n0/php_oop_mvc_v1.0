
<!DOCTYPE HTML>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <?php include_once("validation.php"); ?>
    <script src="ajax.js"></script>
  </head>
  <body>
    <div class="container-title">
      <h2>PHP Form Validation Example</h2>
    </div>
    <div class="container-form">
      <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> id="myForm"
name="myForm">
        <div class="field">
          <div class="label"> Nombre de usuario </div>
          <input id="username_field" name="username" onChange="validate('username_errors', this.value)" type="text">
          <div id="username_errors" class="errors"></div>
        </div>
        <div class="field">
          <div class="label"> Clave </div>
          <input id="password_field" name="password" onChange="validate('password_errors', this.value)" type="password">
          <div id="password_errors" class="errors"></div>
        </div>
        <div class="field">
          <div class="label"> E-mail </div>
          <input id="email_field" name="email" onChange="validate('email_errors', this.value)" type="text">
          <div id="email_errors" class="errors"></div>
        </div>
        <div class="field">
          <div class="label"> Sitio web </div>
          <input id="website_field" name="website" onChange="validate('website_errors', this.value)" type="text">
          <div id="website_errors" class="errors"></div>
        </div>
        <input onclick="validate()" type="button" value="Enviar">
      </form>
    </div>
  </body>
</html>
