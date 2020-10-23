<?php
/**
 *
 */
class User
{
  private $name;
  private $lastname;
  protected $email;
  protected $password;
  protected $sconto = 0;

//all'accesso l'utente deve obbligatoriamente inserire nome e cognome per la navigazione
  public function __construct($_name, $_lastname){
    $this->name = $_name;
    $this->lastname = $_lastname;
  }

//se l'utente si iscrive al sito avrà un piccolo sconto sui servizi
  public function setSconto(){
    if ($email != null && $password != null) {
      $this->sconto = 20;
    }
  }

}

/**
 *
 */
class Employee extends User
{
  public $idEmployee;
  public $codiceSconto;
  public $mansion;

  public function setSconto(){

  }

}

$user1 = new User("Alessandro", "Boscato");
$user2 = new User("Carlo", "Petrolio");
$user2->email = "carlo.petrolio@gmail.com";
$user2->password = "1234";


var_dump($user1);
var_dump($user2);

 ?>
