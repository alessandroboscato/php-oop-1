<?php
/**
 *
 */
class User
{
  public $name;
  public $lastname;
  private $email;
  private $password;
  protected $sconto;

//all'accesso l'utente deve obbligatoriamente inserire nome e cognome per la navigazione
  public function __construct()

//se l'utente si iscrive al sito avrà un piccolo sconto sui servizi
  public function setSconto(){
    if($)
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

$user1 = new Employee();
$user1->name = "Alessandro";
$user1->lastname = "Boscato";


 ?>
