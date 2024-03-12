<?php
  require('./database.php');

  if(isset($_POST['submitNewAccount'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_password = md5($password);

    if(empty($username) || empty($password)) {
      echo "<script>alert('fill up all fields')</script>";
      echo "<script>location.href = './index.php'</script>";
    } else {
      $queryCreateNewAccount = "insert into accounts values (Null, '$username', '$hash_password')";
      $sqlCreateNewAccount = mysqli_query($connecttion, $queryCreateNewAccount);
  
      echo "<script>location.href = './index.php'</script>";
    };
  }
?>