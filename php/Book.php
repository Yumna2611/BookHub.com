<!doctype html>
<?php
    session_start();
 ?>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="style_5.css" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Get free access to books you always wanted to read</title>
   </head>
   <body>
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
               <li class="nav-item">
                  <a style="color:white;" class="nav-link active" aria-current="page" href="magzine.php">Magazines</a>
               </li>
               <li class="nav-item dropdown">
                  <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Genre
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#s_t">Science & Technology</a></li>
                     <li><a class="dropdown-item" href="#fiction">Classics & Fiction</a></li>
                     <li><a class="dropdown-item" href="#romance">Romance</a></li>
                     <li><a class="dropdown-item" href="#a_a">Action & Adventure</a></li>
                     <li><a class="dropdown-item" href="#m_t">Mystery & Thriller</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <center>📚📖📝</center>
                     </li>
                  </ul>
               </li>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <form class="d-flex">
                  <input class="form-control me-2" id="search-input" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" id="search-button" type="button">Search</button>
               </form>
            </ul>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <img id="signup" src="https://upload.wikimedia.org/wikipedia/commons/1/12/User_icon_2.svg">
               </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Register.php">Sign Up</a></li>
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="wishlist.php">My wishlist</a></li>
                  <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
               </ul>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;
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
      <br>
      <div class="row">
         <div class="col-md-12">
            <button class="btn btn-secondary btn-sm js-go-day">DAY MODE</button>
            <button class="btn btn-secondary btn-sm js-go-night">NIGHT MODE</button>
         </div>
      </div>
      <br>
      <!-- ________________________________________________-->
      <?php
      $succ = isset($_SESSION["success"])?$_SESSION["success"]:'';
      if( isset($_SESSION["username"])){
        echo "Welcome ".$_SESSION["username"]."<br>";
        echo('<p style="color:green">'.$succ."</p><br>");
        unset($_SESSION["success"]);
      }
      //check if we are logged in
      if( ! isset($_SESSION["username"])){
            header("Location:Login.php");
            return;
      } ?>
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="s_t" class="home-h2">Science & Technology</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
         <div class="carousel carousel-public_domain carousel--progressively-enhanced"
            data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">
            <div class="book carousel__item">
               <div class="book-cover"><a href="rateus.php">
                  <img class="bookcover" loading="lazy"
                     title="Fundamentals Of C++ programming by Richard L. Halterman"
                     alt="Fundamentals Of C++ programming by by Richard L. Halterman"
                     src="images/Cpp.png"></a>
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2018FundamentalsOfCppProgramming" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy"
                     title="Fundamentals Of Python programming by Richard L. Halterman"
                     alt="Fundamentals Of Python programming by Richard L. Halterman"
                     src="https://freecomputerbooks.com/covers/Fundamentals-of-Python-Programming-by-Richard-Halterman.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2018Fundamentals.ofPython" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" width="170px" height="167px"
                     title="Green IT: Technologies and Applications by Kim, Jae H, Lee, Myung J"
                     alt="Green IT: Technologies and Applications by Kim, Jae H, Lee, Myung J"
                     src="https://media.springernature.com/w153/springer-static/cover/book/9783642221798.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/Green_IT_Technologies_and_Applications" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Data Science at the command line by Jeroen Janssens"
                     alt="Data Science at the command line by Jeroen Janssens"
                     src="images/ds.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2014DataScienceAtTheCommandLine/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The baffling brain by P. Cheena Chawla"
                     alt="The baffling brain by P. Cheena Chawla"
                     src="https://n3.sdlcdn.com/imgs/h/t/z/The-Baffling-Brain-SDL210933031-1-e8fc8.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/bafflingbrain00chaw/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Biological relatives : IVF, stem cells, and the future of kinship bt Franklin, Sarah"
                     alt="Biological relatives : IVF, stem cells, and the future of kinship bt Franklin, Sarah"
                     src="images/biorel.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/BiologicalRelatives" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" width="170px" height="167px"
                     title="Software and Mind by Andrei Sorin"
                     alt="Software and Mind by Andrei Sorin"
                     src="https://www.forewordreviews.com/books/covers/software-and-mind.w300.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/SoftwareAndMind" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Eloquent JavaScript: A Modern Introduction to Programming by Marijn Haverbeke"
                     alt="Eloquent JavaScript: A Modern Introduction to Programming by Marijn Haverbeke"
                     src="https://eloquentjavascript.net/img/cover.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2018eloquentjavascript" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy"
                     title="Pro Git by Chacon, Scott, Straub, Ben"
                     alt="Pro Git by Chacon, Scott, Straub, Ben"
                     src="https://git-scm.com/images/progit2.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/progit-en" role="button">Read</a>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- ____________________________________________- -->
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="fiction" class="home-h2">Classics & Fiction</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
         <div class="carousel carousel-public_domain carousel--progressively-enhanced"
            data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" width="130px" height="167px"
                     title="The Four Million by O. Henry"
                     alt="The Four Million by O. Henry"
                     src="images/four.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/fourmillionhenry00henriala/page/n11/mode/2up?ref=ol&view=theater" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Love for a Deaf Rebel by Derrick King"
                     alt="Love for a Deaf Rebel by Derrick King"
                     src="images/derrick.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/love-for-a-deaf-rebel-ebook-edition_202103" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Empire's mistress by Vernadette Gonzalez"
                     alt="Empire's mistress by Vernadette Gonzalez"
                     src="images/mistress.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/empiresmistresss00gonz" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Black Utopias by Brown,Jayna"
                     alt="Black Utopias by Brown,Jayna"
                     src="images/black.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/blackutopias01brow" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Co-Ed Revolution by scheider, Chelsea"
                     alt="Co-Ed Revolution by scheider, Chelsea"
                     src="images/coed.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/coedrevolution00schi" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Emancipation's daughters by Richardson, Riche"
                     alt="Emancipation's daughters by Richardson, Riche"
                     src="images/eman.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/emancipationsdau00rich" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The Tenth Muse by Edward, Thomas"
                     alt="The Tenth Muse by Edward, Thomas"
                     src="images/tenth.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/tenthmuse00thomuoft/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The young Californian by Haven, Alice B. "
                     alt="The young Californian by Haven, Alice B. "
                     src="images/young.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/allsnotgoldthatg00haveiala/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Love for a Deaf Rebel by Derrick King"
                     alt="Love for a Deaf Rebel by Derrick King"
                     src="images/derrick.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/love-for-a-deaf-rebel-ebook-edition_202103" role="button">Read</a>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!--   __________________________________________-->
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="romance" class="home-h2">Romance</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
         <div class="carousel carousel-public_domain carousel--progressively-enhanced"
            data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The Four Million by O. Henry"
                     alt="The Four Million by O. Henry"
                     src="images/four.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/fourmillionhenry00henriala/page/n11/mode/2up?ref=ol&view=theater" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover"><a href="file:///C:/Users/User/Downloads/Project/Project/rateus.html">
                  <img class="bookcover" loading="lazy"
                     title="Fundamentals Of C++ programming by Richard L. Halterman"
                     alt="Fundamentals Of C++ programming by by Richard L. Halterman"
                     src="images/Cpp.png"></a>
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2018FundamentalsOfCppProgramming" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy"
                     title="Fundamentals Of Python programming by Richard L. Halterman"
                     alt="Fundamentals Of Python programming by Richard L. Halterman"
                     src="https://freecomputerbooks.com/covers/Fundamentals-of-Python-Programming-by-Richard-Halterman.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2018Fundamentals.ofPython" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" width="170px" height="167px"
                     title="Green IT: Technologies and Applications by Kim, Jae H, Lee, Myung J"
                     alt="Green IT: Technologies and Applications by Kim, Jae H, Lee, Myung J"
                     src="https://media.springernature.com/w153/springer-static/cover/book/9783642221798.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/Green_IT_Technologies_and_Applications" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Data Science at the command line by Jeroen Janssens"
                     alt="Data Science at the command line by Jeroen Janssens"
                     src="images/ds.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2014DataScienceAtTheCommandLine/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The baffling brain by P. Cheena Chawla"
                     alt="The baffling brain by P. Cheena Chawla"
                     src="https://n3.sdlcdn.com/imgs/h/t/z/The-Baffling-Brain-SDL210933031-1-e8fc8.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/bafflingbrain00chaw/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Biological relatives : IVF, stem cells, and the future of kinship bt Franklin, Sarah"
                     alt="Biological relatives : IVF, stem cells, and the future of kinship bt Franklin, Sarah"
                     src="images/biorel.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/BiologicalRelatives" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" width="170px" height="167px"
                     title="Software and Mind by Andrei Sorin"
                     alt="Software and Mind by Andrei Sorin"
                     src="https://www.forewordreviews.com/books/covers/software-and-mind.w300.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/SoftwareAndMind" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Eloquent JavaScript: A Modern Introduction to Programming by Marijn Haverbeke"
                     alt="Eloquent JavaScript: A Modern Introduction to Programming by Marijn Haverbeke"
                     src="https://eloquentjavascript.net/img/cover.jpg">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/2018eloquentjavascript" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy"
                     title="Pro Git by Chacon, Scott, Straub, Ben"
                     alt="Pro Git by Chacon, Scott, Straub, Ben"
                     src="https://git-scm.com/images/progit2.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/progit-en" role="button">Read</a>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- ___________________________________________-->
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="a_a" class="home-h2">Action & Adventure</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
         <div class="carousel carousel-public_domain carousel--progressively-enhanced"
            data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" width="130px" height="167px"
                     title="The Four Million by O. Henry"
                     alt="The Four Million by O. Henry"
                     src="images/four.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/fourmillionhenry00henriala/page/n11/mode/2up?ref=ol&view=theater" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Love for a Deaf Rebel by Derrick King"
                     alt="Love for a Deaf Rebel by Derrick King"
                     src="images/derrick.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/love-for-a-deaf-rebel-ebook-edition_202103" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Empire's mistress by Vernadette Gonzalez"
                     alt="Empire's mistress by Vernadette Gonzalez"
                     src="images/mistress.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/empiresmistresss00gonz" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Black Utopias by Brown,Jayna"
                     alt="Black Utopias by Brown,Jayna"
                     src="images/black.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/blackutopias01brow" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Co-Ed Revolution by scheider, Chelsea"
                     alt="Co-Ed Revolution by scheider, Chelsea"
                     src="images/coed.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/coedrevolution00schi" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Emancipation's daughters by Richardson, Riche"
                     alt="Emancipation's daughters by Richardson, Riche"
                     src="images/eman.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/emancipationsdau00rich" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The Tenth Muse by Edward, Thomas"
                     alt="The Tenth Muse by Edward, Thomas"
                     src="images/tenth.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/tenthmuse00thomuoft/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="The young Californian by Haven, Alice B. "
                     alt="The young Californian by Haven, Alice B. "
                     src="images/young.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/allsnotgoldthatg00haveiala/mode/2up" role="button">Read</a>
               </div>
            </div>
            <div class="book carousel__item">
               <div class="book-cover">
                  <img class="bookcover" loading="lazy" height="167px"
                     title="Love for a Deaf Rebel by Derrick King"
                     alt="Love for a Deaf Rebel by Derrick King"
                     src="images/derrick.png">
               </div>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <div class="button-group">
                  <a class="btn btn-primary btn-sm" href="https://archive.org/details/love-for-a-deaf-rebel-ebook-edition_202103" role="button">Read</a>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- ___________________________________________-->
      <div class="carousel-section">
         <div class="carousel-section-header">
            <h3 id="m_t" class="home-h2">Mystery & Thriller</h3>
         </div>
         <div class="carousel-container carousel-container-decorated">
            <div class="carousel carousel-public_domain carousel--progressively-enhanced"
               data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" width="130px" height="167px"
                        title="The Four Million by O. Henry"
                        alt="The Four Million by O. Henry"
                        src="images/four.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/fourmillionhenry00henriala/page/n11/mode/2up?ref=ol&view=theater" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="Love for a Deaf Rebel by Derrick King"
                        alt="Love for a Deaf Rebel by Derrick King"
                        src="images/derrick.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/love-for-a-deaf-rebel-ebook-edition_202103" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="Empire's mistress by Vernadette Gonzalez"
                        alt="Empire's mistress by Vernadette Gonzalez"
                        src="images/mistress.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/empiresmistresss00gonz" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="Black Utopias by Brown,Jayna"
                        alt="Black Utopias by Brown,Jayna"
                        src="images/black.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/blackutopias01brow" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="Co-Ed Revolution by scheider, Chelsea"
                        alt="Co-Ed Revolution by scheider, Chelsea"
                        src="images/coed.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/coedrevolution00schi" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="Emancipation's daughters by Richardson, Riche"
                        alt="Emancipation's daughters by Richardson, Riche"
                        src="images/eman.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/emancipationsdau00rich" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="The Tenth Muse by Edward, Thomas"
                        alt="The Tenth Muse by Edward, Thomas"
                        src="images/tenth.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/tenthmuse00thomuoft/mode/2up" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="The young Californian by Haven, Alice B. "
                        alt="The young Californian by Haven, Alice B. "
                        src="images/young.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/allsnotgoldthatg00haveiala/mode/2up" role="button">Read</a>
                  </div>
               </div>
               <div class="book carousel__item">
                  <div class="book-cover">
                     <img class="bookcover" loading="lazy" height="167px"
                        title="Love for a Deaf Rebel by Derrick King"
                        alt="Love for a Deaf Rebel by Derrick King"
                        src="images/derrick.png">
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <div class="button-group">
                     <a class="btn btn-primary btn-sm" href="https://archive.org/details/love-for-a-deaf-rebel-ebook-edition_202103" role="button">Read</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- __________________________________________________ -->
         <br>
         <br>
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
      <script>
      $("#search-input").keyup(function() {
 var val = $.trim(this.value);
 if (val === "")
     $('h.img').show();
 else {
     $('img').hide();
     val = val.split(" ").join("\\ ");
     $("img[alt*=" + val + " i]").show();
 }
});

         $('.js-go-night').click(function(){
         $('body').addClass('night');
         $('div').addClass('night');
         $('nav').addClass('nav-change');
         $('home-h2').style.backgroundColor="black";
         });
         $('.js-go-day').click(function(){
         $('body').removeClass('night');
         $('div').removeClass('night');
         $('nav').removeClass('nav-change');
         });


</script>

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
