<?php

try
{
  $pdo = new PDO('mysql:host=host;dbname=aithme', 'mandywes_aithme_user', 'usERp@SSwoRD957');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

if (isset($_POST['myname']) && empty($_POST['honeypot']))
  {
    
    $myname = $_POST['myname'];
    $myage = $_POST['myage'];
    $role = $_POST['role'];
    $myphone = $_POST['myphone'];
    $myemail = $_POST['myemail'];
    $ename = $_POST['ename'];
    $ephone = $_POST['ephone'];
    $gender = $_POST['gender'];
    $shirt = $_POST['shirt'];
    $event = $_POST['event'];
    $sevent = $_POST['sevent'];
    $mycomments = $_POST['mycomments'];
    
    try {
      $sql = 'INSERT INTO regestration SET
          myname = :myname,
          myage = :myage,
          role = :role,
          myphone = :myphone,
          myemail = :myemail,
          ename = :ename,
          ephone = :ephone,
          gender = :gender,
          shirt = :shirt,
          event = :event,
          sevent = :sevent,
          mycomment = :mycomments';
        
      $s = $pdo->prepare($sql);
        
      $s->bindValue(':myname', $_POST['myname']);
      $s->bindValue(':myage', $_POST['myage']);
      $s->bindValue(':role', $_POST['role']);
      $s->bindValue(':myphone', $_POST['myphone']);
      $s->bindValue(':myemail', $_POST['myemail']);
      $s->bindValue(':ename', $_POST['ename']);
      $s->bindValue(':ephone', $_POST['ephone']);
      $s->bindValue(':gender', $_POST['gender']);
      $s->bindValue(':shirt', $_POST['shirt']);
      $s->bindValue(':event', $_POST['event']);
      $s->bindValue(':sevent', $_POST['sevent']);
      $s->bindValue(':mycomments', $_POST['mycomments']);
    
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      include 'error.html.php';
      exit();
    }
    
    include 'success.html.php';
    exit();
    
} else {
    include 'registration.html.php';

    }