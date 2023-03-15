<?php
$word1 = 'one';
$word2 = 'two';
echo "$word1, $word2\n";

$to = "k.o.shevchenko@student.khai.edu";
$subject = "message";
$message = 'Hello';


echo "$to, $subject, $message";

echo ini_get("smtp_port");
ini_set("smtp_port","587");

$headers = 'From: k.o.shevchenko@student.khai.edu';
mail('kirillshewa123@gmail.com', $subject, $message, $headers);