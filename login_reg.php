<?php include 'dbconfig.php';
error_reporting(E_ALL);
ini_set('display_errors', 1)?>

<?php 
function signInForm(){
echo ('
	<form method="post" class="sign-in-form">
			<input type="hidden" name="stat" value="l">
      <h2 class="title">Sign in</h2>

      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="username" name="user" required>
      </div>

      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="password" name="pass" required>
      </div>
			
			<p class="warn" style="display: none;">Warning</p>
			
      <input type="submit" value="Sign In" name="login" class="btn solid">

      <p class="social-text">Or Sign in with social platforms</p>
      <div class="social-media">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
	</form>
');
}

function signUpForm(){
echo ('
        <form method="post" class="sign-up-form">
          <input type="hidden" name="stat" value="r"/>
          <h2 class="title">Sign up</h2>

          <div class="radio-buttons">
          <input type="radio" id="donor" name="usertype" value="donor">
          <label for="donor">Donor</label>
          <input type="radio" id="recipient" name="usertype" value="recipient">
          <label for="recipient">Recipient</label>
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="username" name="username" required>
          </div>

          <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Email" id="email"  name="email" required>
          </div>
                                                                                                                                                                                                                                                                                      

          <div class="input-field">
          <i class="fas fa-phone"></i>
          <input type="text" placeholder="Contact" id="contact"  name="contact" required>
        </div>


        <div class="input-field">
        <i class="fa-solid fa-droplet"></i>
        <input type="bloodtype" placeholder="Blood Type" id="bloodtype" name="bloodtype" required>

        </div>


          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password" name="password" required>
          </div>
          

          <input type="submit" class="btn" value="Sign up">
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
');
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login_reg.css">
    <title>Sign in & Sign up Form</title>
    <style>
      .radio-buttons input[type="radio"] {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 20px;
      height: 20px;
      border: 2px solid #ccc;
      border-radius: 50%;
    }

    /* Create custom styles for the radio button when selected */
    .radio-buttons input[type="radio"]:checked {
      background-color: #007bff;
      border-color: #007bff;
    }

    /* Custom styles for the labels */
    .radio-buttons label {
      margin-right: 10px;
      font-weight: bold;
      color: #333;
    }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">

        <div class="signin-signup">

          <?php
          include 'process.php';
          signInForm();
          signUpForm();
          ?>

      <div class="panels-container">

        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>Become a donor and save a life today!</p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>Welcome back, and thank you for your constant support!</p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
        </div>

      </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");
        
        sign_up_btn.addEventListener("click", () => {
          container.classList.add("sign-up-mode");
        });
        
        sign_in_btn.addEventListener("click", () => {
          container.classList.remove("sign-up-mode");
        });
    </script>

  </body>
</html>