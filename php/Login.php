<!doctype html>
<?php
    session_start();
 ?>                                                                                                                                                                                                                                                                    <!doctype html>
<html lang="en">
  <head>

    <head>
    <style type="text/css">
    @media screen and (max-width: 900px){
  .container-fluid{
    background: darkslategrey;

  }
}
    </style>
    <title>Login</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_2.css">
</head>
<body>
<div class="header">
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
        <div class="container-fluid">


              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a class="navbar-brand" href="#"><img class="pg-lg" src="https://image.freepik.com/free-vector/gradient-book-company-logo-template_23-2148807612.jpg"></a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button></li>
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

              <div id="google_translate_element"></div>
             <li><script type="text/javascript">
               function googleTranslateElementInit() {
                 new google.translate.TranslateElement(
                   {pageLanguage: 'en'},
                   'google_translate_element'
                 );
               }
             </script>
             <script type="text/javascript" src= "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>&nbsp;&nbsp;</li>


     </nav>
    </div><br><br><br>


    <!-----------Main-body-------->
    <center><h1 id="messg" style="color:#3aaf9f">Good to see you again!</h1></center>

    <div class="wrapper" style="box-shadow: 5px 5px #E8E8E8">
  <div class="title">
    Login
</div>
<center><img id="user" src="https://static.vecteezy.com/system/resources/thumbnails/000/550/980/small/user_icon_001.jpg" alt="user"></center>
<?php
if( isset($_SESSION["error"])){
  echo('<center><p style="color:red; size:14px;">'.$_SESSION["error"]."</p></center><br>");
  unset($_SESSION["error"]);
}
if( isset($_SESSION["success"])){
  echo('<center><p style="color:green; size:14px;">'.$_SESSION["success"]."</p></center><br>");
  unset($_SESSION["success"]);
}
?>
<hr>
<form method="post">
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
      <input type="text" name="username" placeholder="Username" class="input">
   </div>
 <div class="input_field">
      <input type="password" name="password" placeholder="Password" class="input">
   </div>
 </div>
   <center><div style="display: flex;">
      <input type="submit" name="submit" class="btn" value="Login">
   </div></center>

 </div>
</form><br>
<center><a href="Register.php">Create an account</a>&nbsp;&nbsp;
<a href="forgot.php">Forgot password?</a></center>
</div>

<br><br><br>
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
            <li><a href="faq.html">Help/FAQ</a></li>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <?php
      require_once "pdo.php";
        if(isset($_POST['username']) && isset($_POST['password'])){

          $sql = "SELECT name FROM signup where username= :us and password= :pw";
          //preventing SQL injection
          $stmt = $pdo->prepare($sql);
          $stmt->execute(array(
            ':us' => $_POST['username'],
            ':pw' => $_POST['password'],
          ));
          //fetch the value

          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          //var_dump($row);
          //$row is false if no such name exists
          if($row === FALSE ){
             $_SESSION["error"] = "Invalid credentials! Please try again";
             //echo "<script>document.getElementById('box').innerHTML+='<center>Invalid credentials! Please try again</center>'</script>";
             header('Location: Login.php');
             return;
          }
          else{
             $_SESSION["username"] = $_POST["username"];
             $_SESSION["success"] = "Logged in successfully.";
             header("Location: Book.php");
             return;
          }
        }
     ?>
  </body>
</html>
