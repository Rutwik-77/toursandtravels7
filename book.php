<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- swipper link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <!--header section Ends -->

<div class="heading" style="background:url(https://simpleflying.com/wp-content/uploads/2019/01/dubai-airport.jpg)">

<h1>book Now</h1>
</div>

<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">book your trip!!!</h1>
    <form action="book_form.php" method="POST" class="book-form">

    <div class="flex">
        <div class="inputbox">
            <span>name :</span>
            <input type="text" placeholder="Enter your Name" name="name">
        </div>

        <div class="inputbox">
            <span>email :</span>
            <input type="text" placeholder="Enter your Email" name="email">
        </div>

        <div class="inputbox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your phone number" name="phone">
        </div>

        <div class="inputbox">
            <span>address :</span>
            <input type="text" placeholder="Enter your address" name="address">
        </div>

        <div class="inputbox">
            <span>where to  :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>

        <div class="inputbox">
            <span>how many :</span>
            <input type="number" placeholder=" number of guests" name="guests">
        </div>

        <div class="inputbox">
            <span>arrivals :</span>
            <input type="date"  name="arrivals">
        </div>

        <div class="inputbox">
            <span>leaving :</span>
            <input type="date"  name="leaving">
        </div>
    </div>

<input type="submit" value="submit" class="btn" name="send">


    </form>
</section>



<!-- booking section starts -->









    <!-- footer start -->



    <section class="footer">


        <div class="box-container">



            <div class="box">
                <h3> Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3> Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask question </a>
                <a href="#"><i class="fas fa-angle-right"></i>about us </a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy </a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use </a>
            </div>

            <div class="box">
                <h3> contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890 </a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333 </a>
                <a href="#"><i class="fas fa-envelope"></i>shaikhanas@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i>mumbai ,india, 400104 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook </a>
                <a href="#"><i class="fab fa-twitter"></i>twitter </a>
                <a href="#"><i class="fab fa-instagarm"></i>instagram </a>
                <a href="#"><i class="fab fa-linkedln"></i>linkedln </a>
            </div>
        </div>

        <div class="credit">
            created by <span>mr. Rutwik</span> | all rights reserved

        </div>





    </section>




    <!-- footer end -->






    <!-- swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- linking the script file-->
    <script src="script.js"></script>
</body>

</html>