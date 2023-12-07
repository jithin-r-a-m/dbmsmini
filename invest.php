<?php
   include("config.php");
   
   session_start();
   $user= $_SESSION['login_user'];
 $port="Select plan,i_typef,i_nof,i_money,tenure from invest where userid='$user'";
$portf = mysqli_query($db, $port);
if(isset($_POST['a'])){

  $userid = $_SESSION['login_user'];
$check ="select * from invest where userid='$userid' and i_nof='i1'";
    $checkk = mysqli_query($db, $check);
        if (mysqli_num_rows($checkk) > 0) {
            $m = "Already added";
            echo "<script type='text/javascript'>alert('$m');</script>";
        }
        else{
          $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Axis MD','MD','i1',1000,5)";
            $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
            echo "<script type='text/javascript'>alert('$message');</script>";
            if (mysqli_query($db, $sql)) {
      echo "success";
            } else {
              echo "Error: " . $sql . ":-" . mysqli_error($db);
            }
        }



mysqli_close($db);
}
if(isset($_POST['aa'])){

$userid = $_SESSION['login_user'];
$check ="select * from invest where userid='$userid' and i_nof='i2'";
    $checkk = mysqli_query($db, $check);
        if (mysqli_num_rows($checkk) > 0) {
            $m = "Already added";
            echo "<script type='text/javascript'>alert('$m');</script>";
        }
        else{
          $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Uti MD','MD','i2',1000,5)";
            $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
            echo "<script type='text/javascript'>alert('$message');</script>";
            if (mysqli_query($db, $sql)) {
      echo "success";
        

            } else {
              echo "Error: " . $sql . ":-" . mysqli_error($db);
            }
        }
mysqli_close($db);
}
if(isset($_POST['aaa'])){
$userid = $_SESSION['login_user'];
$check ="select * from invest where userid='$userid' and i_nof='i3'";
$checkk = mysqli_query($db, $check);
    if (mysqli_num_rows($checkk) > 0) {
        $m = "Already added";
        echo "<script type='text/javascript'>alert('$m');</script>";
    }
    else{
      $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Sbi MD','MD','i3',1500,10)";
        $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
        echo "<script type='text/javascript'>alert('$message');</script>";
        if (mysqli_query($db, $sql)) {
  echo "success";
    

        } else {
          echo "Error: " . $sql . ":-" . mysqli_error($db);
        }
    }
mysqli_close($db);
}
if(isset($_POST['aaaa'])){
$userid = $_SESSION['login_user'];
$check ="select * from invest where userid='$userid' and i_nof='i4'";
$checkk = mysqli_query($db, $check);
    if (mysqli_num_rows($checkk) > 0) {
        $m = "Already added";
        echo "<script type='text/javascript'>alert('$m');</script>";
    }
    else{
      $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Kotak MD','MD','i4',2000,2)";
        $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
        echo "<script type='text/javascript'>alert('$message');</script>";
        if (mysqli_query($db, $sql)) {
  echo "success";
    

        } else {
          echo "Error: " . $sql . ":-" . mysqli_error($db);
        }
    }
mysqli_close($db);
}
if(isset($_POST['b'])){
  $userid = $_SESSION['login_user'];
  $i_money = $_POST['m'];
  $check ="select * from invest where userid='$userid' and i_nof='i5'";
  $checkk = mysqli_query($db, $check);
      if (mysqli_num_rows($checkk) > 0) {
          $m = "Already added";
          echo "<script type='text/javascript'>alert('$m');</script>";
      }
      else{
        $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Fincare FD','FD','i5','$i_money',3)";
          $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
          echo "<script type='text/javascript'>alert('$message');</script>";
          if (mysqli_query($db, $sql)) {
    echo "success";
          } else {
            echo "Error: " . $sql . ":-" . mysqli_error($db);
          }
      }
  mysqli_close($db);
  }
  if(isset($_POST['bb'])){
    $userid = $_SESSION['login_user'];
    $i_money = $_POST['mm'];
    $check ="select * from invest where userid='$userid' and i_nof='i6'";
    $checkk = mysqli_query($db, $check);
        if (mysqli_num_rows($checkk) > 0) {
            $m = "Already added";
            echo "<script type='text/javascript'>alert('$m');</script>";
        }
        else{
          $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Shriram FD','FD','i6','$i_money',5)";
            $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
            echo "<script type='text/javascript'>alert('$message');</script>";
            if (mysqli_query($db, $sql)) {
      echo "success";
        
    
            } else {
              echo "Error: " . $sql . ":-" . mysqli_error($db);
            }
        }
    mysqli_close($db);
    }
    if(isset($_POST['bbb'])){
      $userid = $_SESSION['login_user'];
      $i_money = $_POST['mmm'];
      $check ="select * from invest where userid='$userid' and i_nof='i7'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
              $m = "Already added";
              echo "<script type='text/javascript'>alert('$m');</script>";
          }
          else{
            $sql = "INSERT INTO invest (userid,plan,i_typef,i_nof,i_money,Tenure) VALUES('$userid','Canara FD','FD','i7','$i_money',3)";
              $message = "IVESTMENT ADDED TO YOUR PORTFOILIO";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
          
      
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
      mysqli_close($db);
      }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Investment</title>

    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


   
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


</head>

