<?php
$name = $_POST[&#039name&#039];
$email = $_POST[&#039email&#039];
$message = $_POST[&#039message&#039];
$from = &#039From: apbiology&#039; 
$to = &#039megan16scarlett@gmail.com&#039; 
$subject = &#039Hello&#039;
$thankyou = &#039meganscarlett.github.io&#039;

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST[&#039submit&#039]) {
if (mail ($to, $subject, $body, $from)) { 
echo '';
} else { 
echo 'Something went wrong, go back and try again!'; 
}
}
?>
<script>location.replace('') </script>
