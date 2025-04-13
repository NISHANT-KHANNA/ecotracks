<?php

error_reporting(0);
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
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <title>Main Page</title>
  <style type="text/css">
   
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
/*      overflow-x: hidden;*/
        margin:0;
        padding:0;
        box-sizing: border-box;
        color:var(--primary-text-color);      
    }
    a{
      text-decoration: none;
      color: white;
    }
                   
      p{
         /*  font-family: 'Roboto';*/
          font-size: 1.50rem;
          color:var(--primary-text-color);
          line-height:1.0rem;
        }        
    span
    {
      color:var(--accent-orange-color);
          z-index: 1000;

    }
    .logo{
           height: 90px;
           width:90px;
           /*padding-top:3px;
           margin-left:10px;*/
           padding: 5px;
         }
        .main-page
        {
          display: flex;
          flex-direction: column;
          height:80vh;
            width:100%;
            background-image:url('train9.png') ;
            background-size: cover;
            background-position: center;
            position: relative;
/*            margin-bottom: -20px; /* Adjusted margin */*/
        }
        .header
        {
          display: flex;
          padding: 12px;
/*          background-color: red;*/
          justify-content: center;
/*          align-items: center;*/

        }
  /*-------------------different boxes of the main page ---------------------*/
        .mbox1
        {
/*          background-color: yellow;*/
          width:10%;
          display: flex;
          justify-content: center;
          align-items: center;
        }        
        .mbox2
        {
/*          background-color: skyblue;*/
          width: 30%;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .mbox3
        {
/*          background-color: ivory;*/
          width:140% ;
        display: flex;
        justify-content: flex-end;
        align-items: center;
          padding-right: 1.5%;

       
        }
       
       ul{
      list-style: none;
      display: flex;
      gap:33px;
      cursor:pointer;
       }

       
        .mbox4
        {
/*          background-color: lightpink;*/
          width: 25%;
          display: flex;
          margin-left: 50px;
          justify-content: center;
          align-items: center;
        }
        .main{
/*          background-color: darkred;*/
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          position: relative;
          top:-5px;
/*          height: 70vh;*/


        }
        .main h1
        {
          margin-bottom:-5px;
        }
        .main-bar {
          display: flex;
          height: 40px;
          width: 500px;
/*          background-color: yellow;*/
          border-radius: 20px;
          position: relative;
/*          margin-top: -25px;*/

         
        }

        .main-bar input {
          border: none;
/*          margin-left:30px;*/
          background-color: #fff;
          border-radius: 20px;
          height: 100%;
          width: 100%;
          padding: 0 20px;
        }
        
        #mic {
            position: absolute;
            margin-top: 9px;
            margin-left: -50px;
            width:23px;
            padding:0 10px;

}

        button
        {
          margin-right: 30px;
        }
        .logout
        {
          background-color: var(--accent-dark-color);
          border-radius:6px;

          font-weight:700;
          color:white;
          padding: 12px 24px;
          box-shadow: 0 0 2px var(--primary-text-color);
          transition: 0.2s ease out;        
        }
         .logout:hover
        {
          box-shadow: 0 2px 5px var(--primary-text-color);
          background-color: var(--accent-orange-color);
         

        }
       .logout a:hover
       {
        color: black;
       }
       .bars
{
  color:var(--accent-orange-color);
}
        span
{
          color:white;
          z-index: 1000;

}



        .hover-link{
          color:white;
         
        }
        .hover-link:hover ,span:hover{
          color:var(--accent-orange-color);
          transition: 0.2s ease out;
        }

        #link1{
          font-size: 10px;
        }
        #link2{
          font-size: 15px;
        }
        #link3{
          font-size: 18px;
        }
        .footer {
/*          margin-top: -10px;*/
          color:#404040;
/*         position: absolute;*/
         
         width: 100%;
/*         bottom:-155px;*/
/*background-color: red;*/
          background-color:#e6e6e6;
          padding:1.5px;
          text-align: center;
         }
       
        .footer p{

          font-size: 1.0rem;
          color: #404040;
        }
        #icon
        {
         padding: 2px;
         margin-top: 5px;
         width: 30px;
         height: 30px;
     
        }
        
        
/*#search {
  position: absolute;
  margin-left: -510px;
  margin-top:-3px;
  width:23px;
  padding: 10px 20px;
 
  text-decoration: none;
}*/
/*-----------------------------------codes od the bar added in which main2 is the main bar inside which nav bar is there and links are there */
.main2
{
/*  background-color: green;*/
  position: relative;
  margin-top: -6px;


}
.nav {
      display: flex;
      background-color:var(--accent-dark-color) ;
      width: 80%;
      height:12vh;
      border-radius: 50px;
      flex-direction: column;
      position: relative;
      top: -20px;
      left: 10%;
      right: 10%;
          
    }

    #links {
      display: flex;
      gap:250px;
        justify-content: center;
      align-items: center;
      padding-left: 80px;
      padding-right: 80px;
      padding-bottom: 25px;
      padding-top: 25px;
/*      border-bottom: 1.5px solid #c1c2d7;*/
    }
    #links img{
      width: 40px;
      height: auto; /* Maintain aspect ratio */
      vertical-align: middle; 
      margin-right: 10px;
           
    }

    a:hover{
      color:var(--accent-orange-color);
      cursor: pointer;
    }
    .page {
      display: none; /* Hide all pages by default */
    }
    .page.active {
      display: block; /* Show the active page */
    }

