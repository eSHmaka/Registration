<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registartion</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="container">

    <div class="RegisterForm">

      <h2>Registration</h2>

      <form action="./pass.php" method="post">
        <div class="inputBox">
          <label for="username">Username</label>
          <input type="text" placeholder="Username" name="username" id="username" required>
        </div>

        <div class="inputBox">
          <label for="password">Password</label>
          <input type="password" placeholder="Password" name="password" id="password" required>
        </div>

        <div class="inputBox">
          <label for="Confirm Password">Re-Password</label>
          <input type="password" placeholder="Confirm Password" name="confirm-password" id="confirm_password" required>
        </div>

        <button type="submit" class="pure-button pure-button-primary">Confirm</button>


      </form>
    </div>

  </div>
</body>
</html>