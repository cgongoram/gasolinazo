<?php
$to = 'cgongoram@hotmail.com';
$subject = 'This is subject';
$message = 'This is body of email';
$from = "From: FirstName LastName <SomeEmailAddress@Domain.com>";
mail($to,$subject,$message,$from);
?> 