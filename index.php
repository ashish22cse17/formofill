<?php
include("classes/connect.php");
include("classes/signup.php");
$first_name="";
$last_name="";
$gender="";
$email="";
$profile_pic="";

if($_SERVER['REQUEST_METHOD']  == 'POST')
{
  $signup= new Signup();
  $result = $signup->evaluate($_POST);
 if($result !=""){
     echo $result;
 }
 else
 {
  header("location:sucess.php");
  die;
 }
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $profile_pic=$_POST['profile_pic'];

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
  </head>
  <style>
  
  </style>
  <body style="font-family:tahoma;background-color: #e9ebee;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand">FROMOFILL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-2 col-1 vartical-line bg-sucess" ></div>
            <div class="col-xl-4 col-md-2 col-1 vartical-line bg-primary" ></div>
            <div class="col-xl-4 col-md-2 col-1 vartical-line bg-sucess"  ></div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
         <div id="page">
         </a><h3>Register on Fromofill</h3><br><br>
         <form action="" method="post">
          <input  name="first_name" type="text" id="text" placeholder="First name" required><br><br>
          <input  name="last_name"  type="text" id="text" placeholder="Last name" required><br><br>       
          <select name="gender" id="text" required>
              <option>--select--</option>
              <option>Male</option>
              <option>Female</option>
          </select><br><br>
          <input  name="email"  type="text" id="text" placeholder="email or phone number" required10><br><br>
          <input name="password"  type="password" id="text"placeholder="Registration No." required><br><br>
          <select name="profile_pic" id="text">
            <option>--select--</option>
            <option>Cricket</option>
            <option>Badminton</option>
            <option>Volleyball</option>
            <option>Football</option>
            <option>Chess</option>
            <option>Table tenis</option>
            <option>Poste makingr</option>
            <option>Wall paintng</option>
            <option>GK Quiz</option>
          </select><br><br>
          <button class="btn btn-outline-success" type="submit" id="text">Submit</button>
              </form>
             </div>
  </body>
  </body>
</html>
