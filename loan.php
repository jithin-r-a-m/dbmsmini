<?php
   include("config.php"); 
   session_start();
   $user= $_SESSION['login_user'];
   $port="Select plan,l_typef,l_nof,l_money,tenure from loan where userid='$user'";
  $portf = mysqli_query($db, $port);
if(isset($_POST['l'])){

  $userid = $_SESSION['login_user'];
$check ="select * from loan where userid='$userid' and l_nof='l1'";
    $checkk = mysqli_query($db, $check);
        if (mysqli_num_rows($checkk) > 0) {
        echo "Loan exists";
        }
        else{
          $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','Canara bank','Personal loan','l1',100000,2)";
            $message = "LOAN APPLIED";
            echo "<script type='text/javascript'>alert('$message');</script>";
            if (mysqli_query($db, $sql)) {
      echo "success";
            } else {
              echo "Error: " . $sql . ":-" . mysqli_error($db);
            }
        }

mysqli_close($db);
}
if(isset($_POST['ll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l2'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','SBI','Personal loan','l2',150000,3)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }
  if(isset($_POST['lll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l3'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','Indus','Personal loan','l3',100000,4)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }
  if(isset($_POST['llll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l4'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','SBI housing','Home loan','l4',10000000,20)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }
  if(isset($_POST['lllll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l5'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','Kotak housing','Home loan','l5',500000,15)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }
  if(isset($_POST['llllll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l6'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','Axis housing','Home loan','l6',1500000,15)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }

  if(isset($_POST['lllllll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l7'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','Indus sl','Student loan','l7',1000000,6)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }

  if(isset($_POST['llllllll'])){

    $userid = $_SESSION['login_user'];
  $check ="select * from loan where userid='$userid' and l_nof='l8'";
      $checkk = mysqli_query($db, $check);
          if (mysqli_num_rows($checkk) > 0) {
          echo "Loan exists";
          }
          else{
            $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','HDFC sl','Student loan','l8',500000,4)";
              $message = "LOAN APPLIED";
              echo "<script type='text/javascript'>alert('$message');</script>";
              if (mysqli_query($db, $sql)) {
        echo "success";
              } else {
                echo "Error: " . $sql . ":-" . mysqli_error($db);
              }
          }
  
  
  
  mysqli_close($db);
  }

if (isset($_POST['lllllllll'])) {

    $userid = $_SESSION['login_user'];
    $check = "select * from loan where userid='$userid' and l_nof='l9'";
    $checkk = mysqli_query($db, $check);
    if (mysqli_num_rows($checkk) > 0) {
        echo "Loan exists";
    } else {
        $sql = "INSERT INTO loan (userid,plan,l_typef,l_nof,l_money,Tenure) VALUES('$userid','Axis sl','Student loan','l9',500000,6)";
        $message = "LOAN APPLIED";
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

<!DOCTYPE html><html><head><meta charset="utf-8"/>

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>



  <title>LOAN-PAGE</title>


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>

  <link href="css/style.css" rel="stylesheet"/>

  <link href="css/responsive.css" rel="stylesheet"/>
  
  <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
  <div class="hero_area">

    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.html">
                <span>
                 INVEST AND INTEREST
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">Investing schemes </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">logout </a>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
  
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      BEST <br/>
                     PERSONAL LOAN <br/>
                      
                    </h1>
                    <p>
                     Get your profile reviewed and choose from more than 25+ banks the best personal loan with low interest rates.
                     <br>There are many banks providing low interest with profiles having 750+ cbil score.

                    </p>
            
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      BEST <br/>
                      HOUSING LOAN<br/>
                      
                    </h1>
                    <p>
                    NEW : Home Loan Top Up is a facility offered by most banks and NBFCs that allows existing customers to borrow a certain amount above and over the existing home loan.
                    <br> Home Extension/Renovation Loans:
                    <br> Home loans for extension or renovation of home are offered to borrowers who wish to renovate/extend their existing house/property. 
                    </p>
            
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                     BEST <br/>
                    STUDENT LOAN <br/>
                    </h1>
                    <p>
                    Looking For Effortless Way To Secure The Best Education Loan? 
                    <br> 100% Finance To All Your Expenses. UniCreds Covers Fees, Travel, Living & Other Costs.
Flexible Repayment Option · Lowest Interest Rate · Collateral Free Loans
                    </p>
                 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
   
  </div>
  <h2 id="tt">PERSONAL LOAN</h2></div>
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
                  <h4>CANARA PERSONAL LOAN</h4>
                  <p>Tenure - 2 years<br>Rate - 10.5%<br>Amount - 100000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="l" >
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
                  <h4>SBI PERSONAL LOAN</h4>
                  <p>Tenure - 3 years<br>Rate - 10%<br>Amount - 150000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="ll">
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
                  <h4>INDUS PERSONAL LOAN</h4>
                  <p>Tenure - 4 years<br>Rate - 9.80%<br>Amount - 100000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="lll">
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2 id="tt">HOME LOAN</h2></div>
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
                  <h4>SBI HOUSING</h4>
                  <p>Tenure - 20 years<br>Rate - 8.7%<br>Amount - 10000000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="llll" >
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
                  <h4>KOTAK HOUSING</h4>
                  <p>Tenure - 15 years<br>Rate - 6.50%<br>Amount - 5000000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="lllll">
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
                  <h4>AXIS HOUSING</h4>
                  <p>Tenure - 15 years<br>Rate - 8.50%<br>Amount - 15000000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="llllll">
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2 id="tt">STUDENT LOAN</h2></div>
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
                  <h4>Indus Bank Student Loan</h4>
                  <p>Tenure - 6 years<br>Rate - 6.9%<br>Amount - 1000000</p>
                  <form method="post" >
                  <input class="buttoncheck" type = "submit" value = "ADD" name="lllllll" >
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
                  <h4>HDFC Sudent Loan</h4>
                  <p>Tenure - 4 years<br>Rate - 6%<br>Amount - 500000</p>
                  <form method="post" >
              
                  <input class="buttoncheck" type = "submit" value = "ADD" name="llllllll">
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
                  <h4>AXIS STUDENT LOAN</h4>
                  <p>Tenure - 4 years<br>Rate - 5.8%<br>Amount - 500000</p>
                  <form method="post" >
                    
                  <input class="buttoncheck" type = "submit" value = "ADD" name="lllllllll">
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<div class="port">
      <h2 id="portfolio">MY LOAN PORTFOLIO</h2>
      <table class="styled-table">

        <thead>
          <tr>
            <th>PLAN</th>
            <th>TYPE OF LOAN</th>
            <th>SCHEME NO.</th>
            <th>MONEY BORROWED</th>
            <th>TENURE<th>
    </thead>
    <?php
              while($rows=mysqli_fetch_assoc($portf)){
             ?> 
    <tbody>
       <tr>
        <td><?php echo $rows['plan']; ?></td>
        <td><?php echo $rows['l_typef']; ?></td>
        <td><?php echo $rows['l_nof']; ?></td>
        <td><?php echo $rows['l_money']; ?></td>
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

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <style>
    input[type="submit"]{
  width: 30%;
  height: 50px;
  border: 0px solid rgb(54, 99, 234);
  background: orange;
  border-radius: 30px;
  font-size: 18px;
  color: #000000;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  margin-top:10%;
  
}
input[type="submit"]:hover{
  border-color: #2f00ff;
  transition: .5s;
}
#tt{
    margin-left:3%;
    color:blue;
  
}
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
    </style>
  </html>