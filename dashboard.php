<?php
  session_start();
  include("API/link.php");
  if(!isset($_SESSION['userdata']))
  {
      header("Location:login.php");
  }

  $userdata=$_SESSION['userdata'];
  $groupsdata=$_SESSION['groupdata'];
  if($_SESSION['userdata']['status']==0)
  {
    $status='<b style="color:red">Not Voted</b>';
  }
  else
  {
    $status='<b style="color:green">Voted</b>';
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vote</title>
</head>

<style>
    body {
        margin: 0px;
        font-family: 'Noto Sans JP', sans-serif;
    }

    .content {
        padding: 30px;
        margin-top: 20px;
        display: grid;
        grid-template-columns: 50% 50%;
    }

    .content>div {
        margin: 20px;
        box-shadow: 0 0px 0px 0 rgb(0 0 0 / 20%), 0 5px 20px 0 rgb(0 0 0 / 19%);
        padding: 40px;
        /* border: 1px solid black; */
        height: 200px;

    }

    .navbar {
        display: inline;
        list-style: none;
    }


    ul {
        list-style-type: none;
        margin: 0;
        padding: 0px;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 30px 30px;
        text-decoration: none;
    }

    .btn {
        border: 1px solid black;
        padding: 10px;
        margin-top: 30px;
        width: 100px;
    }

    .logo {
        font-weight: 800;
        font-size: large;
    }

    .data {
        /* padding: 30px; */
        margin: 40px;
        box-shadow: 0 0px 0px 0 rgb(0 0 0 / 20%), 0 5px 20px 0 rgb(0 0 0 / 19%);
        height: 1000px;
    }

    .back {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;

    }

    .back>button {
        cursor: pointer;
        padding: 10px;
        width: 90px;
    }


    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    .openbtn {
        /* margin-top: 0px; */
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
    }

    .openbtn:hover {
        background-color: #444;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
    }
    .userimg{
      width:150;
      height:150;
      clip-path:circle();
    }


    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }
    strong{
      color:white;
      margin:10px;
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


<body>
    
    <div class="navbar">
        <ul>
            <li class="logo"><a style="color:white;">Votelt</a></li>
            <li style="float: right">
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <center><img class="userimg" src="images/<?php echo $userdata['photo']; ?>" ></center><br>
                    <strong>Name:<?php echo $userdata['name']; ?></strong><br>
                    <strong>Mobile:<?php echo $userdata['mobile']; ?></strong><br>
                    <strong>Address:<?php echo $userdata['address']; ?></strong><br>
                    <strong>Email:<?php echo $userdata['email']; ?></strong><br>
                     <strong>Status:<?php echo $status; ?></strong><br>
                     <a href="API/logout.php"><button type="submit" class="btn btn-primary">Log out</button></a>
                </div>


                <div id="main">
                    <button class="openbtn" onclick="openNav()">☰</button>
                </div>
            </li>
        </ul>
    </div>
    <div class="alert alert-danger" role="alert">
      You can only give vote to only one person. After voted voting button will be disabled. And you will no longer to change vote.
   </div>
    <div class="data">
    <div id="group" class="p-4 m-5">
         <?php
           if($_SESSION['groupdata'])
           {
              for($i=0;$i<count($groupsdata);$i++)
              {
                ?>
                <div>
                   <img style="float:right;"src="images/<?php echo $groupsdata[$i]['photo']; ?>" height="100" width="100">
                   <b>Group Name</b><?php echo $groupsdata[$i]['name']; ?><br>
                   <b>Votes </b><?php echo $groupsdata[$i]['votes']; ?><br>
                   <form action="API/vote.php" method="post">
                      <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']; ?>">
                      <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']; ?>">
                      <?php
                         if($_SESSION['userdata']['status']==0)
                         {
                         ?>
                         <button class="btn btn-primary" type="submit" name="votebtn">Vote</button>
                         <?php
                         }
                         else{
                           ?>
                           <button disabled type="button" name="votebtn" value="vote" id="voted">Voted</button>
                           <?php
                         }
                         ?>
                   </form>
                </div>
                <hr>
               <?php
              }
           }
           else 
           {
                     
           }
         ?>
    </div>
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
</footer>
<script src="https://kit.fontawesome.com/2515c8be76.js" crossorigin="anonymous"></script> -->
    

    



    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

</body>

</html>