
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login/Sign-up</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <?php 
include "connection.php";
if(isset($_SESSION['user_name'])){
    header("Location: index.php");
}
?>
  </head>
  <body>
    <header></header>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="" class="login" method='post'>
            <div class="field">
              <input type="text" placeholder="Username" name='username' required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name='password' required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name='login'>
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Username" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php

if (isset($_POST['login'])) {

    $uname = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['user_name'] = $uname;
            header('Location: index.php');
        } else {
            echo '<script>alert("Invalid username or password")</script>';
        }
    }
}
?>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
