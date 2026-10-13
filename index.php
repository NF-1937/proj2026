<?php 

include './inc/db.php';
include './inc/form.php';
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result,  MYSQLI_ASSOC);




mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.php" >
    <link rel="stylesheet" href="./css/stayle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">سحب المليون الوهمي  </h1>
      <p class="lead fw-normal">شارك معنا لتربح مليون ريال وهمية</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>












<div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
    </div>
    </div>

    

 <form action="index.php" method="post">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <br>
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <br>
    <input type="text" name="email" id="email"  placeholder="Email">
    <input type="submit" name="submit" value="send">
 </form>



 <?php foreach($users as $users) : ?>
 <h1><?php htmlspecialchars( $users ['firstName ']) .' '. htmlspecialchars( $users ['lasttName ']) .'<br> '. htmlspecialchars( $users ['email '])  ; ?></h1> ;
<?php endforeach; ?>


<script src="index.php" ></script>
  <script src="./js/script.js"></script>  
</body>
</html>