<?php
/**
 *
 */
class User
{
  public $name;
  public $lastname;
  public $email;
  public $username;
  public $password;
  public $eta = 0;

  public function setEmail() {
    if ($email == null) {
      $this->email = "$this->name"."."."$this->lastname"."@gmail.com";
    }
  }

  

  public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
  }
}

$user1 = new User("Alebsct", 1234);
$user1->name = "Alessandro";
$user1->lastname = "Boscato";
$user1->email = "alessandro.boscato@gmail.com";




$user2 = new User("CarloCarlo", 56778);
$user2->name = "Carlo";
$user2->lastname = "Petrolio";
$user2->setEmail();
var_dump($user1, $user2);


// $user1
 ?>