/*-----------------------------------codes of different pages (down)------------------------------------*/

    



     .outer-box
      {
        background: linear-gradient(150deg,#5C74A4,#bec8db);
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        width: 85%;
        margin-inline: auto;
        margin-top: -20px;
        padding: 10px 15px 30px 15px;
        border-top-left-radius: 50px;
      border-top-right-radius: 50px;
      }

    h1
      {
        text-align: center;
        color:#1D3358;
      }
    .inner-box
    {
      background-color: snow;
      border-radius: 30px;
      width: 80%;
      height: 70px;
      padding: 2px;
      display: flex;

    }
     .box1,.box3
     {
      width: 40%;
        border-radius: 30px;
        padding-top: 15px;
        padding-bottom: 5px;
        padding-left: 45px;
        box-sizing: border-box;
        position: relative;
     }
     .box2
     {
      padding-top: 7px;
      padding-right: 20px;
      width: 20%;
      height:80%;
      display: flex;
      justify-content: center;
      align-items: center;
     }
    label
    {
      display: block;
      margin-bottom: 1px;
      font-size: 14px;
      font-weight: bold;
      color:#1D3358;
    }
    input
    {
       font-size: 18px;
       border: none;
       border-bottom: 2px solid #1D3358;
       background: none;
       outline: none;
       transition: all 0.3s ease-in-out; /* Added transition effect */
    }
    input:focus
    {
      border-bottom-color:#ffad33;
    }
    input::placeholder
    {
      color:#5C74A4;
    }
    #voice-search-source, #voice-search-destination
    {
      background: none;
      border-color: transparent;
      position: absolute;
      left:250px;
    }
     .mic{
    height:22px;
    width:22px;
  }
    .search
    {
       width:90%;
       height: 90%;
       padding: 5px;
       border: none;
       border-radius: 30px;
       background-color: #1D3358;
       color: #fff;
       font-weight: bold;
       font-size: 15px;
       cursor: pointer;
       transition: all 0.2s ease-in-out; /* Added transition effect */
        }
    .search:hover {
      background-color: #142b3a; /* Darker background color for the hover effect */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8); /* Increased box-shadow */
    }



    #box3 {
      display: flex;
      border-bottom: 1px solid #5C74A4;
    }

    #b1 {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50%;
      color: #1D3358;
    }

    #b1 h1 {
      font-size: 24px;
    }

    #b2 {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 20%;
      color: #848A9E;
    }

    #b3 {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40%;
      color: #848A9E;
    }

    #box4 {
      display: flex;
      justify-content: space-around;
      padding: 10px;
    }
    #b4 p,#b6 p,#b5 p{
      font-size: 16px;
    }

    #b4 {
      color: #1D3358;
      line-height: 0.2;
    }
    #b4 h2
    {
      text-align: left;
    }
    #b5 {
      line-height: 0.2;
      margin-top: 20px;
      text-align: center;
      color: #848A9E;
    }

    #b6 {
      color: #1D3358;
      line-height: 0.2;
    }


    #result { 
      width: 76%;
      height: auto;
      flex-direction: column;
      border-radius: 15px;
      display: none; /* Initially hidden */
      background-color: whitesmoke;
      padding: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.8);
      margin-top: 20px;
      margin-left: auto; /* Added margin-left */
    }

    .train-box {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: white;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.15);
    }

    .invisible {
      display: none;
    }

    #result p {
      color: #848A9E !important;
    }

    #b3 span {
      background-color: #5C74A4;
      color: white;
      padding: 2px 5px;
      border-radius: 5px;
      margin-right: 5px;
    }

    .sidebar {
     display: none; 
      background-color: whitesmoke;
       box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.8);
        border-radius: 15px;
      color: #092c34;
      font-size: 15px;
/*      border: 2px solid #a2a59d;*/
      position: fixed;
      width: 200px;
      left: 0; /* Shifted to right */
      bottom: 5px;
      top: 130px;
      padding: 10px;
      z-index: 1;
      margin-left: 7.4rem;
      transition: left 0.3s ease; /* Added transition for smooth animation */
    }

    .sidebar div {
      margin-bottom: 10px;
/*      height:30vh;*/
    border-radius:15px;
    font-size:12px;

    
    }

    .journey_type {
      border: 2px solid #ff7f50;
      padding: 5px;
    }

    .journey_type div {
      display: flex;
      align-items: center;
      font-size:12px;
      margin-bottom: 5px;
    }

    .journey_type input[type="checkbox"] {
      margin-right: 10px;
    }

    .rail_types {
      border: 2px solid #b7b7b1;
      padding: 5px;
    }

    .rail_types div {
      display: flex;
      align-items: center;
      font-size:12px;
      margin-bottom: 5px;
    }
    .train-type {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  margin-right: 8px;
  margin-top: -5px;
}

    .color_janshatabdi,
    .color_duronto,
    .color_shatabdi,
    .color_rajdhani,
    .color_special,
    
    .color_other {
      width: 12px;
      height: 12px;
      /*position: relative;
      top: 43px;
      left: 65px;
      background-size: contain;
      background-repeat: no-repeat;*/
      margin-right: 5px;
/*      margin-top: 12px;*/
      border-radius: 50%;
    }

    .color_janshatabdi {
  background-color: darkgreen;
}

.color_rajdhani {
  background-color: red;
}

.color_duronto {
  background-color: #F2CA02;
}
    .color_shatabdi {
      background-color: darkblue;
          }
.color_special {
  background-color: #F18D04;
}
.color_other {
  background-color:#7AEAF9;
}

.colour_janshatabdi,
    .colour_duronto,
    .colour_shatabdi,
    .colour_rajdhani,
    .colour_special,
    
    .colour_other {
      width: 30px;
      height: 30px;
      position: relative;
      top: 43px;
      left: 45px;
      background-size: contain;
      background-repeat: no-repeat;
      border-radius: 50%;
    }

    .colour_janshatabdi {
  background-image: url('greentrain.png');
}

.colour_rajdhani {
  background-image: url('redtrain.png');
}

.colour_duronto {
  background-image: url('yellowtrain.png');
}
    .colour_shatabdi {
      background-image: url('bluetrain.png');
          }
