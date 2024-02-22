<?php

$name = $_POST[ 'name' ];
$lastname = $_POST['lastname'];
$email = $_POST[ 'email' ];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);

// Check if name is empty