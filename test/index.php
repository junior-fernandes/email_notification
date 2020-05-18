<?php

require __DIR__."/../lib_ext/autoload.php";
require __DIR__."/../config/config.php";

use Notification\Email;

$novoEmail = new Email();
$novoEmail->sendEmail("Subject", "Content", "address@email.com", "Address Name");

var_dump($novoEmail);

?>