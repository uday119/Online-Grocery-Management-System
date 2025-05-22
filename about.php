<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/bag.jpg" alt="">
         <h3>What Makes Us Different.</h3>
         <p>We are a modern online grocery platform dedicated to making your shopping easy, fast, and convenient. With a wide range of fresh produce, daily essentials, and household items, we bring your groceries to your doorstep with just a few clicks.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/service.jpg" alt="">
         <h3>Our Services</h3>
         <p>We provide a complete online grocery shopping experience with a wide range of fresh fruits, vegetables, daily essentials, packaged foods, and household items. Our platform ensures easy ordering, secure payments, and fast doorstep delivery, making grocery shopping simple, reliable, and convenient.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">What Our Customers Say</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/men2.jpg" alt="">
         <p>"Ordering groceries online has never been this easy. The delivery is always on time and the quality is great!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ravi Mehta</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I love the wide variety of products available. It's my go-to place for monthly grocery shopping."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anjali Sharma</h3>
      </div>

      <div class="box">
         <img src="images/men2.jpg" alt="">
         <p>"Very user-friendly interface and fast service. I highly recommend it to busy families."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohammad irfan</h3>
      </div>

      <div class="box">
         <img src="images/w 1.jpg" alt="">
         <p>"Fresh fruits and vegetables delivered right to my door – it saves me so much time!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya Nair</h3>
      </div>

      <div class="box">
         <img src="images/men1.jpg" alt="">
         <p>"Great deals and offers. I always find what I need at a good price."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rajesh Verma</h3>
      </div>

      <div class="box">
         <img src="images/w 1.jpg" alt="">
         <p> "Customer support is very helpful and polite. A reliable grocery app for everyday needs."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Neha Desai</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>