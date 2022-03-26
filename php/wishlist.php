<?php
session_start();
//index.php
if( ! isset($_SESSION["username"])){
      header("Location:Login.php");
      return;
}
$user= isset($_SESSION["username"])?$_SESSION["username"]:'';
$error = '';
$output = '';




$servername = "localhost";//Server Name
$username = "avk";//Server User Name
$password = "avkproj";//Server Password
$dbname = "web_dev_internship";//Database Name

//Create DB Connection
$connect = mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST["add"]) && isset($_SESSION["username"]))
{
    if(isset($_POST['books'])){
     if(empty($_POST["books"]))
    {
        $error = '<label class="text-danger">Please enter book name!</label>';
    }
    else
    {
        $books = $_POST['books'];;
        $query = "INSERT INTO wishlist(books,username) values('$books','$user')";
        $result = mysqli_query($connect, $query);
        $error = '<label class="text-success">Data Inserted Successfully</label>';
    }}
}

$sql = "SELECT books FROM wishlist where username='$user'";
$result = mysqli_query($connect, $sql);
  $count=mysqli_num_rows($result);




 {
  ?>

<html>
    <head>
        <title>My list</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        /navbar/
        .button-group{
            margin-top: 5px;
            text-align: center;
        }

        a:hover{
        	background-color: #505050;
        	border-radius: 10px;
          decoration: none;
        }

        .pg-lg{
            width: 70px;
            height: 70px;
        }

        .nav-item{
            font-size: 18px;
        }

        .dropdown-item{
            font-size: 16px;
        }

        /body/
        label{
            font-size: 18px;
        }

        /_______footer________/

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
.container{
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
background-color: darkslategrey;

}
}

    </style>
    <body>
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
                    <a style="color:white;" class="nav-link active" aria-current="page" href="Book.php">Books</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                    <a style="color:white;" class="nav-link active" aria-current="page" href="magzine.php">Magazines</a>
                 </li>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;
              </ul>
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <img id="signup" src="https://upload.wikimedia.org/wikipedia/commons/1/12/User_icon_2.svg">
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="Login.php">Login</a></li>
                    <li><a class="dropdown-item" href="Register.php">Sign up</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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
    </div>

        <div class="container">
            <div class="row content">
                <div class="col-sm-2">
                    &nbsp;
                </div>
                <div class="col-sm-8 text-left">
                    <br />
                    <u><h1 align="center" style="text-shadow: 2px 2px #c4c3d0;">WISHLIST</h1></u>
                    <br />
                    <div align="center"><?php echo $error; ?></div>
                    <form method="post">
                        <div class="row">
                            <!--label>Username:</label>
                            <input type="text" name="username" -->
                            <br><br>
                            <label>Enter the name of book/magazine:</label>
                          <center><div class="col-md-9">
                                 <textarea name="books" class="form-control" rows="10"></textarea>
                            </div></center>
                        </div>
                        <br />
                        <div align="center">
                            <input type="submit" name="add" class="btn btn-primary" value="Add" style="width: 150px; height: 33px; font-size: 16px; background-color: green;" />
                        </div>
                    </form>
                    <br />
                    <h2  style="text-shadow: 1px 1px #c4c3d0; font-size: 25px;">This is your wishlist:</h2>
                    <br />
                     <table class="table table-striped table-bordered">
                        <tr>
                            <td>Books & magazine list:</td>
                        </tr>
                        <?php
                          if($count>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>".$row['books']."</td>";
                                    echo "<td>".'<a href="delete.php?books='.$row['books'].'">Delete</a>'."</td>";
                                  }
                            }
                        ?>
                    </table>
                </div>
                <div class="col-sm-2">
                    &nbsp;
                </div>
            </div>
        </div><br><br><br><br><br>
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

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <?php
  }
  ?>
    </body>
</html>
