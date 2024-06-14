<?php require_once 'app/views/templates/headerPublic.php'; ?>
<!DOCTYPE html>
<html>
  <head>
     <title>Register - Create New User</title>
    </head>

  <body>
     <h2>Register</h2>
    <form action="/create/register" method="post" >
       Username: <input type="text" name="username" required><br>
       Password: <input type="password" name="password" required><br>
       Confirm Password: <input type="password" name="confirm_password" required<br>
      <input type="submit" value="Register">
    </form>

    <h4>Password rules</h4>
    <p>
      Contains at least one letter<br/>
      Contains at least one digit<br/>
      Is at least 8 characters long<br/>
      May contain special characters (@$!%*?&)
    </p>
     <p><a href="/login">Back to Login</a></p>
    </body>
</html>
