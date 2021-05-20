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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
    <h1 class="text-center">SignUp here</h1>

    <form  action='API/registration.php' method='post' enctype="multipart/form-data" id='signupform'>
  <div class="mb-3 col-md-6">
  
     <div class="form-row">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="col">
          <input type="mobile" name="mobile" class="form-control" placeholder="Enter Mobile">
        </div>
     </div>
  </div>
  <div class="mb-3 col-md-6">
     <div class="form-row">
         <div class="col">
             <input type="password" name="password" class="form-control" placeholder="Enter Password">
         </div>
         <div class="col">
           <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
        </div>
      </div>
  </div>
  <div class="mb-3 col-md-6">
    <input type="text" name="address" class="form-control"   placeholder="Enter Address">
  </div>
  <div class="mb-3 col-md-6">
    <input type="text" name="email" class="form-control"  placeholder="Enter Email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="input-group mb-3 col-md-6">
  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
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
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
<?php
  include("footer.php");
?>
</body>
</html>