.colour_special {
  background-image: url('orangetrain.png');
}
.colour_other {
  background-image: url('ltbluetrain.png');
}
    .show-sidebar {
  left:0px; /* Adjust as needed */
}



    .outer-box2 {
            background: linear-gradient(150deg,#5C74A4,#bec8db);
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        width: 85%;
        margin-inline: auto;
        margin-top: -20px;
        padding: 10px 15px 30px 15px;
        border-top-left-radius: 50px;
      border-top-right-radius: 50px;
        }

        h1 {
            text-align: center;
            color: #1D3358;
        }

        .inner-box2 {
            background-color: snow;
            border-radius: 30px;
            width: 80%;
            height: 70px;
            padding: 2px;
            display: flex;
        }
        .box12 {
            width: 80%;
            border-radius: 30px;
            padding-top: 15px;
            padding-bottom: 5px;
            padding-left: 45px;
            box-sizing: border-box;
            position: relative;
        }

        .box22 {
            padding-top: 7px;
            padding-right: 20px;
            width: 20%;
            height: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        label {
            display: block;
            margin-bottom: 1px;
            font-size: 14px;
            font-weight: bold;
            color: #1D3358;
        }

        input {
            font-size: 18px;
            border: none;
            border-bottom: 2px solid #1D3358;
            background: none;
            outline: none;
            transition: all 0.3s ease-in-out;
        }

        input:focus {
            border-bottom-color: #ffad33;
        }

        input::placeholder {
            color: #5C74A4;
        }

        #voice-search2 {
            background: none;
            border-color: transparent;
            position: absolute;
            left: 250px;
        }

        .search2 {
            width: 90%;
            height: 90%;
            padding: 5px;
            border: none;
            border-radius: 30px;
            background-color: #1D3358;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .search2:hover {
            background-color: #142b3a;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
        }
         .mic2
         {
             height:22px;
             width:22px;
         }         
        #box32
        {
        display: flex;
        border-bottom: 1.5px solid #848A9E;


        }
        #b12
        {
        display: flex;
          justify-content: center;
          align-items: center;
          width: 60%;
          color:#1D3358;
/*        background-color: yellow;*/
        }        
               
        #b32
        {
        display: flex;
          justify-content: center;
          align-items: center;
          width: 40%;
          color:#848A9E;

/*        background-color: pink;*/
/*         margin-top: 20px;*/
        }
        #box42
        {
       
        display: flex;
        justify-content: space-around;
        padding:10px;
        }
        #b42{
/*        background-color: lightgreen;*/
         color:#1D3358;
        line-height: 0.2;
        }
        #b42 p,#b62 p
        {
          font-size: 16px;
        }
        #b52 p{
          font-size: 16px;
        }
        #b42 h2,#b62 h2{
          text-align: left;
          font-size: 16px;
        }
        #b52{
/*        background-color: coral;*/
        line-height: 0.2;
        margin-top:20px;
        text-align: center;
        color:#848A9E;

        }
        #b62{
/*        background-color: chocolate;*/
          color:#1D3358;
        line-height: 0.2;
        }
         #result2 {
      width: 80%;
      height: 200px;
      flex-direction: column;
      border-radius: 15px;
      
      display: none; /* Initially hidden */
      background-color: whitesmoke;
      padding: 20px; /* Added padding */
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.8); /* Added box shadow */
      margin-top: 20px; /* Added margin top */
    }

    .invisible {
      display: none; /* Class to hide elements */
    }
    #result2 p{
        color:#848A9E !important;
    }
    #symbol{
        color:#5C74A4;
    }
    #b32 span{
        background-color: #5C74A4;
        color:white;
        padding: 2px 5px;
        border-radius: 5px;
/*        justify-content: space-around;*/
        margin-right: 5px;
    }


/*-------------------------------end of page2 css*/

