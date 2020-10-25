<?php
/**
 *
 */
class User
{
  private $name;
  private $lastname;
  protected $sconto = 0;
  // public $idUser;

  use UserId;

//all'accesso l'utente deve obbligatoriamente inserire nome e cognome per la navigazione
  public function __construct($_name, $_lastname){
    $this->name = $_name;
    $this->lastname = $_lastname;
  }

//se l'utente si iscrive al sito avrà un piccolo sconto sui servizi
  public function setSconto($_email, $_password){
    if ($_email != null && $_password != null) {
      $this->email = $_email;
      $this->password = $_password;
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
    $this->sconto = 40;
  }

}
/**
 *
 */
trait UserId
{
  protected $idUser;

  public function GenerateId(){
    $this->idUser = rand(0, 10);
  }
}


$user1 = new User("Alessandro", "Boscato");
$user2 = new User("Carlo", "Petrolio");
$user2->setSconto("carlo.petrolio@gmail.com", "1234");
$user2->GenerateId();
$user3 = new Employee("Alice","Wonderland");


var_dump($user1);
var_dump($user2);
var_dump($user3);

 ?>
