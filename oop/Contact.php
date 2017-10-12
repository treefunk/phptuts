<?php
class Contact
{
    public $name;
    public $phone;
    public $address;
}

$jhondee = new Contact;
$jhondee->name = "Jhondee Diaz";
$jhondee->phone = "1234";
$jhondee->address = "cubao";

var_dump($jhondee);
?>