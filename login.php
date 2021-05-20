<?php
  include("API/link.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #signupform{
            padding:20px;         
            display: flex;
            flex-direction: column;
            align-items: center;
            }
        .form-text {
            margin-top: .25rem;
            font-size: .875em;
            color: #6c757d;
             }
        /* For footer section */
            /* .span-or {
                display: block;
                position: absolute;
                left: 50%;
                top: -2px;
                margin-left: -25px;
                background-color: #fff;
                width: 50px;
                text-align: center;
              }
            .hr-or {
              background-color: #cdcdcd;
              height: 1px;
              margin-top: 0px !important;
              margin-bottom: 0px !important;
              }
            footer.nb-footer {
              background: #222;
              border-top: 4px solid #b78c33; 
              }
            footer.nb-footer .about {
              margin: 0 auto;
              margin-top: 40px;
              max-width: 1170px;
              text-align: center; 
              }
            footer.nb-footer .about p {
              font-size: 13px;
              color: #999;
              margin-top: 30px; 
              }
            footer.nb-footer .about .social-media {
              margin-top: 15px; 
              }
            footer.nb-footer .about .social-media ul li a {
              display: inline-block;
              width: 45px;
              height: 45px;
              line-height: 45px;
              border-radius: 50%;
              font-size: 16px;
              color: #b78c33;
              border: 1px solid rgba(255, 255, 255, 0.3); 
              }
            footer.nb-footer .about .social-media ul li a:hover {
              background: #b78c33;
              color: #fff;
              border-color: #b78c33; 
              }
            footer.nb-footer .footer-info-single {
              margin-top: 30px; 
              }
            footer.nb-footer .footer-info-single .title {
              color: #aaa;
              text-transform: uppercase;
              font-size: 16px;
              border-left: 4px solid #b78c33;
              padding-left: 5px; 
              }
            footer.nb-footer .footer-info-single ul li a {
              display: block;
              color: #aaa;
              padding: 2px 0; 
              }
            footer.nb-footer .footer-info-single ul li a:hover {
              color: #b78c33; 
              }
            footer.nb-footer .footer-info-single p {
              font-size: 13px;
              line-height: 20px;
              color: #aaa; 
              }
            footer.nb-footer .copyright {
              margin-top: 15px;
              background: #111;
              padding: 7px 0;
              color: #999; 
              }
            footer.nb-footer .copyright p {
              margin: 0;
              padding: 0; 
              } */
            /* footer section end */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Votelt</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
      <a href="login.php"><button class="btn btn-outline-success my-2 mx-2 my-sm-0" type="submit">Log in</button></a>
      <a href="signup.php"><button class="btn btn-outline-success my-2 mx-2 my-sm-0" type="submit">Sign in</button></a>
  </div>
</nav>
<div class="container">
    <br>
    <h1 class="text-center">Log in here</h1>

    <form  action='API/enterlogin.php' method='post' enctype="multipart/form-data" id='signupform'>
      
         
       <div class="mb-3 col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Enter Name">
       </div>
       <div class="mb-3 col-md-6">
           <input type="mobile" name="mobile" class="form-control" placeholder="Enter Mobile">
       </div>
       <div class="mb-3 col-md-6">
            <input type="text" name="email" class="form-control"  placeholder="Enter Email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 col-md-6">
           <input type="password" name="password" class="form-control" placeholder="Enter Password">             
       </div>
        
       <div class="form-check col-md-6">
           <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="1">
           <label class="form-check-label" for="flexRadioDefault1">
            Admin
            </label>
        </div>
        <div class="form-check col-md-6">
             <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
            Voter
            </label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <?php
      include("footer.php");
    ?>
    <!-- <footer class="nb-footer">
        <div class="container">
           <div class="row">
             <div class="col-sm-12">
                <div class="about">
                   <p></p>
                      <div class="social-media">
                          <ul class="d-flex align-item-center justify-content-center">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                      </div>
                 </div>
              </div>

          <div class="col-md-3 col-sm-6">
               <div class="footer-info-single">
                  <h2 class="title">Tech Stack Used</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Html</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Css</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Javascript</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Php</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> MySql</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Bootstrap</a></li>
                    </ul>
                </div>
          </div>

          <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                  <h2 class="title">Product By</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Chinmoy Hansda</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Kopal Jain</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Nitin Meena</a></li>
                    </ul>
                </div>
           </div>

           <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                  <h2 class="title">Security & privacy</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                  <h2 class="title">Contact</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> 65 Block Gandhi Nagar</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> example@123gmail.com</a></li>
                        <li><a href="#"><i class="fas fa-phone-volume"></i> 91 253 89 456</a></li>
                        <li><a href="#"><i class="fas fa-tty"></i> 87 984 45 121</a></li>
                    </ul>
                </div>
            </div>
         </div>
       </div>

        <section class="copyright">
           <div class="container">
              <div class="row">
                 <div class="col-sm-6">
                    
                  </div>
                 <div class="col-sm-6"><p>Copyright © 2021.Votelt.</p></div>
                 <div class="col-sm-6"></div>
              </div>
            </div>
        </section>
</footer> -->
<script src="https://kit.fontawesome.com/2515c8be76.js" crossorigin="anonymous"></script>
</body>
</html>