<body>


  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
         
            <a href="index.php" class="logo">
              <h4>INVEST & INTEREST</h4>
            </a>
           
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#features">Mutual funds</a></li>
              <li class="scroll-to-section"><a href="#about">Fixed deposit</a></li>
              <li ><a href="logout.php">Log-out</a></li>
              <li class="scroll-to-section"><div class="main-blue-button"><a href="loan.php">BORROW</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
          
          </nav>
        </div>
      </div>
    </div>
  </header>


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Active users:</h6>
                      <h4>200+</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Invested:</h6>
                      <h4>30lac</h4>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="info-stat">
                      <h6>Rating:</h6>
                      <h4>9.2</h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>Invest &amp; Grow <br>gain Financial Freedom</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                      <a href="#invest">INVEST NOW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/br.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="features section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="first-number number">
                    <h6>01</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Axis Bluechip Fund</h4>
                  <div class="line-dec"></div>
                  <p>Scheme no.1<br>Return rate - 15%<br>Invest -1000/per month<br>Risk - Very high<br>Cap - Equity(90.57%) / Debt(9.43%)</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="a">
</form>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>UTI Flexi Cap Fund</h4>
                  <div class="line-dec"></div>
                  <p>Scheme no.2<br>Invest -1000/per month<br>Return rate - 16%<br>Risk - High<br>Cap - Equity(88%) / Debt(12%)</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="aa">
</form>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>SBI Small Cap Fund</h4>
                  <div class="line-dec"></div>
                  <p>Scheme no.3<br>Invest -1500/per month<br>Return rate - 16%<br>Risk - High<br>Cap - Equity(85%) / Debt(15%)</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="aaa">
</form>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Kotak Equity Fund</h4>
                  <div class="line-dec"></div>
                  <p>Scheme no.2<br>Invest -2000/per month<br>Return rate - 16%<br>Risk - High<br>Cap - Equity(89%) / Debt(11%)</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="aaaa">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="skills-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="progress" data-percentage="90">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        90%<br>
                        <span>Rating</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="progress" data-percentage="10">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        10%<br>
                        <span>Risk</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="progress" data-percentage="80">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        80%<br>
                        <span>Return rate</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item last-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="progress" data-percentage="70">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        70%<br>
                        <span>Critic rating</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>Fixed Deposit</h6>
            <h2>Be <em>Smart</em> &amp; let the money<span> work for you.</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>3.5% - 8%</h4>
                <h6>Intrest rate</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>45</h4>
                <h6>people out 100 prefer FD</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>80+</h4>
                <h6>FD schemes</h6>
              </div>
            </div>
          </div>
          <p><a rel="nofollow" href="https://templatemo.com/tm-563-seo-dream" target="_parent"></a> Fixed deposit is a safe investment
             option that guarantees consistent interest rates, special interest rates for senior citizens, various interest payment options, and
              no market-related risks, with income tax deductions. It is important to compare the latest fixed deposit rates among leading banks 
              in the country before opening a new fixed deposit or renewing an existing one. 
            Here are the latest fixed deposit rates for the year 2023.</p>
          <div class="main-green-button"><a href="#invest">INVEST</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Fincare FD</h4>
                  <p>Tenure - 3 years<br>Rate of return - 7.19%</p>
                  <form method="post" >
                  <input type="text"  placeholder="Enter the amount" name="m" required style="border-radius:30px;">
                  <input class="buttoncheck" type = "submit" value = "ADD" name="b" >
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Shriram city FD</h4>
                  <p>Tenure - 5 years<br>Rate of return - 7.76%</p>
                  <form method="post" >
                  <input type="text"  placeholder="Enter the amount" name="mm" required style="border-radius:30px;">
                  <input class="buttoncheck" type = "submit" value = "ADD" name="bb">
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Canara Bank FD</h4>
                  <p>Tenure - 3 years<br>Rate of return - 6.50%</p>
                  <form method="post" >
                    <input type="text"  placeholder="Enter the amount" name="mmm" required style="border-radius:30px;">
                  <input class="buttoncheck" type = "submit" value = "ADD" name="bbb">
</form>
                </div>
              </div>
            </div>
          </div>
        </div>

     <div class="port">
      <h2 id="portfolio">MY INVESTED PORTFOLIO</h2>
      <table class="styled-table">

        <thead>
          <tr>
            <th>PLAN</th>
            <th>TYPE OF INVESTMENT</th>
            <th>SCHEME NO.</th>
            <th>MONEY INVESTED</th>
            <th>TENURE<th>
    </thead>
    <?php
              while($rows=mysqli_fetch_assoc($portf)){
             ?> 
    <tbody>
       <tr>
        <td><?php echo $rows['plan']; ?></td>
        <td><?php echo $rows['i_typef']; ?></td>
        <td><?php echo $rows['i_nof']; ?></td>
        <td><?php echo $rows['i_money']; ?></td>
        <td><?php echo $rows['tenure']; ?></td>
      </tr>
      
       
       <?php
} 
?> </tbody>
</table>
</div>
<center><p>
        © DBMS-MINI HARSHITH-JITHIN
      </p></center>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
<style>
#portfolio{
  padding-left:15%;
}
.port{
  padding-left:25%;
}
 .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
input[type="submit"]{
  width: 50%;
  height: 50px;
  border: 0px solid rgb(54, 99, 234);
  background: #0080ff;
  border-radius: 30px;
  font-size: 18px;
  color: #000000;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  margin-left:5%;
}
input[type="submit"]:hover{
  border-color: #2f00ff;
  transition: .5s;
}
.search{

    width:600px;
    height:200px;
display:flex;
margin-left:30%;
margin-top:2%;
border-radius:5%;
background-color: pink;

}
.ik{
    margin-top:8%;
    margin-left:2%;
padding-left: 35%;
}
.ikb{
    padding-left: 42%;
}
.ikbm{
    padding-left:15%;
}
.buttoncheck{
            background-color: black;
            border: none;
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            margin: 20px 20px;
            cursor: pointer;
            border-radius:10%;
         }
         .buttoncheck:hover {
  background-color: black;
  color: white;
}
</style>
</body>
</html>
