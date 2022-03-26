 <?php

  require 'db_connection.php';

  $review = "SELECT feedback from rating";

  $sql5 = "SELECT * from rating where rate=5";
  $sql4 = "SELECT * from rating where rate=4";
  $sql3 = "SELECT * from rating where rate=3";
  $sql2 = "SELECT * from rating where rate=2";
  $sql1 = "SELECT * from rating where rate=1";

  $sql = "SELECT * from rating";

  $rev_res = mysqli_query($conn, $review);
  $result5 = mysqli_query($conn, $sql5);
  $result4 = mysqli_query($conn, $sql4);
  $result3 = mysqli_query($conn, $sql3);
  $result2 = mysqli_query($conn, $sql2);
  $result1 = mysqli_query($conn, $sql1);

  $result = mysqli_query($conn, $sql);

  $rev_count=mysqli_num_rows($rev_res);
  $val_5=mysqli_num_rows($result5);
  $val_4=mysqli_num_rows($result4);
  $val_3=mysqli_num_rows($result3);
  $val_2=mysqli_num_rows($result2);
  $val_1=mysqli_num_rows($result1);

  $val=mysqli_num_rows($result);
  if($val>0){
  $avg = round(((5*$val_5)+(4*$val_4)+(3*$val_3)+(2*$val_2)+(3*$val_1))/$val);

$val5=(($val_5/$val)*100);
$val4=(($val_4/$val)*100);
$val3=(($val_3/$val)*100);
$val2=(($val_2/$val)*100);
$val1=(($val_1/$val)*100);}
else{
   $avg = 0;
   $val5=0;
   $val4=0;
   $val3=0;
   $val2=0;
   $val1=0;
}

 {
  ?>
<!doctype html>
<html>
    <head>
      <title>Leave us a rating!</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

.book{
  float: left;
  position: relative;
  border:10px double black;
  padding: 20px;
  width:30%;
}

.text{
  font-style:"Times New Roman" serif;
  font-size: 15px;
  float:right;
  width: 65%;
}

#image{
  max-width: 200px;
	max-height: 200px;
  transform: scale(1.1);
	animation: mymove 3s infinite;
}

@keyframes mymove {
  25% {box-shadow: 10px 20px 20px gray;}
}


.box{
  background: #DBD7D3;
	border-bottom: 1px solid #e4e0cc;
	border-top: 1px solid #eae7d6;
  border-radius: 20px;
  padding: 20px;
}

/* Individual bars */

/* Individual bars */
<?php
  {
    ?>
.bar-5 {width: <?= $val5?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-4 {width: <?= $val4?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-3 {width: <?= $val3?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-2 {width: <?= $val2?><?php } ?>%; height: 18px; background-color: #ff9800;}

<?php
  {
    ?>
.bar-1 {width: <?= $val1?><?php } ?>%; height: 18px; background-color: #ff9800;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

/*start rating*/

.txt-center {
  text-align: center;
}
.hide {
  display: none;
}

.clear {
  float: none;
  clear: both;
}

.rating {
    width: 90px;
    unicode-bidi: bidi-override;
    direction: rtl;
    text-align: center;
    position: relative;
}

.rating > label {
    float: right;
    display: inline;
    padding: 0;
    margin: 0;
    position: relative;
    width: 1.1em;
    cursor: pointer;
    color: #000;
}

.rating > label:hover,
.rating > label:hover ~ label,
.rating > input.radio-btn:checked ~ label {
    color: transparent;
}

.rating > label:hover:before,
.rating > label:hover ~ label:before,
.rating > input.radio-btn:checked ~ label:before,
.rating > input.radio-btn:checked ~ label:before {
    content: "\2605";
    position: absolute;
    left: 0;
    color: #FFD700;
}



</style>
</head>
<body>
  <h1>Fundamentals Of C++ programming by Richard L. Halterman</h1>
  <div class="book">
    <div>
     <center>
     <img id="image" src="images/Cpp.png"></img><br><br>
     <details>
       <summary>About the author: </summary>
       <p style="font-size:12px;"><b>Richard Halterman</b>, Ph.D. is a professor of computer science and dean of the School of Computing, Southern Adventist University. Dr. Halterman’s specialties include object oriented design and programming, algorithms, data structures, discrete mathematics, compiler construction, graphical interfaces, computer graphics, and artificial intelligence. </p>
     </details>
     </center>
    </div>
  </div>
  <div class="text box">
      <p style="font-size:18px;">This book teaches the basics of C++ programming in an easy-to-follow style, without assuming previous experience in any other language. A variety of examples such as game programming, club membership organization, grade tracking and grade point average calculation, make learning C++ both fun and practical. Each chapter contains at least one complete, fully functional example program, with several smaller examples provided throughout the book.
      <br>A computer program, from one perspective, is a sequence of instructions that dictate the flow of electrical impulses within a computer system. These impulses affect the computer’s memory and interact with the display screen, keyboard, mouse, and perhaps even other computers across a network in such a way as to produce the “magic” that permits humans to perform useful tasks, solve high-level problems, and play games. One program allows a computer to assume the role of a financial calculator, while another transforms the machine into a worthy chess opponent.</p>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr><hr>
<span class="heading">User Rating</span>
<?php

$count = $avg;
for($i=0; $i<5; $i++){
  if($count!=0){
     echo "<span class='fa fa-star checked'></span>";
      $count--;
  }
  else{
      echo "<span class='fa fa-star'></span>";}
  }

?>

<p><?= $avg ?> average based on <?= $val ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?= $val_5 ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?= $val_4 ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?= $val_3 ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?= $val_2 ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?= $val_1 ?></div>
  </div>
</div>
  <br><br>
<hr>
<div class="box">
  How was your experience?:
  <div class="txt-center">
    <form method="POST" action="style.php">

              <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'><?= $val ?></span>
    <input type="hidden" name="rating">



     Review: <textarea name="review" placeholder="Tell others what you think about the book" rows="4" cols="95"></textarea>
     <input type="submit" name="submit" class="btn" value="Send">
   </form>
</div>Reviews:<br>
   <?php
   if($rev_count>0){
    while($row = mysqli_fetch_assoc($rev_res)){
      echo $row["feedback"]."<br>";
      echo '<hr>';
    }
   }
   else
    echo "0 Feedback";
   ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
<?php
  }
  ?>
    </body>
</html>
