<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My PHP Page</title>
  <link rel="stylesheet" type="text/css" href="Home.css">
</head>
<body>
<section class="section1">
<div class="login-box">
  <h2>Register</h2>
  <form action="safe.php" method="post">
    <div class="user-box">
      <input type="text" name="Fullname" required="">
      <label>Full Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Confirm password</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="date" name="birthdate" required="">
      <label>Date of birthday</label>
    </div>
    <div class="user-box">
      <input type="text" name="socialnb" required="">
      <label>Social security number</label>
    </div>
    <a >
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" name="register"></input>
    </a>
  </form>
</div>
</section>
<section class="section2">
<div class="login-box">
  <h2>Login</h2>
  <form action="safe.php" method="post">
    <div class="user-box">
      <input type="text" name="usernamelog" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="passwordlog" required="">
      <label>Password</label>
    </div>
    <a >
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" name="login"></input>
    </a>
  </form>
</div>
</section>
</body>
</html>
