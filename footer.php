<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }
    .container-footer{
      max-width:1170px;
      margin:auto;
    }
    .row-footer{
      display:flex;
      flex-wrap:wrap;
    }
    ul{
      list-style:none;
    }
     .footer{
       background-color:#212529;
       padding:50px 0;
     }
     .footer-col{
       width:25%;
       padding:0 15px;
     }
     .footer-col h4{
       font-weight:bolder;
       font-size:18px;
       color:white;
       margin-bottom:15px;
       position:relative;
     }
     .footer-col h4::before{
       content:'';
       position:absolute;
       left:0;
       bottom:-10px;
       background-color:#e91e63;
       height:2px;
       box-sizing:border-box;
       width:50px;
     }
     .footer-col ul li:not(:last-child){
       margin-bottom:10px;

     }
     .footer-col ul li a{
       font-size:16px;
       text-transform:capitalize;
       color:#ffffff;
       text-decoration:none;
       color:#bbbbbb;
       display:block;
       transition:all 0.3s ease;
     }
     .footer-col ul li a:hover{
            color:#ffffff;
            padding-left:8px;
     }
     .footer .social-links {
           display:flex;
           align-items:center;
           justify-content:center;
       
    }
    .footer .social-links a{
      
           display:inline-block;
           height:40px;
           width:40px;
           background-color:rgba(255,255,255,0.2);
           margin: 0 10px 10px 0;
           text-align:center;
           line-height:40px;
           border-radius:50%;
           color:#ffffff;
           transition:all 0.5% ease;
    }
    .footer .social-links a:hover{
      color:#24262b;
      background-color:#ffffff;

    }
    .copyright{
      background-color:black;
      color:white;
      height:50px;
      
    }
    .copyright p{
      margin:auto;
      display:block;
      width:250px;
      padding-top:18px;
    }
    /* responsive */
    @media(max-width:767px)
    {
      .footer-col{
        width:50%;
        margin-bottom:30px;

      }
    }
    @media(max-width:574px)
    {
      .footer-col{
        width:100%;
        margin-bottom:30px;
        
      }
    }
  </style>
</head>
<body>
  <footer class="footer">
  <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
    <div class="container-footer">
        
        <div class="row-footer">
           <div class="footer-col">
             <h4>Tech Stack Used</h4>
             <ul>
                 <li><a href="#"><i class="fa fa-angle-double-right"></i> Html</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Css</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Javascript</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Php</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> MySql</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Bootstrap</a></li>
             </ul>  
           </div>
           <div class="footer-col">
             <h4>Product By</h4>
             <ul>
                  <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Chinmoy Hansda</a></li>
                  <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Kopal Jain</a></li>
                  <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Nitin Meena</a></li>
             </ul>  
           </div>
           <div class="footer-col">
             <h4>Security And Privacy</h4>
             <ul>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
             </ul>  
           </div>
           <div class="footer-col">
             <h4>Contact Us</h4>
             <ul>
             <li><a href="#"><i class="fas fa-map-marker-alt"></i> 65 Block Gandhi Nagar</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> example@123gmail.com</a></li>
                        <li><a href="#"><i class="fas fa-phone-volume"></i> 91 253 89 456</a></li>
                        <li><a href="#"><i class="fas fa-tty"></i> 87 984 45 121</a></li>
             </ul>  
           </div>
           
        </div>
        
    </div>
    
  </footer>
  <div class="copyright">
    <p>Copyright © 2021.Votelt.</p>
    </div>
   <!-- Font awesome -->
   <script src="https://kit.fontawesome.com/2515c8be76.js" crossorigin="anonymous"></script>
</body>
</html>