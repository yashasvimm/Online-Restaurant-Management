<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delicious</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <?= link_tag('assets/css/font-awesome.min.css') ?>
    <?= link_tag('assets/css/bootstrap.min.css') ?>
    <?= link_tag('assets/css/style.css') ?>
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!--banner-->

    <section id="banner">
      <div class="bg-color">
        <header id="header">
       
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="#about">About</a>
                  <a href="#event">Event</a>
                  <a href="#menu-list">Menu</a>
                  <a href="#contact">Book a table</a>


                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">PlyFood</h1>
            <h2>Khao Khilao Mast Raho.</h2>
            <p>Specialized in Indian Cuisine!!</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- / banner -->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
           <!--  <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Delicious Journey</h1>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div> -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <!-- <div class="about-info">
                            <h2 class="heading">vel illum qui dolorem eum</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero impedit inventore culpa vero accusamus in nostrum dignissimos modi, molestiae. Autem iusto esse necessitatibus ex corporis earum quaerat voluptates quibusdam dicta!</p>
                            <div class="details-list">
                                <ul>
                                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li><i class="fa fa-check"></i>Quisque finibus eu lorem quis elementum</li>
                                    <li><i class="fa fa-check"></i>Vivamus accumsan porttitor justo sed </li>
                                    <li><i class="fa fa-check"></i>Curabitur at massa id tortor fermentum luctus</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="<?php echo base_url('assets/img/res02.jpg') ?>" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!-- event -->
    <section id="event">
        <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                      <h1 class="header-h">Up Coming events</h1>
                      
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                          <div class="col-md-6 col-sm-6 left-images">
                           <img src="<?php echo base_url('assets/img/res02.jpg') ?>" class="img-responsive">
                         </div>
                         <div class="col-md-6 col-sm-6 details-text">
                          <div class="content-holder">
                            <h2>Farewell party</h2>
                            <p>Soon it will be notified</p>
                            <address>
                              <strong>Place: </strong>
                              Not yet Decided
                              <br>
                              <strong>Time: </strong>
                              07:30pm
                            </address>
                            <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ event -->
    <!-- menu -->
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    <!-- <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p> -->
                </div>
                <div class="col-md-12  text-center gallery-trigger">
                    <ul>
                        <li><a class="filter" data-filter="all">Show All</a></li>
                        <!-- <li><a class="filter" data-filter=".category-1">Breakfast</a></li>
                        <li><a class="filter" data-filter=".category-2">Lunch</a></li>
                        <li><a class="filter" data-filter=".category-3">Dinner</a></li> -->
                    </ul>
                </div>
                <div id="Container">
                <?php foreach ($item as $item): ?>
                    <div class="mix category-1 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="<?php echo base_url("Detail/item/$item->id"); ?>" data-meal-img="<?php echo base_url('assets/img/restaurant/rib.jpg') ?>"><?= $item->title; ?></a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price"><?= $item->price; ?></span>
                      </span>
                      <span class="menu-subtitle">Dish is very Awesome</span>
                    </div>
                    
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <!--/ menu -->
    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Book Your table</h1>
                    <p class="header-p">To boook your table please fill the form or Call us
                     </p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Numbers</h4>
                            <p class="light-blue regular alt-p">+917870937385<span class="contacts-sp">Phone Booking</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
                            <p class="light-blue regular alt-p">
                                 Friday and Sunday 08:00 - 03.00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form action="<?php echo base_url('Tablebook') ?>" method="post" role="form" class="contactForm">
                    <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group label-floating is-empty">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group">
                            <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12 contact-form">
                        <div class="form-group label-floating is-empty">
                            <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 btnpad">
                        <div class="contacts-btn-pad">
                            <button class="contacts-btn">Book Table</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- / contact -->
    <!-- footer -->
    <footer class="footer text-center">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="widget">
                        <h4 class="widget-title">PlyFood</h4>
                        <address>NIT Durgapur<br>Durgapur, DGR 713209</address>
                        <div class="social-list">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright clear-float">
                            © PLYfood. All Rights Reserved
                            <div class="credits">
                                <!-- 
                                    All the links in the footer should remain intact. 
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                                -->
                                
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->
    
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mixitup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>
    
</body>
</html>