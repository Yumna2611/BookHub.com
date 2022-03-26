<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Contact_us</title>

	<style>
    /_____Navbar______/
    .button-group{
       margin-top: 5px;
       text-align: center;
    }

    .pg-lg{
        width: 70px;
        height: 70px;
    }


    a:hover{
      background-color: #505050;
      border-radius: 10px;
    }

    /______Sidebar_______/
.side-bar{
  width: 50px;
  height: 100vh;
  background: rgba(90, 90, 120, 0.3);
  position: absolute;
  left:0;
  top: 0;
  position: fixed;
}

.menu{
    display: block;
  width: 20px;
  margin: 20px auto 0;
  cursor: pointer;
}
.social-links img{
  width: 50px;
  margin: 10px auto;
  margin-top: 10px auto;
  cursor: pointer;
}
.social-links{
  width: 50px;
  text-align: center;
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
}
    /_______footer________/

*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.f-container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
    padding: 50px 0;
}
.footer-col{
   width: 25%;
     padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

#copyright{
  height: 25px;
  width: 25px;
}

/responsive/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 10px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

@media screen and (max-width: 900px){
.container-fluid{
background: darkslategrey;

}
}

</style>

</head>
<body>
	<!------------------- Navbar ---------------->
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
    </div>

<center>

<?php

$servername="localhost";
$username = "avk";
$password="avkproj";
$dbname = "web_dev_internship";

//create connection

$conn = mysqli_connect($servername, $username, $password, $dbname );

//check connection

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}



$name = isset($_POST['name'])?$_POST['name']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$phone = isset($_POST['phone'])?$_POST['phone']:'';
$subject = isset($_POST['subject'])?$_POST['subject']:'';

$sql = "INSERT INTO contactus (name, email, phone, feedback) VALUES ('$name', '$email', '$phone', '$subject')";

if (mysqli_query($conn,$sql)){
	echo "<h3><br>Thank you for your feedback!<br>
	<p>Data received by us: </b></h3> ";

	 echo nl2br("<b>\n$name \n $email\n $phone \n $subject </b>");
}
else {
	echo "ERROR: Hush! Sorry ".$sql.
                 mysqli_error($conn);

}

mysqli_close($conn);

?>
</center>

<!-----------------------Side-bar---------------->
<div class="side-bar">
      <img src="images/menu.png" class="menu">
      <div class="social-links">
        <img src="images/fb.png">
        <img src="images/ig.png">
        <img src="images/tw.png">
      </div>
</div>

<!--------------------Footer----------------------------->

<br>
<footer class="footer">
     <div class="f-container">
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