.outer-box3{
        background: linear-gradient(150deg,#5C74A4,#bec8db);
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        width: 85%;
        margin-inline: auto;
        margin-top: -20px;
        padding: 10px 15px 30px 15px;
        border-top-left-radius: 50px;
      border-top-right-radius: 50px;
      }
      h1 {
        text-align: center;
        color:#1D3358;
      }
      .inner-box3 {
        background-color: snow;
        border-radius: 30px;
        width: 80%;
        height: 70px;
        padding: 2px;
        display: flex;
      }
      .box13 {
        width: 40%;
        border-radius: 30px;
        padding-top: 15px;
        padding-bottom: 5px;
        padding-left: 45px;
        box-sizing: border-box;
        position: relative;
      }
      .box23 {
        padding-top: 7px;
        padding-right: 20px;
        padding-left: 320px;
        width: 20%;
        height: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      label {
        display: block;
        margin-bottom: 1px;
        font-size: 14px;
        font-weight: bold;
        color:#1D3358;
      }
      h2{
        text-align: center;
      }
      input {
        font-size: 18px;
        border: none;
        border-bottom: 2px solid #1D3358;
        background: none;
        outline: none;
        transition: all 0.3s ease-in-out;
      }
      input:focus {
        border-bottom-color:#ffad33;
      }
      input::placeholder {
        color:#5C74A4;
      }
      #voice-search3 {
        background: none;
        border-color: transparent;
        position: absolute;
        left: 250px;
      }
      .search3 {
        width: 90%;
        height: 90%;
        padding: 5px;
        border: none;
        border-radius: 30px;
        background-color: #1D3358;
        color: #fff;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }
      .search3:hover {
        background-color: #142b3a;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
      }
      #result3{
        width: 80%;
        height: 200%;
        display: none;
        color:#1D3358;
        font-weight: bold;
      }
      table
    {
      border: 1px solid #ddd;
      border-spacing: 30px;
      border-collapse: collapse;
      width: 100%;
      text-align: justify;
    }
    tr
    {
      border-bottom: 1px solid #ddd;
      color:#1D3358;
    }

    tr:nth-child(odd) 
    {
      background-color: ghostwhite;
    }
    tr:nth-child(even) 
    {
      background-color: #C5D0E7;

    }
    td , th
    {    
      padding: 15px;

    }
    th
    {
      background-color: #5C74A4;
      color:ghostwhite;
    }


      .mic3 {
        height: 22px;
        width: 22px;
        
      }

      .dropdown {
  float: left;
  overflow: hidden;
   
  margin-top: -13px; /* Adjust as needed to move "More" upward */
/*  margin-right: 20px;*/
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
 }
.dropdown:hover .dropbtn, .dropbtn:focus {
  color: var(--accent-orange-color);
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color:#c6d2ec;
  border-radius: 20px;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  font-weight: bold;
  color: var(--accent-dark-color);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
   right: 0; 

}

.dropdown-content a:hover {
  background-color: var(--accent-orange-color);
  border-radius: 20px;
}
.arrow{
  height:12px;
  width:12px;
  transition: filter 0.3s ease;
  
}
.option{
  height:20px;
  width:20px;
}

.show {
  display: block;
}

  </style>
  <script type="text/javascript">
    document.getElementById('mic').addEventListener('click', function () {
        var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
        recognition.lang = 'en-US';

       
        recognition.start();
    });
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</head>
<body>
 
<div class="main-page" id="animate">
  <div class="header" id="header">
    <div class="mbox1">
        <img class="logo" src="logo1.png" alt="logo">
    </div>
    <div class="mbox2">
<h2>HI
     <?php
     

    echo $_SESSION['username'];

?></h2>
    </div>
    <div class="mbox3" id="box3">
    <ul>
    <!-- <li><a href="#">Contact Us</a></li> -->
    <li><a href="#" class="hover-link" id="currentDate"></a></li>
    
    <li><span id="link1" onclick="decreaseFontSize()">A&minus;</span></li>
    <li><span id="link2" onclick="resetFontSize()">A</span></li>
    <li><span id="link3" onclick="increaseFontSize()">A&plus;</span></li>
    <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">More <img class="arrow" src="down-arrow.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="station-code.html"><img  class="option" src="stationcode.png">  Station Code</a>
      <a href="pantry.html"><img  class="option" src="pantry.png">  Pantry</a>
      <a href="platform-locator.html"><img  class="option" src="platformlocator.png">  Platform locator</a>
      <a href="schedules.html"><img  class="option" src="schedule (2).png">  Schedules</a>
    </div>
    </div> 
    </ul>
    </div>
    <div class="mbox4">
      <button class="logout"><a href="main.php" >LOGOUT</a></button>
     
    </div>
  </div>

  <div class="main" id="main">
   
      <div class="main-bar">
        <input type="text" required placeholder="🔍Speak to explore" >        
        <!-- <a href="#"><img src="search.jpg" id="search"></a> -->
        <a href="#"><img src="microphone.png" id="mic"></a>
     
      </div>
     
 
    <h1>INDIAN RAILWAYS</h1>
    <h3>SAFETY  <span class="bars">|</span>  SECURITY  <span class="bars">|</span>  PUNCTUALITY</h3>
  </div>
</div>
<div class="main2">
 <div class="nav">
       <div id="links">
         <a href="#" onclick="showPage('page1')"><img src="search.png" class="option"> Search Train</a>
         <a href="#" onclick="showPage('page2')"><img src="traininfo.png" class="option"> Train-info</a>
         <a href="#" onclick="showPage('page3')"><img src="tickets.png" class="options"> PNR Status</a>
       </div>
  <!-- <div id="results"></div> -->
  </div>
  <div id="page1" class="page">
    <div class="outer-box">
    <h1>Train Lists</h1>
    <div class="inner-box">
      <div class="box1">
        <label for="source">Source Station Code:</label>
        <input type="text" id="source" placeholder="Enter source station code">
        <img src="microphone.png" class="mic" id="voice-search-source">
      </div>
      <div class="box3">
        <label for="destination">Destination station Code:</label>
        <input type="text" id="destination" placeholder="Enter destination station code">
        <img src="microphone.png" class="mic" id="voice-search-destination">
      </div>
      <div class="box2">
        <button onclick="getTrainInfo()" class="search">Get Information</button>
      </div>
    </div>
    <div class="sidebar" id="sidebar">
      <button onclick="speakResultOnClick()">Speak</button>
        <div style="color: orange;text-align: end;padding: 10px;font-weight: 600;cursor: pointer;" onclick="resetFilters()">RESET FILTERS</div>
      
      <!-- <h5 style="text-align: center; padding-top:0px; padding-bottom:0px";>Journey class</h5> -->
       <div class="journey_type" >
        <div>
          <input type="checkbox" id="class1A">
          <label for="class1A">AC First Class(1A)</label>
        </div>
        <div>
          <input type="checkbox" id="class2A">
          <label for="class2A">AC 2 Tier(2A)</label>
        </div>
        <div>
          <input type="checkbox" id="class3A">
          <label for="class3A">AC 3 Tier(3A)</label>
        </div>
        <div>
          <input type="checkbox" id="class2S">
          <label for="class2S">Second Sitting(2S)</label>
        </div>
        <div>
          <input type="checkbox" id="classEC">
          <label for="classEC">Economy Class</label>
        </div>
        <div>
          <input type="checkbox" id="classCC">
          <label for="classCC">AC Chair Car(CC)</label>
        </div>
        <div>
          <input type="checkbox" id="classSL">
          <label for="classSL">Sleeper(SL)</label>
        </div>
        <div>
          <input type="checkbox" id="classGN">
          <label for="classGN">General(GN)</label>
        </div>
      </div>
      <!-- <h5 style="text-align: center";>Train Type</h5> -->
      <div class="rail_types" >
        <div>
          <input type="checkbox" id="typeJanshatabdi">
          <div class="color_janshatabdi"></div>
          <label>Janshatabdi</label>
        </div>
        <div>
          <input type="checkbox" id="typeRajdhani">
          <div class="color_rajdhani"></div>
          <label>Rajdhani</label>
        </div>
        <div>
          <input type="checkbox" id="typeDuronto">
          <div class="color_duronto"></div>
          <label>Duronto</label>
        </div>
        <div>
          <input type="checkbox" id="typeShatabdi">
          <div class="color_shatabdi"></div>
          <label>Shatabdi</label>
        </div>
        <div>
          <input type="checkbox" id="typeSpecial">
          <div class="color_special"></div>
          <label>Special</label>
        </div>
        
         <div>
          <input type="checkbox" id="typeOther">
          <div class="color_other"></div>
          <label>Other</label>
        </div>
        
       
      </div>
      <div class="filter">
        <button onclick="filterTrains()" class="search">Filter Results</button>
      </div>
    </div>
    <div id="result"></div>
  </div>
   
</div>
   <!-- -------------- end of page1------------------- -->


<div id="page2" class="page">
  <div class="outer-box2">
    <h1>Train Information</h1>
    <div class="inner-box2">
        <div class="box12">
            <label for="trainNumber">Train Number</label>
            <input type="text" id="trainNumber" placeholder="Enter train number">
            <img src="microphone.png" class="mic2" id="voice-search2"></img>
        </div>
        <div class="box22">
            <button onclick="getTrainInfoo()" class="search2">Get Information</button>
        </div>
    </div>
    <div id="result2"></div>
  </div>
  
</div>

<div id="page3" class="page">
  <div class="outer-box3">
    <h1>Check PNR Status</h1>
    <div class="inner-box3">
      <div class="box13">
        <label for="trainPNR">PNR Number:</label>
        <input type="text" id="trainPNR" placeholder="Enter PNR Number">
        <img src="microphone.png" class="mic3" id="voice-search3"></img>
      </div>
      <div class="box23">
        <button class="search3" onclick="getTrainPNR()">Check PNR Status</button>
      </div>
    </div>
    <div id="result3"></div>
  </div>
</div>
</div> 
<!-- --------------------------------------------------end of main2*/ -->

  <div class="footer" id="footer">
    <marquee>Disclaimer: Good connection of network🛜 is required .Person should speak clearly and loud📢.</marquee>
    <h4>GET CONNECTED WITH US:

        <a href="#facebook"><img src="facebook.png" id="icon"></a>
        <a href="#youtube"><img src="youtube.png" id="icon"></a>
        <a href="#instagram"><img src="instagram.png" id="icon"></a>
        <a href="#twitter"><img src="twitter.png" id="icon"></a>
        <a href="#telegram"><img src="telegram.png" id="icon"></a>
    </h4>
    <p>Copyright @2024 All Rights Reserved</p>
    <p>Designed By: Nishant, Milandeep, Manraj</p>
  </div>

<script type="text/javascript">
  function increaseFontSize() {
    document.querySelectorAll(".box2, .box3, .main, .footer").forEach(element => {
      element.style.fontSize = "x-large";
    });
  }

  function decreaseFontSize() {
    document.querySelectorAll(".box2, .box3, .main, .footer").forEach(element => {
      element.style.fontSize = "smaller";
    });
    document.getElementById("footer").style.bottom = "-135px";
  }

  function resetFontSize() {
    document.querySelectorAll(".box2, .box3, .main, .footer").forEach(element => {
      element.style.fontSize = "initial";
    });
  }
function getTrainInfoo() {
      const trainNumber = document.getElementById('trainNumber').value;
      const apiUrl = 'https://api.railwayapi.site/api/v1/trains/' + trainNumber;

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error(response.statusText);
          }
          return response.json();
        })
        .then(data => {
          displayTrainInfoo(data.data);
          speakTrainInfoo(data.data);
        })
        .catch(error => {
          console.error('Error:', error);
          document.getElementById('result2').innerHTML = 'Error fetching data';
        });
    }

    function displayTrainInfoo(data) {
      const resultDiv = document.getElementById('result2');

      if (data && data.length > 0) {
        resultDiv.innerHTML = `
          ${data.map(train => `
            <div id="box32">
              <div id="b12">
                <h1>${train.trainNumber} - ${train.trainName}</h1>
              </div>
              <div id="b32">
                ${train.trainRunsOn.sunday ? '<span >S</span>' : 'S'}
                ${train.trainRunsOn.monday ? '<span >M</span>' : 'M'}
                ${train.trainRunsOn.tueday ? '<span>T</span>' : 'T'}
                ${train.trainRunsOn.wednesday ? '<span>W</span>' : 'W'}
                ${train.trainRunsOn.thursday ? '<span >T</span>' : 'T'}
                ${train.trainRunsOn.friday ? '<span >F</span>' : 'F'}
                ${train.trainRunsOn.saturday ? '<span>S</span>' : 'S'}
              </div>
            </div>
            
            <div id="box42">
              <div id="b42">
                <p>${train.stationFrom.stationCode}</p>
                <h2>${train.departureTime}</h2>
                <p>${train.stationFrom.stationName}</p>
              </div>
              <div id="b52"> 
                <p>${train.duration} Duration</p>
                •«———————»•
                <p>${train.numberOfStops} Stops </p>
              </div>
              <div id="b62">
                <p>${train.stationTo.stationCode}</p>
                <h2>${train.arrivalTime}</h2>
                <p>${train.stationTo.stationName}</p>
              </div>
            </div>
          `).join('')}
        `;
        resultDiv.style.display = 'flex'; // Show the result box
        document.querySelector('.inner-box2').classList.add('invisible');
      } 
      else {
        resultDiv.innerHTML = 'No information available for the given train number.';
        resultDiv.style.display = 'none'; // Hide the result box if no data
      }
    }
    function speakTrainInfoo(data) {
        if (data && data.length > 0) {
            const infoToSpeak = data.map(train => `
               Train Number ${train.trainNumber}-${train.trainName}.
                Departs from ${train.stationFrom.stationName} at ${train.departureTime}.
                and arrives at ${train.stationTo.stationName} at ${train.arrivalTime}. with total${train.numberOfStops} intermediate stops
            `).join('\n');

            speakResulto(infoToSpeak);
        }
    }

    function speakResulto(text) {
        var utterance = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utterance);
    }

