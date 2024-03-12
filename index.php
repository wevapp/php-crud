<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Practice</title>
</head>
<body>
  <!-- User input fields (form data) -->
  <form action="./create.php" method="post">
    <label>Username</label> <br>
    <input type="text" name="username" placeholder="example123"> <br>
    <label>Password</label> <br>
    <input type="password" name="password" placeholder="******"> <br>
    <input type="submit" name="submitNewAccount" value="Create New Account">
  </form>

  <!-- import php file read accounts  -->
  <?php
    require('./read.php');
  ?>
  <!-- Display User accounts -->
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while($readAccountsResult = mysqli_fetch_array($sqlReadAccounts)) { ?>
        <tr>
          <td><?php echo $readAccountsResult['id']?></td>
          <td><?php echo $readAccountsResult['username']?></td>
          <td><?php echo $readAccountsResult['password']?></td>
          <td style="display: flex;">
          
            <!-- Update Button -->
            <form action="./update.php" method="post">
              <input type="submit" name="editAccount" value="Edit">
              <input type="hidden" name="editId" value="<?php echo $readAccountsResult['id']?>">
              <input type="hidden" name="editUsername" value="<?php echo $readAccountsResult['username']?>">
              <input type="hidden" name="editPassword" value="<?php echo $readAccountsResult['password']?>">
            </form>

            <!-- Delete Button -->
            <form action="./delete.php" method="post">
              <input type="submit" name="deleteAccount" value="Delete">
              <input type="hidden" name="deleteId" value="<?php echo $readAccountsResult['id']?>">
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>