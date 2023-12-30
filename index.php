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
                    echo '<a href="logout.php" class="sign-in">Logout</a>';
                }
            ?>
        </div>
    </header>
    <section class="home" id="home">
        <div class="car">
            <div class="text">
                <h1><span>Looking</span> for <br>rent a car</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, reiciendis eaque!</p>
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex, nemo cupiditate! Quisquam officiis
                    repudiandae incidunt, rerum ipsa blanditiis voluptatum natus suscipit eligendi non hic sed error
                    saepe vel iste veritatis culpa est accusamus cupiditate?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tempore pariatur nulla modi, illum
                    vel cum totam eveniet.</p>
                <a href="#" class="btn">Learn More</a>
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
                    <img src="images/prince_photo.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequuntur sequi labore aliquid
                    error dolore id, facilis voluptas.</p>
            </div>
            <div class="box">
                <div class="rev-image">
                    <img src="images/prince_photo.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequuntur sequi labore aliquid
                    error dolore id, facilis voluptas.</p>
            </div>
            <div class="box">
                <div class="rev-image">
                    <img src="images/prince_photo.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet consequuntur sequi labore aliquid
                    error dolore id, facilis voluptas.</p>
            </div>
        </div>

    </section>

    <!-- ride  -->

    <section class="faq" id="faq">
        <div class="heading">
            <span>How it works ?</span>
            <h1>Rent with 3 easy steps</h1>
        </div>
        <div class="faq-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose a location</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea mollitia debitis, dolores aliquam nulla
                    sunt!</p>
            </div>
            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick up date</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea mollitia debitis, dolores aliquam nulla
                    sunt!</p>
            </div>
            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book a car</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea mollitia debitis, dolores aliquam nulla
                    sunt!</p>
            </div>
        </div>
    </section>

    <!-- newsletter -->

    <section class="newsletter">
        <h2>Subscribe to newsletter</h2>
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