// functions of search train below
    document.getElementById('voice-search-source').addEventListener('click', function () {
      var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
      recognition.lang = 'en-US';

      recognition.onresult = function (event) {
        var speechResult = event.results[0][0].transcript;
        document.getElementById('source').value = speechResult;  
      };

      recognition.start();
    });

    // Function to handle voice search for destination station
    document.getElementById('voice-search-destination').addEventListener('click', function () {
      var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
      recognition.lang = 'en-US';

      recognition.onresult = function (event) {
        var speechResult = event.results[0][0].transcript;
        document.getElementById('destination').value = speechResult; 
        getTrainInfo(speechResult); 
      };

      recognition.start();
    });

    // Function to fetch train information based on source and destination
    function getTrainInfo() {
      const source = document.getElementById('source').value;
      const destination = document.getElementById('destination').value;
      const apiUrl = `https://api.railwayapi.site/api/v1/trainsBtwStations?fromStation=${source}&toStation=${destination}`;

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          displayTrainInfo(data.data);
          toggleSidebar(); // Show sidebar after data is loaded
        })
        .catch(error => {
          console.error('Error:', error);
          document.getElementById('result').innerHTML = 'Error fetching data';
        });
    }

    // Function to display train information
    function displayTrainInfo(data) {
  const resultDiv = document.getElementById('result');

  if (data && data.length > 0) {
    resultDiv.innerHTML = '';
    data.forEach(train => {
      // Creating HTML for each train
      const trainDiv = document.createElement('div');
      trainDiv.classList.add('train-box');

      // Train type color markup
      let trainTypeClass;
      if (train.trainName.includes('JNSHTBDI') || train.trainName.includes('JANSHATBDI')) {
        trainTypeClass = 'colour_janshatabdi';
      } else if (train.trainName.includes('RAJ') || train.trainName.includes('RAJDHANI')) {
        trainTypeClass = 'colour_rajdhani';
      } else if (train.trainName.includes('DURONTO') || train.trainName.includes('DORONTO')) {
        trainTypeClass = 'colour_duronto';
      } else if (train.trainName.includes('SHTBDI') || train.trainName.includes('SHATBDI') || train.trainName.includes('SHATABDI')) {
        trainTypeClass = 'colour_shatabdi';
      } else if (train.trainName.includes('SPECIAL')) {
        trainTypeClass = 'colour_special';
      } else {
        trainTypeClass = 'colour_other';
      }

      trainDiv.innerHTML = `
        <div class="train-type ${trainTypeClass}"></div>
        <div id="box3">
        <div id="b1">
          <h1>${train.trainNumber} - ${train.trainName}</h1>
        </div>
        <div id="b2">${train.availableClasses}</div>
        <div id="b3">
          ${train.trainRunsOn.sunday ? '<span >S</span>' : 'S'}
          ${train.trainRunsOn.monday ? '<span >M</span>' : 'M'}
          ${train.trainRunsOn.tueday ? '<span>T</span>' : 'T'}
          ${train.trainRunsOn.wednesday ? '<span>W</span>' : 'W'}
          ${train.trainRunsOn.thursday ? '<span >T</span>' : 'T'}
          ${train.trainRunsOn.friday ? '<span >F</span>' : 'F'}
          ${train.trainRunsOn.saturday ? '<span>S</span>' : 'S'}
        </div>
        </div>
        <div id="box4">
          <div id="b4">
            <p>${train.stationFrom.stationCode}</p>
            <h2>${train.stationFrom.departureTime}</h2>
            <p>${train.stationFrom.stationName}</p>
          </div>
          <div id="b5">
            <p>${train.duration} Duration</p>
            •«———————»•
            <p>${train.distance}km </p>
          </div>
          <div id="b6">
            <p>${train.stationTo.stationCode}</p>
            <h2>${train.stationTo.arrivalTime}</h2>
            <p>${train.stationTo.stationName}</p>
          </div>
        </div>
      `;

      resultDiv.appendChild(trainDiv);
    });
    resultDiv.style.display = 'block';
    document.getElementById('sidebar').style.display = 'block'; // Show sidebar
  } else {
    resultDiv.innerHTML = 'No information available for the given train number.';
    resultDiv.style.display = 'none';
    document.getElementById('sidebar').style.display = 'none'; // Hide sidebar
  }
}
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('show-sidebar');
    }

    // Function to filter trains based on checkboxes
    function filterTrains() {
  const checkboxesClass = document.querySelectorAll('.journey_type input[type="checkbox"]:checked');
  const checkboxesType = document.querySelectorAll('.rail_types input[type="checkbox"]:checked');
  const trainBoxes = document.querySelectorAll('.train-box');

  trainBoxes.forEach(trainBox => {
    trainBox.style.display = 'none';
  });

  // If only checkboxes of journey type are selected
  if (checkboxesClass.length > 0 && checkboxesType.length === 0) {
    checkboxesClass.forEach(checkbox => {
      const classId = checkbox.id;
      trainBoxes.forEach(trainBox => {
        const trainClass = trainBox.querySelector('#b2').textContent.trim();
        if (classId === 'class1A' && trainClass.includes('1A')) {
          trainBox.style.display = 'block';
        } else if (classId === 'class2A' && trainClass.includes('2A')) {
          trainBox.style.display = 'block';
        } else if (classId === 'class3A' && trainClass.includes('3A')) {
          trainBox.style.display = 'block';
        } else if (classId === 'class2S' && trainClass.includes('2S')) {
          trainBox.style.display = 'block';
        } else if (classId === 'classEC' && trainClass.includes('EC')) {
          trainBox.style.display = 'block';
        } else if (classId === 'classCC' && trainClass.includes('CC')) {
          trainBox.style.display = 'block';
        } else if (classId === 'classSL' && trainClass.includes('SL')) {
          trainBox.style.display = 'block';
        } else if (classId === 'classGN' && trainClass.includes('GN')) {
          trainBox.style.display = 'block';
        }
      });
    });
  }

  // If only checkboxes of rail type are selected
  if (checkboxesClass.length === 0 && checkboxesType.length > 0) {
    checkboxesType.forEach(checkbox => {
      const typeId = checkbox.id;
      trainBoxes.forEach(trainBox => {
        const trainTypeClass = trainBox.querySelector('.train-type').classList;
        if (
          (typeId === 'typeJanshatabdi' && trainTypeClass.contains('colour_janshatabdi')) ||
          (typeId === 'typeRajdhani' && trainTypeClass.contains('colour_rajdhani')) ||
          (typeId === 'typeDuronto' && trainTypeClass.contains('colour_duronto')) ||
          (typeId === 'typeShatabdi' && trainTypeClass.contains('colour_shatabdi')) ||
          (typeId === 'typeSpecial' && trainTypeClass.contains('colour_special')) ||
          (typeId === 'typeOther' && trainTypeClass.contains('colour_other'))
        ) {
          trainBox.style.display = 'block';
        }
      });
    });
  }

  // If checkboxes of both journey type and rail type are selected
  if (checkboxesClass.length > 0 && checkboxesType.length > 0) {
    checkboxesClass.forEach(journeyCheckbox => {
      checkboxesType.forEach(railCheckbox => {
        const journeyClassId = journeyCheckbox.id;
        const railTypeId = railCheckbox.id;
        trainBoxes.forEach(trainBox => {
          const trainClass = trainBox.querySelector('#b2').textContent.trim();
          const trainTypeClass = trainBox.querySelector('.train-type').classList;
          if (
            ((journeyClassId === 'class1A' && trainClass.includes('1A')) ||
              (journeyClassId === 'class2A' && trainClass.includes('2A')) ||
              (journeyClassId === 'class3A' && trainClass.includes('3A')) ||
              (journeyClassId === 'class2S' && trainClass.includes('2S')) ||
              (journeyClassId === 'classEC' && trainClass.includes('EC')) ||
              (journeyClassId === 'classCC' && trainClass.includes('CC')) ||
              (journeyClassId === 'classSL' && trainClass.includes('SL')) ||
              (journeyClassId === 'classGN' && trainClass.includes('GN'))) &&
            ((railTypeId === 'typeJanshatabdi' && trainTypeClass.contains('colour_janshatabdi')) ||
              (railTypeId === 'typeRajdhani' && trainTypeClass.contains('colour_rajdhani')) ||
              (railTypeId === 'typeDuronto' && trainTypeClass.contains('colour_duronto')) ||
              (railTypeId === 'typeShatabdi' && trainTypeClass.contains('colour_shatabdi')) ||
              (railTypeId === 'typeSpecial' && trainTypeClass.contains('colour_special')) ||
              (railTypeId === 'typeOther' && trainTypeClass.contains('colour_other')))
          ) {
            trainBox.style.display = 'block';
          }
        });
      });
    });
  }

  // Display message if no train available
  const resultDiv = document.getElementById('result');
  const visibleTrainBoxes = document.querySelectorAll('.train-box[style="display: block;"]');
  if (visibleTrainBoxes.length > 0) {
    resultDiv.style.display = 'block';
  } else {
    resultDiv.innerHTML = 'No train available.';
    resultDiv.style.display = 'none';
  }

  const sidebar = document.getElementById('sidebar');
  sidebar.classList.add('show-sidebar');
}
    
    // Function to reset filters
