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
}

$user1 = new User();
$user1->name = "Alessandro";
$user1->lastname = "Boscato";




$user2 = new User();
$user2->name = "Carlo";
$user2->lastname = "Petrolio";
$user2->setEmail();
var_dump($user1, $user2);


// $user1
 ?>
