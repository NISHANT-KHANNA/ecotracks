<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <style>
    html
    {
      overflow-y: hidden;
    }
    body {
  margin: 0;
  padding: 0;
  background-image:url("https://www.financialexpress.com/wp-content/uploads/2023/09/1-250.jpg");
  background-size: cover;
  background-position: center;

 

}
.login-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.1); /* Adjust opacity by changing this value */
  z-index: -1;
}

.login-container {
  position: relative;
  width: 100%;
  height: 100vh;
  
}

.background {
  display: none;
}


form {
  position: absolute;
  top: 50%;
  left: 30%; /* Changed to 45% */
  transform: translate(-50%, -50%);
  width: 320px;
  padding: 50px;
  height: 420px; /* Increased height */
  background-color: rgba(255, 255, 255, 0.7); /* Changed to more transparent */
  box-sizing: border-box;
  border-radius: 5px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Changed box-shadow */
  transition: all 0.3s ease-in-out; /* Added transition effect */
}

form:hover {
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.6); /* Hover effect for form */
}


h2 {
  text-align: center;
 margin-bottom: 40px; }

input {
  width: 90%;
  padding: 12px;
  margin-bottom: 20px; /* Increased margin */
  border: none;
  border-bottom: 2px solid #274759;
  box-sizing: content-box; /* Changed to content-box */
  background: none;
  outline: none;
 
  transition: all 0.3s ease-in-out; /* Added transition effect */
}

.input:active,
.input:focus,
.input:hover {
 
  border-bottom-color: #142b3a;
}

input::placeholder
{
  color:#142b3a;
}


.login-button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 10px;
  background-color: #274759;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease-in-out; /* Added transition effect */
}

.login-button:hover {
  background-color: #142b3a; /* Darker background color for the hover effect */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8); /* Increased box-shadow */
}
.register-link {
  margin-top: 10px; /* Add margin to create space between the button and the link */
  text-align: center; /* Center the link horizontally */
}
@media (max-width: 768px) {
  form {
    height: 350px;}



.register-link a:hover {
  color: #1f3648; /* Darker text color for the hover effect */
}
</style>
</head>
<body>
 
  <div class="login-container">  
      
      
      <form method="post" action="connect.php">
        <h2>Sign In</h2>
        <h4>
          <?php
          error_reporting(0);
          session_start();
          session_destroy();
          echo $_SESSION['loginMessage'];
          ?>
      </h4>
      <input type="text" id="username" name="username" required placeholder="Username">
    <input type="password" id="password" name="password" required placeholder="Password">
      <button type="submit" name="login" class="login-button">Login</button>
 

<div class="register-link">
  <p>Not registered?

  <a href="registeration.php"> Register now</a></p>
</div>
    </form>
</div>
</body>
</html>