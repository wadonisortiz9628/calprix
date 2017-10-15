<?php
require 'send_mail.php';
ini_set("SMTP","smtp.gmail.com" );
ini_set('wadonisortiz9628@gmail.com', 'wadonisortiz9628@gmail.com');

$sent = new Send;
$sent = $sent->send_mail();