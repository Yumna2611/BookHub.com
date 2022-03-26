<?php
  $message="";
  if(isset($_POST['email'])){
    $host = "localhost";
    $user = "avk";
    $password = 'avkproj';
    $db_name = "web_dev_internship";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //to prevent from mysqli injection


       $sql = "SELECT * from signup where email='$email'";
       $result = mysqli_query($con, $sql);

      $res_count=mysqli_num_rows($result);
       if($res_count>0){
          $sql2 = "UPDATE signup SET username='$username', password='$password' where email='$email'";
         //echo "successful";
          if($con->query($sql2) == true){
            header("Location:Login.php");
          }
          else
            $message="Username already exists";
    }
    else
        $message="Email ID not registered <a href='register.php'>Register here</a>";

}

 {
  ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
    <title>Updation page</title>
  </head>
  <body>
    <!-----------Navbar------------>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
        <div class="container-fluid">
           <a class="navbar-brand" href="#"><img class="pg-lg" src="https://image.freepik.com/free-vector/gradient-book-company-logo-template_23-2148807612.jpg"></a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="Welcome.php">Home</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="Frames.html">Reader's Section</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="Contact_us.html">Contact us</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
              </ul>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <img id="signup" src="https://upload.wikimedia.org/wikipedia/commons/1/12/User_icon_2.svg">
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="register.php">Sign up</a></li>
                    <li><a class="dropdown-item" href="Contact_us.html">Contact Us</a></li>
                 </ul>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;
              <div id="google_translate_element"></div>
             <script type="text/javascript">
               function googleTranslateElementInit() {
                 new google.translate.TranslateElement(
                   {pageLanguage: 'en'},
                   'google_translate_element'
                 );
               }
             </script>
             <script type="text/javascript" src= "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>&nbsp;&nbsp;

        </div>
     </nav>
   </div><br><br><br>
    <!-----------Main-body-------->
    <!--center><h1 style="color:#3aaf9f">Good to see you again!</h1></center-->
    <div class="wrapper" style="max-width: 500px;">
<center><img id="user" src="https://static.vecteezy.com/system/resources/thumbnails/000/550/980/small/user_icon_001.jpg" alt="user">
<p style="color:#3f9d9f">Enter your registered email-id to set username and password</p></center>

<hr>
<form onsubmit = "return validation()" method = "POST">
<div class="social_media">
   <div class="item">
      <i class="fa fa-facebook"></i>
   </div>
   <div class="item">
     <i class="fa fa-instagram"></i>
   </div>
   <div class="item">
      <i class="fa fa-google-plus"></i>
   </div>
</div>
 <div class="form">
  <div class="column1">
    <div class="input_field">
      <input type="text" placeholder="Email" class="input" id="email" name="email" required>
   </div>
   <div class="input_field">
      <input type="text" placeholder="Username" class="input" name  = "username" required>
   </div>
 <div class="input_field">
      <input type="password" placeholder="Password" class="input" id ="password1" name  = "password" onkeyup="check()" required>
   </div>
 </div>
 <div class="input_field">
 <span id="strength">Strength</span>
</div>
<div class="input_field">
 <p id="p1" style="font-size:11px;"></p>
</div>
   <div style="display: flex;">
      <input type="submit" name="submit" class="btn" value="Update" id="btn">
   </div>
<center><p id="message"><?= $message ?></p></center>
 </div>
</form>


</div><br><br><br><br><br><br>

 <!-----------------Footer---------------->
    <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>About</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Our blog</a></li>
            <li><a href="#">Join our team!</a></li>
            <li><a href="#">Invite friends</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Support</h4>
          <ul>
            <li><a href="#">Help/FAQ</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow us on</h4>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
          </ul>
        </div>
        </div>
      </div>
     </div>
     <center><h6 style="color:white">Copyright<span>&copy;</span> PAYS</h6></center>
  </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        function check(){
var pp=document.getElementById("p1").value
var a=document.getElementById("password1").value;
var st = document.getElementById('strength');
num=/[0-9]/; uplet=/[A-Z]/; lowlet=/[a-z]/; spch=/[!@#$%^&*]/;
if(!uplet.test(a) || !num.test(a) || !lowlet.test(a) || !spch.test(a) || a.length<8)
{      p1.innerHTML="Password must contain atleast one uppercase letter, one lowercase letter, one special charachter and one numeric value"

        st.innerHTML = '<span style="color:red">Weak</span>';
    }
else
{
    st.innerHTML = '<span style="color:green">Strong!</span>';
    p1.innerHTML="Accepted"
}
}

            function validation()
            {
                var id=document.getElementByName("username").value;
                var ps=document.getElementById("password").value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
    <?php
  }
  ?>
</html>
