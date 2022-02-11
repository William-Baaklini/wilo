<?php
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("location: index.html#second");
  }
  else {
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])){
      header("location: index.html#second");
    }else {
      $name = $_POST['name'];
      $visitor_email = $_POST['email'];
      $message = $_POST['message'];

      $email_from = 'wilotest@gmail.com';
      $email_subject = 'WILO Support Submission from ' + $visitor_email;
      $email_body = "Name: $name \nEmail: $visitor_email \nMessage: $message \nend of email";
      $to = "baaklini.william@gmail.com";
      $headers = "from: $visitor_email";

      mail($to, $email_subject, $email_body, $headers);
      header("location: index.html#second");
    }
  }
?>