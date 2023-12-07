<?php
   include("config.php");
   session_start();
   if(isset($_POST['submit']))
{     
    $userid = $_POST['userid'];
    $pass = $_POST['pass'];
     $name = $_POST['name'];
     $dbo = $_POST['dbo'];

  $check = "select * from register where userid='$userid'";
  $checkk = mysqli_query($db, $check);
  if (mysqli_num_rows($checkk)> 0) {
    $message = "USER-ID EXISTS";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
  }else{
    $sql = "INSERT INTO register (userid,pass,name,phno,dbo)
     VALUES ('$userid','$pass','$name','$phno','$dbo')";
    $sqll = mysqli_query($db, $sql);
    $sql = "INSERT INTO login(user,pass) values ('$userid','$pass')";
    if (mysqli_query($db, $sql)) {
      
        echo "hi";
      header("Location: login.php");
    } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
  }
     mysqli_close($db);
}
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background:  linear-gradient(90deg,#00dbde,#fc00ff);
  height: 100vh;
  overflow: hidden;
}
.info{
    position: absolute;
    top:30%;
    left:5%;
}
#cc{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 220;
    font-size:50px;
}
#pc{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
    width:600px;

}

.center{
  position: absolute;
  top: 50%;
  left: 83%;
  transform: translate(-50%, -50%);
  width: 600px;
  background: white;
  border-radius: 50px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  opacity: 0.8;
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 30px;
}
.txt_field input{
  width: 50%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 80%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  margin-left:10%;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}
  .cube {
  margin:3% ;
  position: absolute;
  top: 70vh;
  left: 40vw;
  width: 10px;
  height: 10px;
  border: solid 1px white;
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
  left: 10vw;
  top: 40vh;
  
}
.cube:nth-child(4) {
  animation-delay: 2s;
  left: 15vw;
  top:90vh;
}
.cube:nth-child(5) {
  animation-delay: 8s;
  left: 80vw;
  top: 30vh;
}
.cube:nth-child(6) {
  animation-delay: 10s;
  left: 80vw;
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
#lo{
  width:250px;
}
</style>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
  <div class="lp">
      <img src="img/LOGO BLACK.png" id="lo">
</div>
  <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
   <div class="info">
   <p id="cc">What is financial advisory?</p>
    <br>
    <p id="pc"  align="justify">A financial advisor provides financial advice or guidance to customers for compensation.<br>
  Providing many different services, such as investment management, loan schemes, and Tax planning.
<br>
Financial freedom is having enough residual income to cover your living expenses.<br>
It is not about being rich and having tons of money, but having enough to cover your 
expenses so that you can spend your precious time doing what you like rather than doing things just to earn money.
<br>This can be achieved only when you are prepared for it. All you need is a little financial planning.</p> 


   </div>
    <div class="center">
      <h1>REGISTER</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text"  name="name" required >
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="text"  name="userid" required>
          <span></span>
          <label>Userid</label>
        </div>
        <div class="txt_field">
          <input type="Date"  name="pass"  required>
          <span></span>
          <label></label>
        </div>
        <div class="txt_field">
          <input type="password"  name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Register" name="submit">
        <div class="signup_link">
          Already a member? <a href="index.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
