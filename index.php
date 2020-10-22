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
  public $eta;

  public function setEmail() {
    if ($email == null) {
      $this->email = "$this->name"."."."$this->lastname"."@gmail.com";
    }
  }


  public function __construct($_username, $_password){
    $this->username = $_username;
    $this->password = $_password;
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

$users = [$user1, $user2];

var_dump($users);


 ?>
