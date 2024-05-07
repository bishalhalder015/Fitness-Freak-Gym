<!DOCTYPE html>
<html>
<head>
  <title>Fitness Freak</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  *{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    html {
        height: 100%;
        }
        body {
        margin:0;
        padding:0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
        }
        body {
            width:100%;
                  height:100vh;
                  background-image:linear-gradient(rgba(0, 0, 0, 0.164),rgba(0, 0, 0, 0.164)),url(img/bk.jpeg);
                  background-size:cover;
                  background-attachment: fixed;
          }
          .container {
            width: 500px;
            margin: 0 auto;
            margin-top: 200px;
            background-color: rgba(255, 255, 255, 0);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
          .list ul li{
            float:right;
            display:inline-block;
            font-size:18px;
            padding-right:10px;
            padding-top:25px;
          }
          .list ul li a{
            text-decoration:none;
            padding:5px 16px;
            color:rgb(255, 255, 255);
            border:1px solid;
            border-radius:2px;
          
          }
          .list ul li a:hover{
            background-color: #d40e0e;
            color:black;
            transition:0.75s;
              
          }
          ul li.Signup a{
            background-color: rgb(255, 255, 255);
            color: black;
          
          }
        .signup {
        position: absolute;
        top: 55%;
        left: 35%;
        width: 700px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
        }
        .signup h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
        }
        .signup .user-box {
        position: relative;
        }
        .signup .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        }
        .signup .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
        }
        .signup .user-box input:focus ~ label,
        .signup .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #d40e0e;
        font-size: 12px;
      
        }
        .signup form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #d40e0e;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        margin-top: 40px;
        letter-spacing: 4px
        }
        .signup a:hover {
        background: #d40e0e;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #d40e0e,
        0 0 25px #d40e0e,
        0 0 50px #d40e0e,
        0 0 100px #d40e0e;
        }
        .signup a span {
        position: absolute;
        display: block;
        }
        .signup a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #d40e0e);
        animation: btn-anim1 1s linear infinite;
        }
        @keyframes btn-anim1 {
        0% {
        left: -100%;
        }
        50%,100% {
        left: 100%;
        }
        }
        .signup a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #d40e0e);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
        }
        @keyframes btn-anim2 {
        0% {
        top: -100%;
        }
        50%,100% {
        top: 100%;
        }
        }
        .signup a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #d40e0e);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
        }
        @keyframes btn-anim3 {
        0% {
        right: -100%;
        }
        50%,100% {
        right: 100%;
        }
        }
        .signup a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #d40e0e);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
        }
        @keyframes btn-anim4 {
        0% {
        bottom: -100%;
        }
        50%,100% {
        bottom: 100%;
        }
        }
       
</style>
</head>
<body>
<div class="list" >
  <ul>
      <li><a href="aboutus.html">About us</a></li>
      <li class="Signup"><a href="#">Signup</a></li>
          <li><a href="login.php">Login</a></li>
              <li><a href="home.html">Home</a></li>
                  

  </ul>
              </div>
<div class="signup">
<h2 >Signup</h2>
<form>
  <div class="user-box">
    <input type="text" name="t1" required>
    <label>First name</label>
    <div class="user-box">
      <input type="text" name="t2" required>
      <label>Last name</label>
<div class="user-box">
<input type="text" name="t3" required>
<label>Username</label>
</div>
<div class="user-box">
  <input type="text" name="t4" required>
  <label>Email</label>
  </div>
  <div class="user-box">
    <input type="number" name="t5" required>
    <label>Contact Number</label>
    </div>
<div class="user-box">
<input type="password" name="t6" required>
<label>Password</label>
</div>
<div class="user-box">
  <input type="password" name="t7" required>
  <label>Confirm Password</label>
  </div>
<a href="#">
<span></span>
<span></span>
<span></span>
<span></span>
<input type="submit" name="s1" value="submit" />
</a>
</form>

</div>
<?php
if(isset($_POST['s1']))
{
$servername="localhost";
$username="root";
$password="bishal123";
$database="minorproj";
$conn=mysqli_connect($servername,$username,$password,$database);
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$uname=$_POST['t3'];
$uemail=$_POST['t4'];
$unum=$_POST['t5'];
$pass=$_POST['t6'];
$ins="insert into signup values('$fname','$lname',$uname,'$uemail',$unum,'$pass')";
mysqli_query($conn,$instr);
header('Location:login.php');
}
?>
</body>
</html>