function resetFilters() {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(checkbox => {
    checkbox.checked = false;
  });

  // Display all train-boxes when resetting filters
  const trainBoxes = document.querySelectorAll('.train-box');
  trainBoxes.forEach(trainBox => {
    trainBox.style.display = 'flex';
  });

  const resultDiv = document.getElementById('result');
  if (trainBoxes.length > 0) {
    resultDiv.style.display = 'block';
  } else {
    resultDiv.style.display = 'none';
  }

  const sidebar = document.getElementById('sidebar');
  sidebar.classList.add('show-sidebar');
}
function speakTrainInfo(data) {
    if (data && data.length > 0) {
        let speechText = 'Here are the available trains: ';
        data.forEach((train, index) => {
            speechText += `Train ${index + 1}: `;
            speechText += `${train.trainNumber} - ${train.trainName}, `;
            speechText += `departs from: ${train.stationFrom.stationName}, `;
            speechText += `at ${train.stationFrom.departureTime}, `;
            speechText += ` and arrives in:${train.stationTo.stationName}, `;
            speechText += `at: ${train.stationTo.arrivalTime}. `;
            speechText += `with available classes: ${train.availableClasses}, `;
            
            
            
            
        });

        // Create a SpeechSynthesisUtterance object
        const utterance = new SpeechSynthesisUtterance(speechText);
        utterance.rate = 1.1; // Adjust speech rate as needed

        // Speak the text
        speechSynthesis.speak(utterance);
    } else {
        // If no trains available
        const utterance = new SpeechSynthesisUtterance('No trains available.');
        speechSynthesis.speak(utterance);
    }
}

