<!DOCTYPE html>
<html>
<head>

    <head>
    <style type="text/css">
    @media screen and (max-width: 900px){
  .container-fluid{
    background: darkslategrey;

  }
}

    </style>
    <title>Registration</title>
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
    </div>
    <!-----------Main-Content---------><br><br>
    <center><h1 style="color:#3aaf9f">Thank you for choosing us!</h1></center>
<div class="wrapper" style="box-shadow: 5px 5px #E8E8E8">
    <div class="title">
        Register Here
    </div>
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

    <center><img id="user" src="https://static.vecteezy.com/system/resources/thumbnails/000/550/980/small/user_icon_001.jpg" alt="user"></center>
 <div class="form" style="column-count: 2; column-gap: 40px;">
    <div class="column1">
   <div class="input_field">
      <input type="text" name="name" placeholder="Name" class="input" id="name" required>
   </div>
   <div class="input_field">
      <input type="text" name="email" placeholder="Email" class="input" id="email" required>
   </div>
   <div class="input_field">
      <input type="text" name="username" placeholder="Username" class="input" required>
   </div>
     <div class="input_field">
          <input type="password" name="password1" placeholder="Password" class="input" id="password1" maxlength="15" minlength="8" onkeyup="check()" required>
    </div>
    <div class="input_field">
    <span id="strength">Strength</span>
 </div>
   <div class="input_field">
    <p id="p1" style="font-size:11px;"></p>
   </div>
    <div class="input_field">
          <input type="password" name="password2" placeholder="Confirm Password" class="input" id="password2" required>
    </div>

   <div class="input_field">
    <label><b>Gender</b></label><br>
      <input type="radio" value="0" name="gender">
      <label>Male</label>
      <input type="radio"  value="1" name="gender">
      <label> Female</label>
      <input type="radio" value="2" name="gender">
      <label> Other</label>
   </div>
</div>
<div class="column2">
<div class="input_field">
    <label><b>Age</b></label><br>
      <input type="radio" value="<30" name="age">
      <label><30</label><br>
      <input type="radio" value="30-60" name="age">
      <label>30-60</label><br>
      <input type="radio" value=">60" name="age">
      <label>60 and above</label>
   </div>

 </div>
 </div>
 <div >
      <p><center><input type="submit" name="submit" class="btn" onclick="submitpage()"></p>
      <a href="login.php">Login</a> if you have already registered</center>
   </div>
  </form>
</div><br><br><br><br><br><br>
<!------------Footer------------------>
<div class="footer">
<footer >
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
  </div>
    <script type="text/javascript">
    function submitpage(){
      var password1=document.getElementById('password1').value;
      var password2=document.getElementById('password2').value;
      if(password1!=password2)
      {alert("Password didn't match");
      return false;
      }
     }


function check(){
var pp=document.getElementById("p1").value
var a=document.getElementById("password1").value;
b=document.getElementById("password2").value;
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

    </script>

    <?php
        require_once "php/pdo.php";

    		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password1']) && isset($_POST['gender']) && isset($_POST['age'])){
    			if($_POST['password1'] == $_POST['password2']){
    				$sql= "INSERT INTO signup (name, email, username, password, gender, age) VALUES (:name, :email, :username, :password, :gender, :age)";
    				echo("<script>alert('You have successfully registered with us')</script>");
    				$stmt = $pdo->prepare($sql);
    				$stmt->execute(array(
    					':name' => $_POST['name'],
    					':email' => $_POST['email'],
    					':username' => $_POST['username'],
    					':password' => $_POST['password1'],
    					':gender' => $_POST['gender'],
    					':age' => $_POST['age'],
    				));
    			}
    		}
     ?>
</body>
</html>
