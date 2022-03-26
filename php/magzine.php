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
      <title>Get free access to magazines you always wanted to read</title>
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
                    <a style="color:white;" class="nav-link active" aria-current="page" href="Book.php">Books</a>
                 </li>
                 <li class="nav-item dropdown">
                    <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Genre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <li><a class="dropdown-item" href="#c_e">Computer & Electronics</a></li>
                       <li><a class="dropdown-item" href="#f_l">Fashion & Lifestyle</a></li>
                       <li><a class="dropdown-item" href="#b_f">Business & Finance</a></li>
                       <li><a class="dropdown-item" href="#comics">Comics</a></li>
                       <li>
                          <hr class="dropdown-divider">
                       </li>
                       <li>
                          <center>📚📖📝</center>
                       </li>
                    </ul>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
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
                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
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
      <br>
  <div class="row">
      <div class="col-md-12">
         <button class="btn btn-secondary btn-sm js-go-day">DAY MODE</button>
         <button class="btn btn-secondary btn-sm js-go-night">NIGHT MODE</button>
      </div>
  </div><br>

   <!-- ________________________________________________-->
   <?php
   if( ! isset($_SESSION["username"])){
         header("Location:Login.php");
         return;
   }
    ?>
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="c_e" class="home-h2">Computer & Electronics</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
      <div class="carousel carousel-public_domain carousel--progressively-enhanced"
        data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">

      <div class="book carousel__item">
         <div class="book-cover"><a href="#">
            <img class="bookcover" loading="lazy" height="167px"
               title="PC gamer"
               alt="PC gamer"
               src="images/pcgamer.png"></a>
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98236-pc-gamer-us-2021-06-15/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="Linux"
               alt="Linux"
               src="images/linux.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96666-linux-format-2021-06-01/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="PC pro"
               alt="PC pro"
               src="images/pcpro.png"></a>
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/97949-pc-pro-2021-06-10/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="Gadget of the year"
               alt="Gadget of the year"
               src="images/gadget.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98396-t3-2021-06-09/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="iMAC"
               alt="iMAC"
               src="images/mac.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96667-macformat-2021-06-01/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="Practical photoshop"
               alt="Practical photoshop"
               src="images/photoshop.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96348-practical-photoshop-2021-05-28/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="The Cloud computing manual"
               alt="The Cloud computing manual"
               src="images/cloud.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89119-cloud-computing-the-complete-manual-issue-march-2021/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="The Python manual"
               alt="The Python manual"
               src="images/python.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89116-python-the-complete-manual-issue-march-2021/read" role="button">Read</a>
         </div>
      </div>

      <div class="book carousel__item">
         <div class="book-cover">
            <img class="bookcover" loading="lazy" height="167px"
               title="Internet security"
               alt="Internet security"
               src="images/netsecurity.png">
         </div>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

         <div class="button-group">
            <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89115-internet-security-the-complete-manual-issue-march-2021/read" role="button">Read</a>
         </div>
      </div>


      </div>
      </div>
      <br>

      <!-- ____________________________________________- -->
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id = "f_l" class="home-h2">Fashion & Lifestyle</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
      <div class="carousel carousel-public_domain carousel--progressively-enhanced"
          data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="PC gamer"
                   alt="PC gamer"
                   src="images/pcgamer.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98236-pc-gamer-us-2021-06-15/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Linux"
                   alt="Linux"
                   src="images/linux.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96666-linux-format-2021-06-01/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="PC pro"
                   alt="PC pro"
                   src="images/pcpro.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/97949-pc-pro-2021-06-10/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Gadget of the year"
                   alt="Gadget of the year"
                   src="images/gadget.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98396-t3-2021-06-09/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="iMAC"
                   alt="iMAC"
                   src="images/mac.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96667-macformat-2021-06-01/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Practical photoshop"
                   alt="Practical photoshop"
                   src="images/photoshop.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96348-practical-photoshop-2021-05-28/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="The Cloud computing manual"
                   alt="The Cloud computing manual"
                   src="images/cloud.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89119-cloud-computing-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="The Python manual"
                   alt="The Python manual"
                   src="images/python.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89116-python-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Internet security"
                   alt="Internet security"
                   src="images/netsecurity.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89115-internet-security-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

      </div>
      </div>
      <br>
      <!--   __________________________________________-->
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="b_f" class="home-h2">Business & Finance</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
      <div class="carousel carousel-public_domain carousel--progressively-enhanced"
          data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">


          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="PC gamer"
                   alt="PC gamer"
                   src="images/pcgamer.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98236-pc-gamer-us-2021-06-15/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Linux"
                   alt="Linux"
                   src="images/linux.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96666-linux-format-2021-06-01/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="PC pro"
                   alt="PC pro"
                   src="images/pcpro.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/97949-pc-pro-2021-06-10/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Gadget of the year"
                   alt="Gadget of the year"
                   src="images/gadget.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98396-t3-2021-06-09/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="iMAC"
                   alt="iMAC"
                   src="images/mac.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96667-macformat-2021-06-01/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Practical photoshop"
                   alt="Practical photoshop"
                   src="images/photoshop.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96348-practical-photoshop-2021-05-28/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="The Cloud computing manual"
                   alt="The Cloud computing manual"
                   src="images/cloud.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89119-cloud-computing-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="The Python manual"
                   alt="The Python manual"
                   src="images/python.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89116-python-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Internet security"
                   alt="Internet security"
                   src="images/netsecurity.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89115-internet-security-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>


      </div>
      </div>
      <br>

      <!-- ___________________________________________-->
      <div class="carousel-section">
      <div class="carousel-section-header">
         <h3 id="comics" class="home-h2">Comics</h3>
      </div>
      <div class="carousel-container carousel-container-decorated">
      <div class="carousel carousel-public_domain carousel--progressively-enhanced"
          data-config="[&quot;.carousel-public_domain&quot;, 6, 5, 4, 3, 2, 1, {}]">

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="PC gamer"
                   alt="PC gamer"
                   src="images/pcgamer.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98236-pc-gamer-us-2021-06-15/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Linux"
                   alt="Linux"
                   src="images/linux.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96666-linux-format-2021-06-01/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="PC pro"
                   alt="PC pro"
                   src="images/pcpro.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/97949-pc-pro-2021-06-10/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Gadget of the year"
                   alt="Gadget of the year"
                   src="images/gadget.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/98396-t3-2021-06-09/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="iMAC"
                   alt="iMAC"
                   src="images/mac.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96667-macformat-2021-06-01/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Practical photoshop"
                   alt="Practical photoshop"
                   src="images/photoshop.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/96348-practical-photoshop-2021-05-28/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="The Cloud computing manual"
                   alt="The Cloud computing manual"
                   src="images/cloud.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89119-cloud-computing-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="The Python manual"
                   alt="The Python manual"
                   src="images/python.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89116-python-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>

          <div class="book carousel__item">
             <div class="book-cover">
                <img class="bookcover" loading="lazy" height="167px"
                   title="Internet security"
                   alt="Internet security"
                   src="images/netsecurity.png">
             </div>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
             <span class="fa fa-star"></span>

             <div class="button-group">
                <a class="btn btn-primary btn-sm" href="https://www.yumpu.com/news/en/issue/89115-internet-security-the-complete-manual-issue-march-2021/read" role="button">Read</a>
             </div>
          </div>



      </div>
      </div>
      <br>
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
