<!-- import database -->
<?php 
  require('./database.php');

  if(isset($_POST['editAccount'])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
  };

  if(isset($_POST['update'])){
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];
    $queryUpdateAccount = "update accounts set username = '$updateUsername', password = '$updatePassword' where id = $updateId";
    $sqlUpdateAccounts = mysqli_query($connecttion, $queryUpdateAccount);
    echo "<script>location.href = './index.php'</script>";
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Accounts</title>
</head>
<body>
  <!-- User input fields (form data) -->
  <form action="./update.php" method="post">
    <h3>Update user</h3> <br>
    <label>Username</label> <br>
    <input type="text" name="updateUsername" placeholder="Edit username" value="<?php echo "$editUsername" ?>"> <br>
    <label>Password</label> <br>
    <input type="password" name="updatePassword" placeholder="Edit password" value="<?php echo "$editPassword" ?>"> <br>
    <input type="submit" name="update" value="Update">
    <input type="hidden" name="updateId" value="<?php echo $editId?>">
  </form>
</body>
</html>