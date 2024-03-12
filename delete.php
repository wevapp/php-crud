<?php
  require('./database.php');

  if(isset($_POST['deleteAccount'])){
    $deleteId = $_POST['deleteId'];

    $queryDeleteAccount = "delete from accounts where id = $deleteId";
    $sqlDeleteAccount = mysqli_query($connecttion, $queryDeleteAccount);

    echo "<script>location.href = './index.php'</script>";
  }
?>