<?php
include('session.php')
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>My Port</title>
 
</head>
<style>
    body {
  margin: 0;
color: black;

font-family: 'Merriweather', serif;

}
*{
  margin: 0;
  padding: 0;
}

.clear{
  clear: both;
}

nav.shift ul li a {
  position:relative;
  z-index: 1;
}
nav.shift ul li a:hover {
  color:black;
}
nav.shift ul li a:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 100%;
  height: 2px;
  content: '.';
  color: transparent;
  background: white;
  visibility: none;
  opacity: 0;
  z-index: -1;
}
nav.shift ul li a:hover:after {
  opacity: 1;
  visibility: visible;
  height: 110%;
}
.first{
 margin:0;
  background-color: black;
  padding: 0;
}
nav {
  width: 100%;
  height: 45px;
  margin: 0 ;
  background: black;
  padding: 0px 0;
  box-shadow: 0px 5px 0px #dedede;
}
nav ul {
  list-style: none;
  text-align: center;
  float: right;
  
}
nav ul li {
  display: inline-block;
  margin-left: 50px;
}
nav ul li a {
  display: block;
  margin-right:2%;
  margin-top:2%;
  padding: 5px;
  text-decoration: none;
  color: white;
  font-weight: 800;
  text-transform: uppercase;

}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #555;
}

#latest{
  
  padding-left: 16%;
  padding-top:1%;
  color:white;
}

.midtwo{
  background-color: #fff
}
.bottom-container{
  background: black;
  padding: 50px 0 20px;
}
.cpr{
  color: white;
  font-size: 1.5rem;
  padding-top: 20px;
  align:center;
}
.footer-link{
  color: white;
  text-decoration: none;
  font-size:1rem;
}
.btn{
  color: #000;
  background-color: #000;
}
#linkt{
    text-decoration: none;
}
.slides{
  width:1000px;
  height:300px;
  margin-left:16%;
  border: 10px solid  ;
  border-image:  linear-gradient(90deg,#00dbde,#fc00ff)1;
  
  box-sizing: border-box;
  display:none;
  
}
#news{
  width:900px;
  height:250px;
  padding-left:5%;
  padding-top:4%;
}
.parent{
  height:400px;
  background:  linear-gradient(90deg,#00dbde,#fc00ff);
  width:100%;


}

.child1{
  display: inline-block;
  padding:40px;
  vertical-align: middle;
  width:200px;
  height:200px;
  margin-left:20%;
  margin-top:4%;
  border-radius:10%;
  background-color:  linear-gradient(110deg,#fdcd3b 60%,#ffed4b 60%);;
 opacity: 0.99;
  transition:1s;
 
}
.child2{
  display: inline-block;
  padding:40px;
  vertical-align: middle;
  width:200px;
  height:200px;
  margin-left:20%;
  margin-top:4%;
  border-radius:10%;
  background-color: linear-gradient(110deg,#fdcd3b 60%,#ffed4b 60%);
  opacity:0.99;
  transition:1s;
  
}

.child1:hover{
  transform:scale(1.3);
  background:white;
  box-shadow:2px 2px 2px #000;
  z-index:2;

}

.child2:hover{
  transform:scale(1.3);
  background:white;
  box-shadow:2px 2px 2px #000;
  z-index:2;

}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.09);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
.hello{
 size:20px;
 padding-top:35%;
 font-weight: 500;
}
    </style>

<body>

            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>

  <nav class="shift">
    <ul>
      <li><a href="#" ><font face="Future Z" size="4px">Home</font></a></li>
      <li><a href="#"><font face="Future Z" size="4px">CONTACT</font></a></li>
      <li><a href="logout.php"><font face="Future Z" size="4px">LOGOUT</font></a></li>
    </ul>
  </nav>

    <div class="first">
      <h1 id="latest"><strong><font face="Cascadia Code SemiBold" size="6px">----latest news-----</font></strong></h1>
      <div class="slides">
        <a href="https://www.msn.com/en-in/news/other/your-pan-will-become-inoperative-from-april-1-if-not-linked-to-aadhaar-faqs/ar-AA16mzpC"
        target="_blank">
          <img src="img/new1w.png" id="news">
        </a>
      </div>
      <div class="slides">
        <a href="https://www.msn.com/en-in/money/markets/mcap-of-7-of-top-10-most-valued-firms-jump-over-rs-1-lakh-crore-tcs-infosys-sparkle/ar-AA16mgx3"  target="_blank">
        <img src="img/new2w.png" id="news">
        </a>
      </div>
      <div class="slides">
        <a href="https://www.msn.com/en-in/money/topstories/bad-news-for-sbi-loan-borrowers-lending-rates-hiked-check-new-rates-here/ar-AA16mFRK">
        <img src="img/news3w.png" id="news">
        </a>
      </div>
    </div>
    <div class='parent'>
  <div class='child1'><p class="hello" align="center"><a href="" id="linkt"><font face="Quicksilver" size="5px" >INVESTING SCHEMES
</p>
</a></div>
  <div class='child2'><p class="hello" align="center"><a href="invest.php" id="linkt">LOAN<br>SCHEMES</a></p></div></font>
</div>

  
  <script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 4000); 
}
</script>
  <div class="bottom-container">
    <p  align="center" ><a class="footer-link" href="" align="center">LinkedIn</a></p>
    <p  align="center"><a class="footer-link" href="">Twitter</a></p>
    <p class="cpr" align="center" >@Harshith-Jithin/miniproject</p>
  </div>
</body>

</html>