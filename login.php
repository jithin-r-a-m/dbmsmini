<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($db,$_POST['user']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user FROM login WHERE user = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['user'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location: invest.php");
      }else {
        $error= 'WRONG PASSWORD ';
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>LOGIN-PAGE</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #000000;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: 600px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -6px;
    bottom: -100px;
}
form{

    height: 600px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 70%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
#signup{
    margin-top: 10px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
#pic{
width: 500px;
height:500px;
margin-top: 1%;
margin-left: 12%;

}
#lo{
  width:250px;
}
.cube {
  margin:3% ;
  position: absolute;
  top: 70vh;
  left: 40vw;
  width: 10px;
  height: 10px;
  border: solid 1px #ebbcff24;
  transform-origin: top left;
  transform: scale(0) rotate(0deg) translate(-50%, -50%);
  animation: cube 12s ease-in forwards infinite;
}
.cube:nth-child(2n) {
  border-color: rgba(188, 188, 246, 0.167) ;
}
.cube:nth-child(2) {
  animation-delay: 2s;
  left: 20vw;
  top: 35vh;
  bottom: 15vh;
}
.cube:nth-child(3) {
  animation-delay: 2s;
  left: 70vw;
  top: 40vh;
  
}
.cube:nth-child(4) {
  animation-delay: 2s;
  left: 55vw;
  top:20vh;
}
.cube:nth-child(5) {
  animation-delay: 8s;
  left: 10vw;
  top: 30vh;
}
.cube:nth-child(6) {
  animation-delay: 10s;
  left: 40vw;
  top: 15vh;
}
.cube:nth-child(7) {
  animation-delay: 10s;
  left:80vw;
 bottom: 100vh;
}
@keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}

    </style>
</head>
<body>
<div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form action="" method="post">
        <h3>Register Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="User id" id="username" name="user" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>

        <button type="submit" name="submit" value="Submit">Log In</button>
        <br>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have an account? <a href="register.php">SIGN-UP</a></p>
     
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
    <div class="lp">
      <img src="img/logo.png" id="lo">
</div>
    <div class="pic">
        <img src="img/warren.jpg" id="pic">
    </div>
    <div class="para">
        <p>
            <font color="white" face="Quicksilver" size="20px"><span id="words">&nbsp;&nbsp;" Price is what you pay,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Value is what you get." </span></font>
       </p>

    </div>
</body>
</html>
