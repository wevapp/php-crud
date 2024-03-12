<?php
  require('./database.php');
  $queryReadAccounts = 'select * from accounts';
  $sqlReadAccounts = mysqli_query($connecttion, $queryReadAccounts);
?>