 <?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=web_dev_internship','avk','avkproj');
 //see the errors folder for details...
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>
