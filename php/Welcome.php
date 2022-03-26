<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <style type="text/css">
    @media screen and (max-width: 900px){
  .container-fluid{
    background: darkslategrey;

  }
}
    </style>
    <title>Welcome</title>
  </head>
  <body onload="myFunction()" >
    <div id="loading"></div>

    <!-----------Navbar------------>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
        <div class="container-fluid">


              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a class="navbar-brand" href="#"><img class="pg-lg" src="https://image.freepik.com/free-vector/gradient-book-company-logo-template_23-2148807612.jpg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button><li>
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="Welcome.php">Home</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="html/Frames.html">Reader's Section</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="html/Contact_us.html">Contact us</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
              </ul>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <img id="signup" src="https://upload.wikimedia.org/wikipedia/commons/1/12/User_icon_2.svg">
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="php/Login.php">Login</a></li>
                    <li><a class="dropdown-item" href="php/Register.php">Sign up</a></li>
                    <li><a class="dropdown-item" href="html/aboutus.html">About Us</a></li>
                 </ul>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
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

    <div class="main-body">
        <img id="image" style="align-self: left; height: 350px; width: 100%; opacity: 0.5;"  src="https://www.bookgeeks.in/wp-content/uploads/2020/06/Best-Indian-Books-by-Indian-Authors-1-1024x768.jpg">
        <br>
        <h1>Endless entertainment and knowledge</h1>
        <center><h4 style="color:white">Read anytime, anywhere.</h4></center>
        <center><button id="free-su"><h4>Free sign up</h4></button></center>
        <br>
    </div>
    <div>
      <br>
      <center><h2 style="text-shadow: 2px 2px #d9d9d9"><i>The best and most convinient deal for online reading</i></h2></center>
    </div>
    <div class="icons">
      <img src="https://i.pinimg.com/474x/d4/d3/c0/d4d3c02f855019b7357b6c46da2124da.jpg" alt="book" class="book">
      <img src="https://image.freepik.com/free-icon/magazine_318-1607.jpg" alt="magzine" class="magzine">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ149gDWk-jrrRLdIX56EVXTTOyssU8zna-12GCCUWrhoqlk5pTGCQuxIbRpbLgieF0_Ew&usqp=CAU" alt="newsp" class="news">
      <br>
      <br>
      </div>
      <div class="line">
        <hr>
        <center><h2 style="text-shadow: 0 0 2px #383838;">Start reading now</h2></center>
        <br>
        <center><i><h5 style="text-shadow: 0 0 2px #383838;">Enjoy popular titles handpicked by our editors</h5></i></center><br>
        <hr>
      </div>
    <div class="side-bar">
      <img src="images/menu.png" class="menu">
      <div class="social-links">
        <img src="images/fb.png">
        <img src="images/ig.png">
        <img src="images/tw.png">
      </div>
      <div class="useful-links">
        <img src="images/share.png">
        <img src="images/info.png">
      </div>
  </div>
    <div class="best-books">
      <br>
      <h2 style="color:white;">THE BEST BOOKS & MAGAZINES ARE WAITING FOR YOU!</h2>
      <br>
      <img id="books" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/es-030518-best-true-crime-books-1520279443.jpg" alt="books">
    </div>
          <br>
      <br>

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
            <li><a href="">Help/FAQ</a></li>
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

  <script>
        var preloader = document.getElementById('loading');

        function myFunction( ) {
          preloader.style.display = 'none';
        }
  </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>
