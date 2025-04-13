<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<title>Main Page</title>
<style type="text/css">
#logo-container {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0%;
  left: 0%;
  display: flex;
  justify-content: center;
  align-items: center;
/*  z-index: 1000;*/
  background-color: #5C74A4;
/*  transform: translate(-50%, -50%);*/
  opacity: 1; /* Initially hide the logo */
  transition: opacity 1s ease-in-out;
}
#logo {
  max-width: 100%;
  max-height: 100%;
  transition: transform 1s ease-in-out;
}
#animate{
  position: absolute;
  opacity: 0;
  transition: opacity 2.5s ease-in-out;
}
:root
        {
          --primary-text-color:white;
          --secondary-text-color:#848A9E;
          --accent-color:#5C74A4;
          --accent-dark-color:#1D3358;
          --accent-orange-color: #ffad33;
          --accent-green-color:#5F6B43;
        }
        body
{
  font-family: 'Poppins';
overflow-x: hidden;
margin:0;
        padding:0;
        box-sizing: border-box;
        color:var(--primary-text-color);    
}
a{
text-decoration: none;
color: white;
}
ul{
list-style: none;
display: flex;

}
    
        p{
          /*  font-family: 'Roboto';*/
          font-size: 1.50rem;
          color:var(--primary-text-color);
          line-height:1.0rem;
        }        
span
{
 color:white;
          z-index: 1000;
}
span:hover{
  color:var(--accent-orange-color);
}
.logo{
           height: 90px;
           width:90px;
           margin-top:4px;
           margin-left:10px;
         }
        .main-page
        {
       
            background-image:url('train9.png') ;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
             display: flex;
        flex-direction: column;
        height:100vh;
            width:100%;
        }
        .header
        {
        display: flex;
        padding: 20px;
/*         background-color: red;*/
/*            justify-content: center;*/
/*            align-items: center;*/

        }
        .box1
        {
/*         background-color: yellow;*/
        width:10%;
        display: flex;
        justify-content: center;
        align-items: center;
        }        
        .box2
        {
/*         background-color: skyblue;*/
          padding-left: 3%;
        width: 30%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        }
        .box3
        {
/*         background-color: red;*/
        width:40% ;
        display: flex;
        justify-content: flex-end;
        align-items: center;
          padding-right: 3%;
        }
            ul
         {          
           gap:35px;
           cursor: pointer;
           

         }
        
        .box4
        {
/*         background-color: lightpink;*/
        width: 20%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        }
        .main{
/*         background-color: darkred;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        top:70px;
        }
        .main h1
        {
          margin-bottom:-5px;
        }
        button
        {
        margin-right:20px;
        }
        .login
        {
          background-color: var(--accent-dark-color);
          border-radius:6px;
          font-weight:700;
          color:white;
          padding: 12px 24px;
          box-shadow: 0 0 2px var(--primary-text-color);
          transition: 0.2s ease out;        
        }
         .login:hover
        {
        background-color: var(--accent-orange-color);
        }
        .register
        {
        background-color: transparent;
            border-radius:6px;
            border-color:var(--secondary-text-color);
            font-weight:700;
            color:white !important;
            padding: 12px 24px;
            box-shadow: 0 0 2px var(--primary-text-color);
            transition: 0.2s ease out;
        }
        .register:hover
        {
           background-color: var(--accent-orange-color);
        }







        .footer {
/*          margin-top: 34%;*/
         position: absolute;
         width: 100%;
         bottom:-144px;
          background-color: var(--accent-green-color);
          padding:1.5px;
          text-align: center;
         }
        
        .footer p{

          font-size: 1.0rem;
        }
        #icon
        {
         padding: 2px;
         margin-top: 5px;
         width: 30px;
         height: 30px;
     
        }
        #popup-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1001;
  display: none;
}

#popup {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  z-index: 1002;
}

#popup h2 {
  margin-top: 0;
  color:red;
}

#popup-close {
  float: right;
  margin-top: -10px;
  margin-right: -10px;
  padding: 5px 10px;
  color:blue;
  border: none;
  background-color: transparent;
  font-size: 20px;
  cursor: pointer;
}

#popup-close:hover {
  color: red;
}