function speakResultOnClick() {
    const source = document.getElementById('source').value;
    const destination = document.getElementById('destination').value;
    const apiUrl = `https://api.railwayapi.site/api/v1/trainsBtwStations?fromStation=${source}&toStation=${destination}`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            speakTrainInfo(data.data); // Call speak function after data is loaded
        })
        .catch(error => {
            console.error('Error:', error);
            const utterance = new SpeechSynthesisUtterance('Error fetching data.');
            speechSynthesis.speak(utterance);
        });
}
    // ------javascript of page2 ends-------

//function of pnr status starts from here
document.getElementById('voice-search3').addEventListener('click', function () {
      var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
      recognition.lang = 'en-US';

      recognition.onresult = function (event) {
        var speechResult = event.results[0][0].transcript;
        document.getElementById('trainPNR').value = speechResult;
        getTrainPNR();
      };

      recognition.start();
    });

//     function speakInput() {
//   const inputText = document.getElementById('trainPNR').value;
//   if (inputText.trim() !== '') {
//     speakText(`Entered PNR number: ${inputText}`);
//   }
// }

async function getTrainPNR() {
      const pnrNumber = document.getElementById('trainPNR').value;
      const url = `https://real-time-pnr-status-api-for-indian-railways.p.rapidapi.com/name/${pnrNumber}`;
      const options = {
        method: 'GET',
        headers: {
          'X-RapidAPI-Key': '69d47c123cmsh3a04141d42fc768p1e3055jsn4f865e33cdbd',
          'X-RapidAPI-Host': 'real-time-pnr-status-api-for-indian-railways.p.rapidapi.com'
        }
      };

      try {
        const response = await fetch(url, options);
        const result = await response.json();
        displayPNR(result);
        speakResult();
      } catch (error) {
        console.error(error);
      }
    }


