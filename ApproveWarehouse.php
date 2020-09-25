<!doctype html>
<html lang="en">

  <head>
    <title>Cargo Dapp &mdash; Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href="./css/style2.css" rel="stylesheet" type="text/css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--for approve table  -->
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">cargodapp@gmail.com </span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+91 8547896057</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

              </div>

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center position-relative">


    <div class="site-logo">
      <a href="index.php" class="text-black"><span class="text-primary">Cargo DAPP</a>
    </div>

    <div class="col-12">
      <nav class="site-navigation text-right ml-auto " role="navigation">

        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
          <li><a href="index.php" class="nav-link">Home</a></li>
          <li><a href="ManageAdmin.php" class="nav-link">Data To Blockchain</a></li>


          <li class="has-children">
            <a href="#about-section" class="nav-link">Approve</a>
            <ul class="dropdown arrow-top">
              <li><a href="ApproveWarehouse.php" class="nav-link">Warehouse</a></li>
              <li><a href="ApproveBranch.php" class="nav-link">Branch</a></li>
              <li><a href="ApproveStaff.php" class="nav-link">Staff</a></li>
            </ul>
          </li>

          <li><a href="Cargo.php" class="nav-link">Cargo</a></li>
          <li><a href="Cargoprocess.php" class="nav-link">CargoDappProcessing</a></li>
          <li class="has-children">
            <a href="#registration-section" class="nav-link">Registration</a>
            <ul class="dropdown arrow-top">
              <li><a href="BranchRegistration.php" class="nav-link">Branch Registration</a></li>
              <li><a href="WarehouseRegistration.php" class="nav-link">Warehouse Registration</a></li>
            </ul>
          </li>

         <li>
            <a href="Backend/Login.php" class="nav-link">
              <input type="submit" class="btn btn-primary text-white px-4" value="Login">
            </a>
         </li>

        </ul>
      </nav>

    </div>

    <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

  </div>
</div>

</header>
      

      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('https://source.unsplash.com/pSyfecRCBQA/1920x780')">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h1>Approve Warehouse</h1>
                     <?php
                        include('connection.php');

                        $query = "select * from login where domain='warehouse' and flag='0'";
                        $result = mysql_query($query);
                        if (!$result)
                        {
                        $message = 'ERROR:' . mysql_error();
                        return $message;
                        }
                        else
                        {
                        $i = 0;
                        echo '<table id="customers" border=1 align=center><tr>';
                        while ($i < mysql_num_fields($result))
                        {
                          $meta = mysql_fetch_field($result, $i);
                          echo '<th>' . ucfirst($meta->name) . '</th>';
                          $i = $i + 1;
                        }
                        echo '<th>Approve</th><th>Delete</th></tr>';
                        $i = 0;
                        while ($row = mysql_fetch_row($result))
                        {
                          echo '<tr>';
                          $count = count($row);
                          $y = 0;
                          $idval='1';
                          while ($y < $count)
                          {
                          $c_row = current($row);
                          if($y==0)
                            $idval=$c_row;
                          if($y==1)
                            $c_row="****";
                          echo '<td>' . $c_row . '</td>';
                          next($row);
                          $y = $y + 1;
                          }
                          echo '<td><a href=approveWarehouse1.php?id='.$idval.'>Approve</a></td>
                          <td><a href=deleteWarehouse.php?id='.$idval.'>Delete</a></td>';
                          echo '</tr>';
                          $i = $i + 1;
                        }
                        echo '</table>';
                        mysql_free_result($result);
                        }
                        mysql_close ($con);

                     ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- END .ftco-cover-1 -->
    
       
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
            </div>
          </form>
          </div>
        </div>
       
        <!-- kjhgfdfghjkjhg -->
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Cargo Dapp</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>


  </body>

</html>
