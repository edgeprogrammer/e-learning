<script type="text/javascript">
		function notifyMe() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Hi User , Now you get All notification of edge programmers!");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Hi there!");
      }
    });
  }

  // At last, if the user has denied notifications, and you
  // want to be respectful there is no need to bother them any more.
}
	</script>
<body class="template-color-1" onload="notifyMe()">

    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header_area">
            <div class="header-top_area bg-charcoal_color d-none d-md-block">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="ht-left">
                                <span class="ht-intro font-italic">Welcome to Edge Programmers !</span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ht-right">
                                <ul>
                                    <li class="contuct-number">
                                        <i class="ion-ios-telephone mr-1"></i>
                                        <a href="tel://+91 7237850500">+91 0000000000</a>
                                    </li>
                                    <li class="address">
                                        <i class="ion-ios-location mr-1"></i>
                                        <span>Lucknow(Uttar Pradesh),India</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-xl-3 col-md-4 col-6">
                                    <div class="header-logo">
                                        <a href="index.php">
                                            <img class="img-full" src="assets/images/logo/23.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 position-static d-none d-xl-block">
                                    <div class="main-menu_area d-none d-lg-block">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul>
                                                <li><a href="index.php">Home</a>

                                                </li>
                                                <li><a href="about-us.php">About</a>
                                                                                                   </li>
                                                <li><a href="#">E-Lectures</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="ephp.php">
                                                                <i class="ion-chevron-right"></i>
                                                                php
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ehtml.php">
                                                                <i class="ion-chevron-right"></i>
                                                                HTML
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ecss.php">
                                                                <i class="ion-chevron-right"></i>
                                                                CSS
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="ejavascript.php">
                                                                <i class="ion-chevron-right"></i>
                                                                JAVASCRIPT
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="ebootstrap.php">
                                                                <i class="ion-chevron-right"></i>
                                                                BOOTSTRAP
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="emagento2.php">
                                                                <i class="ion-chevron-right"></i>
                                                              MAGENTO 2
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="elaravel.php">
                                                                <i class="ion-chevron-right"></i>
                                                              Laravel
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="eci.php">
                                                                <i class="ion-chevron-right"></i>
                                                              CI
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href=epython.php>
                                                                <i class="ion-chevron-right"></i>
                                                               Python
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li><a href="#">Tutorials</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="php.php">
                                                                <i class="ion-chevron-right"></i>
                                                                php
                                                            </a>
                                                        </li> 
                                                        <li>
                                                            <a href="html.php">
                                                                <i class="ion-chevron-right"></i>
                                                                HTML
                                                            </a>
                                                        </li>
                                                       
                                                        <li>
                                                            <a href="css.php">
                                                                <i class="ion-chevron-right"></i>
                                                                CSS
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript.php">
                                                                <i class="ion-chevron-right"></i>
                                                                JAVASCRIPT
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="bootstrap.php">
                                                                <i class="ion-chevron-right"></i>
                                                                BOOTSTRAP
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="magento2.php">
                                                                <i class="ion-chevron-right"></i>
                                                              Magento 2
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="laravel.php">
                                                                <i class="ion-chevron-right"></i>
                                                              LARAVEL
                                                            </a>
                                                        </li><li>
                                                            <a href="ci.php">
                                                                <i class="ion-chevron-right"></i>
                                                              CI
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="python.php">
                                                                <i class="ion-chevron-right"></i>
                                                               Python
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            <!--<li><a href="javascript:void(0)">Pages</a>
                                                    <ul class="ademy-dropdown">
                                                        <li class="submenu-holder">
                                                            <a href="faculty-and-staff.php">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff
                                                                <span class="submenu-indicate ion-chevron-right"></span>
                                                            </a>
                                                            <ul class="ademy-dropdown ademy-submenu">
                                                                <li>
                                                                    <a href="profile.php">
                                                                        <i class="ion-chevron-right"></i>
                                                                        Profile
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="faculty-and-staff-2.php">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="coming-soon.php">
                                                                <i class="ion-chevron-right"></i>
                                                                Coming Soon
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="error-404.php">
                                                                <i class="ion-chevron-right"></i>
                                                                404
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-8 d-none d-md-block">
                                    <div class="header-right_area with-radius">
                                        <ul class="social-link">
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="ion-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="ion-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="ion-social-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="skype">
                                                <a href="https://skype.com/" data-toggle="tooltip" target="_blank" title="Skype">
                                                    <i class="ion-social-skype"></i>
                                                </a>
                                            </li>
                                            <li class="search-bar d-none d-lg-inline-block">
                                                <a class="search-btn" href="#">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </li>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="search-body">
                                        <div class="inner-body">
                                            <input class="input-field" type="text" placeholder="Keyword search...">
                                            <button class="inner-btn" value="Search" type="submit">
                                                <i class="ion-ios-search-strong"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-block d-md-none">
                                    <div class="header-right_area with-radius justify-content-end">
                                        <ul>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header_nav row align-items-center">
                                <div class="col-xl-3 col-md-4 col-6">
                                    <div class="header-logo">
                                        <a href="index.php">
                                            <img class="img-full" src="assets/images/logo/23.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 position-static d-none d-xl-block">
                                    <div class="main-menu_area d-none d-lg-block">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul>
                                                <li><a href="index.php">Home</a>

                                                </li>
                                                <li><a href="about-us.php">About</a>

                                                </li>
                                                <li><a href="#">E-Lectures</a>
                                                 <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="ephp.php">
                                                                <i class="ion-chevron-right"></i>
                                                                php
                                                            </a>
                                                        </li>
                                                         <li>
                                                            <a href="ehtml.php">
                                                                <i class="ion-chevron-right"></i>
                                                                HTML
                                                            </a>
                                                        </li>
                                                       
                                                        <li>
                                                            <a href="ecss.php">
                                                                <i class="ion-chevron-right"></i>
                                                                CSS
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="ejavascript.php">
                                                                <i class="ion-chevron-right"></i>
                                                                JAVASCRIPT
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="ebootstrap.php">
                                                                <i class="ion-chevron-right"></i>
                                                                BOOTSTRAP
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="emagento2.php">
                                                                <i class="ion-chevron-right"></i>
                                                              Magento 2
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="elaravel.php">
                                                                <i class="ion-chevron-right"></i>
                                                              Laravel
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="eci.php">
                                                                <i class="ion-chevron-right"></i>
                                                              CI
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="epython.php">
                                                                <i class="ion-chevron-right"></i>
                                                               Python
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li><a href="#">Tutorials</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="php.php">
                                                                <i class="ion-chevron-right"></i>
                                                                php
                                                            </a>
                                                        </li>
                                                         <li>
                                                            <a href="html.php">
                                                                <i class="ion-chevron-right"></i>
                                                                HTML
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="css.php">
                                                                <i class="ion-chevron-right"></i>
                                                                CSS
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript.php">
                                                                <i class="ion-chevron-right"></i>
                                                                JAVASCRIPT
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="bootstrap.php">
                                                                <i class="ion-chevron-right"></i>
                                                                BOOTSTRAP
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="magento2.php">
                                                                <i class="ion-chevron-right"></i>
                                                              MAGENTO 2
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="laravel.php">
                                                                <i class="ion-chevron-right"></i>
                                                              LARAVEL
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ci.php">
                                                                <i class="ion-chevron-right"></i>
                                                              CI
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="python.php">
                                                                <i class="ion-chevron-right"></i>
                                                               Python
                                                            </a>
                                                        </li>

                                                    </ul>

                                                </li>
                                               <!-- <li><a href="javascript:void(0)">Pages</a>
                                                    <ul class="ademy-dropdown">
                                                        <li class="submenu-holder">
                                                            <a href="faculty-and-staff.php">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff
                                                                <span class="submenu-indicate ion-chevron-right"></span>
                                                            </a>
                                                            <ul class="ademy-dropdown ademy-submenu">
                                                                <li>
                                                                    <a href="profile.php">
                                                                        <i class="ion-chevron-right"></i>
                                                                        Profile
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="faculty-and-staff-2.php">
                                                                <i class="ion-chevron-right"></i>
                                                                Faculty and staff 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="coming-soon.php">
                                                                <i class="ion-chevron-right"></i>
                                                                Coming Soon
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="error-404.php">
                                                                <i class="ion-chevron-right"></i>
                                                                404
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-8 d-none d-md-block">
                                    <div class="header-right_area with-radius">
                                        <ul class="social-link">
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="ion-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="ion-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="ion-social-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="skype">
                                                <a href="https://skype.com/" data-toggle="tooltip" target="_blank" title="Skype">
                                                    <i class="ion-social-skype"></i>
                                                </a>
                                            </li>
                                            <li class="search-bar d-none d-lg-inline-block">
                                                <a class="search-btn" href="#">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </li>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="search-body">
                                        <div class="inner-body">
                                            <input class="input-field" type="text" placeholder="Keyword search...">
                                            <button class="inner-btn" value="Search" type="submit">
                                                <i class="ion-ios-search-strong"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-block d-md-none">
                                    <div class="header-right_area with-radius justify-content-end">
                                        <ul>
                                            <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn">
                                                    <i class="ion-navicon-round"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="offcanvas-inner_search">
                        <form action="#" class="hm-searchbox">
                            <input type="text" placeholder="Search for item...">
                            <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <a href="#" class="btn-close"><i class="ion-close-round"></i></a>
                    <div class="offcanvas-navigation_wrap">
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="#"><span
                                        class="mm-text">Home </span></a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about-us.php">
                                        <span class="mm-text">About </span>
                                    </a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">E-Lectures <i class="ion-ios-arrow-down"></i></span>

                                                 <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="ephp.php">
                                                                <i class="ion-chevron-right"></i>
                                                                php
                                                            </a>
                                                        </li>
                                                         <li>
                                                            <a href="ehtml.php">
                                                                <i class="ion-chevron-right"></i>
                                                                HTML
                                                            </a>
                                                        </li>
                                                       
                                                        <li>
                                                            <a href="ecss.php">
                                                                <i class="ion-chevron-right"></i>
                                                                CSS
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="ejavascript.php">
                                                                <i class="ion-chevron-right"></i>
                                                                JAVASCRIPT
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="ebootstrap.php">
                                                                <i class="ion-chevron-right"></i>
                                                                BOOTSTRAP
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="emagento2.php">
                                                                <i class="ion-chevron-right"></i>
                                                              Magento 2
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="elaravel.php">
                                                                <i class="ion-chevron-right"></i>
                                                              Laravel
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="eci.php">
                                                                <i class="ion-chevron-right"></i>
                                                              CI
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="epython.php">
                                                                <i class="ion-chevron-right"></i>
                                                               Python
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li><a href="#">Tutorials</a>
                                                    <ul class="ademy-dropdown">
                                                        <li>
                                                            <a href="php.php">
                                                                <i class="ion-chevron-right"></i>
                                                                php
                                                            </a>
                                                        </li>
                                                         <li>
                                                            <a href="html.php">
                                                                <i class="ion-chevron-right"></i>
                                                                HTML
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="css.php">
                                                                <i class="ion-chevron-right"></i>
                                                                CSS
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript.php">
                                                                <i class="ion-chevron-right"></i>
                                                                JAVASCRIPT
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="bootstrap.php">
                                                                <i class="ion-chevron-right"></i>
                                                                BOOTSTRAP
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="magento2.php">
                                                                <i class="ion-chevron-right"></i>
                                                              MAGENTO 2
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="laravel.php">
                                                                <i class="ion-chevron-right"></i>
                                                              LARAVEL
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="ci.php">
                                                                <i class="ion-chevron-right"></i>
                                                              CI
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="python.php">
                                                                <i class="ion-chevron-right"></i>
                                                               Python
                                                            </a>
                                                        </li>

                                                    </ul>

                                                </li>
                                    <a href="contact.php">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation-2">
                            <div class="ht-right inner-header_info">
                                <ul>
                                    <li class="contuct-number">
                                        <i class="ion-ios-telephone mr-1"></i>
                                        <a href="tel://+01228899900">01228899900</a>
                                    </li>
                                    <li class="address">
                                        <i class="ion-ios-location mr-1"></i>
                                        <span>614 Destany Village Apt. 968</span>
                                    </li>
                                    <li class="donate">
                                        <a class="ademy-btn atlantis-color_btn" href="javascript:void(0)">Donate</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-right_area inner-social_link justify-content-start">
                                <ul class="social-link">
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="ion-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="ion-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="ion-social-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="skype">
                                        <a href="https://skype.com/" data-toggle="tooltip" target="_blank" title="Skype">
                                            <i class="ion-social-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
