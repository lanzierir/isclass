<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
  <div class='container' align="center">
    <form action="addtodb.php" method = "POST">
      <div>
        <label><b>Email</b></label>
        <input type="text" name="reg_uname" placeholder="email" required>
      </div>
      <div>
        <label><b>Password</b></label>
        <input type="password" name="reg_password" placeholder="password" required>
      </div>
      <div>
        <button type="submit">Login</button>     
      </div>
    </form>
    <a href="https://web.njit.edu/~rel5/project1/signup.html">Register Here</a>
  </div>
</body>

</html>