<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="ecotracks";
$conn=mysqli_connect($host,$user,$password,$db);
if ($conn==false)
{
  echo "connection error";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <style>
    body {
  margin: 0;
  padding: 0;
  background-image:url("https://www.financialexpress.com/wp-content/uploads/2023/09/1-250.jpg");
  background-size: cover;
  background-position: center;

  

}
.register-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.1); /* Adjust opacity by changing this value */
  z-index: -1;
}

.register-container {
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
  padding: 30px;
  height: 450px; /* Increased height */
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
  margin-bottom: 40px; /* Increased margin */
}

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


.register-button {
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

.register-button:hover {
  background-color: #142b3a; /* Darker background color for the hover effect */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8); /* Increased box-shadow */
}
.login-link {
  margin-top: 10px; /* Add margin to create space between the button and the link */
  text-align: center; /* Center the link horizontally */
}

.login-link a:hover {
  color: #1f3648; /* Darker text color for the hover effect */
}
</style>
</head>
<body>
  <div class="register-container">

    <form method="post" >
      <h2>Register Now!</h2>
      <input type="text" id="username" name="username" required placeholder="Username">
    <input type="email" id="email" name="email" required placeholder="Email">
      
    <input type="password" id="password" name="password" required placeholder="Password">
    <input type="tel" id="phone" name="phone" required placeholder="Phone Number">
      <button type="submit" name="submit" class="register-button">Register</button>

<div class="register-link">
  <p>Already have an account?

  <a href="login.php"> Login </a></p>
</div>
    </form>
  </div>
</body>
</html>
<?php
 
if(isset($_POST['submit']))
{
  $username= $_POST['username'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $phone = $_POST['phone'];
  
  $query = "INSERT INTO registeration(username,email,password,phone) VALUES('$username','$email','$password','$phone')";
  mysqli_query($conn, $query );
    echo "
    <script>
         alert('Registeration done successfully');
    </script>
    ";
    // $_SESSION['username']=$username;
}
?>