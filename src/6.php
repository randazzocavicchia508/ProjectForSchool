
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// check if name and email is filled
if(!empty($name) && !empty($email)) {
  // send mail
  $to = 'your@mail.com';
  $subject = 'New Message from ' . $name;
  $message_body = '<p>You have a new message from <strong>' . $name . '</strong></p><p>' . $message . '</p>';
  mail($to, $subject, $message_body);
} else {
  echo "Please fill in your name and email";
}
?>