function displayPNR(data) {
  const resultDiv = document.getElementById('result3');
  resultDiv.innerHTML = ''; // Clear previous results

  const heading = document.createElement('h2');
  heading.textContent = `Train Number: ${data.trainNum}-${data.trainName}`;
  resultDiv.appendChild(heading);

  const table = document.createElement('table');
  table.innerHTML = `
    <tr>
      <th>Passenger No</th>
      <th>Passenger Name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Ticket Status</th>
    </tr>
  `;

  data.passengerDetailsDTO.forEach(passenger => {
    const row = table.insertRow();
    row.innerHTML = `
      <td>${passenger.serialNo}</td>
      <td>${passenger.displayName}</td>
      <td>${passenger.age}</td>
      <td>${passenger.gender}</td>
      <td>${passenger.seatStts}</td>
    `;
  });

  resultDiv.appendChild(table);
  resultDiv.style.display = 'block';
}

function speakResult() {
  const resultDiv = document.getElementById('result3');
  const trainNumber = resultDiv.querySelector('h2').textContent;
  const passengerRows = resultDiv.querySelectorAll('table tr');
  let passengerInfo = '';

  passengerRows.forEach((row, index) => {
    if (index !== 0) {
      const cells = row.querySelectorAll('td');
      const passengerNumber = cells[0].textContent;
      const passengerName = cells[1].textContent;
      const seatStatus = cells[4].textContent;
      passengerInfo += `Passenger ${passengerNumber}: name:${passengerName}, Seat Status: ${seatStatus}. `;
    }
  });

  speakText(`${trainNumber}. ${passengerInfo}`);
}


function speakText(text) {
  const message = new SpeechSynthesisUtterance();
  message.text = text;
  message.volume = 1;
  message.rate = 1;
  message.pitch = 1;

  window.speechSynthesis.speak(message);
}

document.getElementById('voice-search3').addEventListener('click', function () {
  const recognition = new webkitSpeechRecognition() || new SpeechRecognition();
  recognition.lang = 'en-US';

  recognition.onresult = function (event) {
    const speechResult = event.results[0][0].transcript;
    document.getElementById('trainPNR').value = speechResult;
    getTrainPNR();
  };

  recognition.start();
});
document.getElementById('mic').addEventListener('click', function () {
            // Perform speech-to-text conversion
            if ('webkitSpeechRecognition' in window) {
                const recognition = new webkitSpeechRecognition();
                recognition.lang = 'en-US';
                recognition.onresult = function (event) {
                    const transcript = event.results[0][0].transcript;
                    // console.log('Recognized text:', transcript);

                    const actions = {
                        'searchTrain': ['search train', 'train', 'train search'],
                        'searchStation': ['info'],
                        'pnrStatus': ['pnr status', 'status pnr']
                    };

                    // Match with keywords
                    if (checkKeywords(transcript, actions.searchTrain)) {
                        showPage('page1');
                    } else if (checkKeywords(transcript, actions.searchStation)) {
                        showPage('page2');
                    } else if (checkKeywords(transcript, actions.pnrStatus)) {
                        showPage('page3');
                    } else {
                        alert('No valid command matched.');
                    }
                };
                recognition.start();
            } else {
                console.error('Web Speech API not supported in this browser.');
            }
        });

        function checkKeywords(transcript, keywords) {
            return keywords.some(keyword => transcript.toLowerCase().includes(keyword));
        }
function showPage(pageId) {
  // Hide all pages
  var pages = document.getElementsByClassName("page");
  for (var i = 0; i < pages.length; i++) {
    pages[i].classList.remove("active");
  }

  // Show the selected page
  var pageToShow = document.getElementById(pageId);
  if (pageToShow) {
    pageToShow.classList.add("active");
    // Set the content of the results div to the content of the selected page
    var resultsDiv = document.querySelector('#results');
     
    // resultsDiv.innerHTML = pageToShow.innerHTML;
  }
  runScripts(pageId);
}

function runScripts(pageId) {
  if (pageId === "page1") {
    // Script for page 1
    
    // document.getElementById('voice-search').addEventListener('click', function () {
    //     var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
    //     recognition.lang = 'en-US';

    //     recognition.onresult = function (event) {
    //         var speechResult = event.results[0][0].transcript;
    //         document.getElementById('destination').value = speechResult;  
    //         getTrainInfo(speechResult);
    //     };

    //     recognition.start();
    // });
    // Remaining code for page 1
  }
  else if (pageId === "page2") {
    // Script for page 1
    document.getElementById('voice-search2').addEventListener('click', function () {
        var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
        recognition.lang = 'en-US';

        recognition.onresult = function (event) {
            var speechResult = event.results[0][0].transcript;
            document.getElementById('trainNumber').value = speechResult;  
            getTrainInfoo(speechResult);
        };

        recognition.start();
    });

    

    // Remaining code for page 2
  }
  

}
  function updateDate() {
  const now = new Date();
  const date = now.getDate();
  const month = now.toLocaleString('default', { month: 'long' }); // get the full month name
  const year = now.getFullYear();
  const formattedDate = `${date} ${month}, ${year}`;
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
