<?php
class Name
{
    private $firstName;
    private $lastName;

    public function __construct($firstName = 'no', $lastName = 'name')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class UserName
{
    public static function createUser($firstName = 'name', $lastName = 'name')
    {
        return new Name($firstName , $lastName);
    }
}

$name = UserName::createUser();
$fullName = $name->getName();
print_r($name->getName()); // outputs "Bilal Imdad"












