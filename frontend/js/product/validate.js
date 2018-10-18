function validate(errorID, field) {
  // primero reviso que los campos no esten vacios!
  if (field == '') {
    alert("Debes completar todos los campos!");
  } else {
    // cuando todos los campos tienen data, guardo su contenido en su variable correspondiente.
    var username_errors = document.getElementById(errorID);

    //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
    var moreThan3letters = 'Must be 3+ letters';
    var passToShort = 'Password too short';
    var invalidEmail = 'Invalid email';
    var invalidWebsite = 'Invalid website';

    if (username_errors.innerHTML == moreThan3letters || password_errors.innerHTML == passToShort
      || email_errors.innerHTML == invalidEmail || website_errors.innerHTML == invalidWebsite) {
      alert("Debes completar todos los campos con informacion valida!");
    } else {
      //Submit Form When All values are valid.
      document.getElementById("myForm").submit();
    }
  }

}
