<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in & Registration Form</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<div class="cont"> 
<form class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit" type="button">Sign In</button>
      <p class="forgot-pass">Forgot Password ?</p>
      <div class="social-media">
        <ul>
          <li><img src="image/facebook.png"></li>
          <li><img src="image/twitter.png"></li>
          <li><img src="image/linkedin.png"></li>
          <li><img src="image/instagram.png"></li>
        </ul>
      </div>
</form>
<div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
</div>
        <form name="myform" action="f_form_handler.php" onsubmit="return validate()" method="POST" class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>First Name</span>
          <input type="text" name="firstname" >
        </label>
        <label>
          <span>Last Name</span>
          <input type="text" name="lastname">
        </label>
        <label>
          <span>Address</span>
          <input type="text" name="address">
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="password2">
        </label>
        <input type="submit" value="Sign Up Now" class="submit">
</form>
</div>
</div>
<script type="text/javascript" src="f_form.js"></script>
</body>
</html>