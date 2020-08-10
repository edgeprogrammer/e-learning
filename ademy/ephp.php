   <!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edge Programmers</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Animated Headlines -->
    <link rel="stylesheet" href="assets/css/plugins/animated-headlines.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.min.css">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="assets/css/plugins/jquery.datetimepicker.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/c3f6b2e7b3b0274df7fc17212/51b7d57ec8034929de7a5f316.js");</script>
</head>
    <body>
        <?php 
        include('header.php');?>
            <?PHP
                $conn = mysqli_connect("localhost",'root','','admin');
                    if($conn)
                    {
                        echo "Connection  Established...!";
                    }
                    $val = $_GET['id'];

                    switch ($val) {}

                    // grocery section

                    #case 'G1':

            ?>
            <section class="products-area pt-100 pb-70">
                <div class="container">
                  <div class="section-title">
                      <span class="sub-title">See Php E-Lectures</span>
                      <h2>ALL PHP E-LECTURES</h2>
                  </div>
                  <div class="row">
                  <!-- product start -->
                  <?PHP
                  $sql = "SELECT * FROM electure WHERE gsubCategory='cakephp'";
                  $result  = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                   while ($row = mysqli_fetch_assoc($result) )
                    {
                      ?>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="ephp.php?id=<?PHP echo $row['id']; ?>">
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['eimg']."' class='main-image' alt='image'/> </td>"; ?>
                                </a>
                            </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['id']; ?>"> <?PHP echo $row['gdesc']; echo "&nbsp;(".$row['gcategory'].")"; ?></a></h3>
                      <!--         <div class="price">
                                <span class="new-price"> Available </span>
                              </div>
                       -->         <a href="github.com" class="add-to-cart">Watch Full Video</a>
                          </div>
                        </div>
                      </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="ephp.php?id=<?PHP echo $row['id']; ?>">
                                  <?PHP echo "<td> <img src='data:image;base64,".$row['eimg']."' class='main-image' alt='image'/> </td>"; ?>
                                </a>
                            </div>
                          <div class="products-content">
                              <h3><a href="product-type.php?id=<?PHP echo $row['id']; ?>"> <?PHP echo $row['gdesc']; echo "&nbsp;(".$row['gcategory'].")"; ?></a></h3>
                      <!--         <div class="price">
                                <span class="new-price"> Available </span>
                              </div>
                       -->         <a href="github.com" class="add-to-cart">Watch Full Video</a>
                          </div>
                        </div>
                      </div>
                  
                  <?php
                      }
                    }
                   ?>
                  <!-- product end -->
                  </div>
                </div>
              </section>

<?php include('footer.php');?>
</body>
</html>
