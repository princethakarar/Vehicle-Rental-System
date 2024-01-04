<?php include "functions.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Rental System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div class="container1" id="blur">
    <header>
        <a href="#" class="logo"><img src="images/logo2.png" alt="logo"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#cars">Cars</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Review</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
        <div class="header-btn">
            <?php
                session_start();
                if(!isset($_SESSION['name']))
                {
                    echo '<a href="register.php" class="sign-up">Sign up</a>
                    <a href="login.php" class="sign-in">sign in</a>';
                }
                else{
                    echo '<a href="order status.php" class="order_sta"><img src="images/cart1.png" height="50px"></a>';
                    echo '<a href="profile.php" class="profile" onclick="toggle2()" style="padding-left:10px;"><i class="bx bxs-user-circle"></i></a>';
                }
            ?>
        </div>
    </header>
    <section class="home" id="home">
        <div class="car">
            <div class="text">
                <h1><span>Looking</span> for <br>Car on Rent?</h1>
                <p>Drive your journey with our wheels - <span>"</span>Where every journey begins with seamless car Rental Experiences<span>"</span></p>
            </div>
            <img src="images/cars/nexon dark.png" alt="car">
        </div>
        <!-- <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick up Date</span>
                    <input type="date">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date">
                </div>
                <input type="submit" class="btn" onclick="alert('Choose a Car')">
            </form>
        </div> -->
    </section>

    <!-- cars -->

    <section class="cars" id="cars">
        <div class="heading">
            <span>Cars</span>
            <h1>Explore our best Cars</h1>
        </div>
        <div class="categories">
            <div class="select">
                <select name="brand" id="brand">
                    <option value="" selected>All Brands</option>
                    <option value="Maruti Suzuki">Maruti Suzuki</option>
                    <option value="Tata">Tata</option>
                    <option value="Hyundai">Hyundai</option>
                </select>
            </div>
            <h2 class="head"></h2>
            <div id="buttons">
                <button class="button active" value="all" onclick="filterProduct('all')">All</button>
                <button class="button" value="hatchback" onclick="filterProduct('hatchback')">Hatchback</button>
                <button class="button" value="sedan" onclick="filterProduct('sedan')">Sedan</button>
                <button class="button" value="suv" onclick="filterProduct('suv')">MUVs/SUVs</button>
            </div>  
        </div>
        <div class="cars-container">
            <!-- <div class="box">
                <div class="box-image">
                    <img src="images/cars/alto.png">
                </div>
                <p>2017</p>
                <h3>2018 Honda Civic</h3>
                <h2>&#8377;5000 | &#8377;500 <span>/Month</span> </h2>
                <a href="#cars" onclick="toggle()" class="btn">Rent Now</a>
            </div>  
            <div class="box">
                <div class="box-image">
                    <img src="images/cars/alto.png">
                </div>
                <p>2017</p>
                <h3>2018 Honda Civic</h3>
                <h2>&#8377;5000 | &#8377;500 <span>/Month</span> </h2>
                <a href="#cars" onclick="toggle()" class="btn">Rent Now</a>
            </div>  -->
        </div>
    </section>  

    <!-- about -->

    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-image">
                <img src="images/cars/ertiga.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Welcome to <span>VRS</span>,<br> where our commitment to excellence drives every mile. We strive for excellence in every aspect, from the vehicles we offer to the service we provide. We're not just a transportation provider, we're your travel companion, ensuring every mile is memorable.</br></p>
                <p><span>'</span> We hope you have a safe and pleasant journey <span>'</span></p>
            </div>
        </div>
    </section>

    <!-- reviews -->

    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Review</span>
            <h1>What our Customer Says</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-image">
                    <img src="images/user1.jpeg" alt="">
                </div>
                <h2>Nikunj Shah</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Excellent Service!<br>"I recently rented a car from VRS, and the experience was Awesome. I highly recommend VRS for a stress-free and enjoyable car rental experience"</p>
            </div>
            <div class="box">
                <div class="rev-image">
                    <img src="images/user2.jpg" alt="">
                </div>
                <h2>Nikita Mehta</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>Good Experience<br>"Recently booked Ertiga from this website, was a worth-taking decision as they provide time to time service as per our requirements"</p>
            </div>
            <div class="box">
                <div class="rev-image">
                    <img src="images/user3.jpeg" alt="">
                </div>
                <h2>Rajesh Karia</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>Efficient Drop-Off and Pick-Up<br>
"One of the standout features of VRS is their efficient drop-off and pick-up process, It's a time-saver"</p>
            </div>
        </div>

    </section>

    <!-- ride  -->

    <section class="faq" id="faq">
        <div class="heading">
            <span>How it works ?</span>
            <h1>Rent with 3 Easy Steps</h1>
        </div>
        <div class="faq-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose a Location</h2>
                <p>Our car hubs are available in all Metro Cities. Choose your ideal pickup spot and start your journey effortlessly.</p>
            </div>
            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick Up Date</h2>
                <p>Pick a date that suits your plans, and we'll ensure your chosen wheels are ready to roll when you are</p>
            </div>
            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book a Car</h2>
                <p>Book your ride with a few simple clicks. Choose a car, set your dates, and confirm your booking.</p>
            </div>
        </div>
    </section>

    <!-- newsletter -->

    <section class="newsletter">
        <h2>Subscribe to Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your Email">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>

    <!-- copyright -->

    <div class="copyright">
        <p>&#169; VRS All Rights Reserved</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
        </div>
    </div>
    </div>

    <!-- popup box -->

    <div id="popup">
        <?php
            // include "getinfo.php";
        ?>
    </div>


    <!-- scroll reveal -->

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>

    <script>
        function toggle()
        {
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
        }
    </script>
    <script src="script.js"></script>
</body>

</html>