</style>
</head>
<body>
  <div id="popup-container" style="display:none;">
  <div id="popup">
    <h2>Please login your account to explore.</h2>
    <!-- <button id="popup-close"><a href="login.php">Close</a></button> -->
    <a id="popup-close" href="#" class="close-button">Close</a>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  const popupContainer = document.getElementById("popup-container");
  const popupClose = document.getElementById("popup-close");

  // Show the pop-up message after a delay (adjust as needed)
  setTimeout(function() {
    popupContainer.style.display = "block";
  }, 3000); // 5000ms = 5 seconds

  // Hide the pop-up message when the close button is clicked
  popupClose.addEventListener("click", function() {
    popupContainer.style.display = "none";
  });
});
</script>
  </div>
  <div id="logo-container">
    <img id="logo" src="logo1.png" alt="Your Logo">
  </div>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
  const logoContainer = document.getElementById("logo-container");
  const logo = document.getElementById("logo");
  const main = document.getElementById("animate");

  // Set a timeout to start the animation after a short delay (adjust as needed)
  setTimeout(function() {
    // Show the logo container
    logoContainer.style.opacity = 0;
    main.style.opacity=1;
    // Perform the transition effect
    logo.style.transform = "translate(-135%, -60%) scale(0.2)"; // Adjust the scale value as needed
  }, 1000); // Adjust the delay time as needed
});

  </script>

<div class="main-page" id="animate">
  <div class="header" id="header">
  <div class="box1">
        <img class="logo" src="logo1.png" alt="logo">
    </div>
    <div class="box2">
        <h3 id="box2"></h3>
    </div>
    <div class="box3" id="box3">
    <ul>
    <li><a href="login.php">Contact Us</a></li>
    <li><a href="login.php"><span class="link" onclick="resetFontSize()">A&minus;</span></a></li>
    <li><a href="login.php"><span class="link" onclick="resetFontSize()">A</span></a></li>
    <li><a href="login.php"><span class="link" onclick="resetFontSize()">A&plus;</span></a></li>
    
    <li><a href="#" class="hover-link" id="currentDate"></a></li>
    </ul>
    </div>
    <div class="box4">
    <button class="login"><a href="login.php" >LOGIN</a></button>
    <button class="register"><a href="registeration.php" >REGISTER</a>  </button>
    </div>
  </div>
  <div class="main" id="main">
  <h1>INDIAN RAILWAYS</h1>
    <h3>SAFETY  <span>|</span>  SECURITY  <span>|</span>  PUNCTUALITY</h3>
  </div>
  <div class="footer" id="footer">
  <h4>GET CONNECTED WITH US:

        <a href="#facebook"><img src="facebook.png" id="icon"></a>
        <a href="#youtube"><img src="youtube.png" id="icon"></a>
        <a href="#instagram"><img src="instagram.png" id="icon"></a>
        <a href="#twitter"><img src="twitter.png" id="icon"></a>
        <a href="#telegram"><img src="telegram.png" id="icon"></a>
    </h4>
    <p>Copyright @2024 All Rights Reserved</p>
    <p>Designed By: Nishant, Manraj, Milandeep</p>
  </div>
</div>
<script>
  function increaseFontSize() {
   document.getElementById("box2").style.fontSize = "x-large";
   document.getElementById("box3").style.fontSize = "x-large";
   document.getElementById("main").style.fontSize = "larger";
   document.getElementById("footer").style.fontSize = "larger";
   }
   function decreaseFontSize() {
   document.getElementById("box2").style.fontSize = "smaller";
   document.getElementById("box3").style.fontSize = "smaller";
    document.getElementById("main").style.fontSize = "smaller";
   document.getElementById("footer").style.fontSize = "smaller";
   document.getElementById("footer").style.bottom = "-135px";
   }
    function resetFontSize() {
   document.getElementById("box2").style.fontSize = "1.2rem";
   document.getElementById("box3").style.fontSize = "initial";
    document.getElementById("main").style.fontSize = "initial";
   document.getElementById("footer").style.fontSize = "initial";
   }
  function updateDate() {
  const now = new Date();
  const date = now.getDate();
  const month = now.toLocaleString('default', { month: 'long' }); // get the full month name
  const year = now.getFullYear();
  const formattedDate = ${date} ${month}, ${year};
  document.getElementById('currentDate').innerHTML = formattedDate;
}
  // Call the function once when the page loads
  updateDate();

  // Call the function every day at midnight
  setInterval(() => {
    const now = new Date();
    if (now.getHours() === 0 && now.getMinutes() === 0 && now.getSeconds() === 0) {
      updateDate();
    }
  }, 1000);
</script>
</body>
</html>