<?php
  //Defino variables privadas para la clase Cliente
  Class Cliente {

    Private $email;
    Private $password;
  //Creo una función constructora con sus parámetros necesarios
    public function __construct(String $email,String $password) {
      $this->email = $email;
      $this->pass = $password;
    }
    //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado
    public function setEmail($email) {
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setPass($password){
      $this->password = $password;
    }
    public function getPass(){
      return $this->password;
    }
    
  }
?>
