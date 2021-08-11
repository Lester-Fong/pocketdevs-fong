<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.css"/>
    <!-- ---Google Fonts--- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;700&family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- ----FONTAWESOME!----- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Fongtel</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="./imgs/fongtel-logo-bgRemoved.png" alt="Fongtel logo">
        </div>
        <div class="navigation">
            <ul class="ul-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Guest Rooms</a></li>
                <li><a href="#features">Restaurant</a></li>
                <li><a href="#features">Clubs&Bars</a></li>
                <li><a href="#features">Wellness</a></li>
                <li><a href="./blogPost/homeBlog.php">Blogs</a></li>
                <li><a href="../index.php">Log In</a></li>
                
            </ul>
        </div>
    </nav>  

    <div id="sidenav">
        <ul>
            <li>Home</li>
            <li>Guest Rooms</li>
            <li>Restaurant</li>
            <li>Clubs&Bars</li>
            <li>Wellness</li>
            <li>Blogs</li>
            <li>LogIn</li>
        </ul>
    </div>

    <div class="mobile-nav">
        <img src="./imgs/fongtel-logo-bgRemoved.png" alt="">
        <i class="fa fa-bars" aria-hidden="true" id="menuBtn"></i>
    </div>
   <header>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./imgs/header9.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header0.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header2.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header3.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header4.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header5.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header6.jpg"></div>
                <div class="swiper-slide"><img src="./imgs/header7.jpg"></div> 
                <div class="swiper-slide"><img src="./imgs/header8.jpg"></div> 
                <div class="swiper-slide"><img src="./imgs/header1.jpg"></div> 
            </div>
        </div>   
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </header>

    <!-- -----Welcome Section------ -->
    <section id="welcome">
        <div class="welcome-container">
            <h1>Welcome to Fongtel</h1>
            <span>Experience the Sky</span>
            <div class="description">
                <p>We, at Fongtel Hotel will provide your home as long as you're here. Explore the different kinds of activities that will wash your worries away. Experience the world-class yet affordable guest rooms, wellness and restaurant dish at our Hotel. Get to know other people with our Hotel's Club and Bar. </p>
            </div>
        </div>
        <div class="color-overlay"></div>
    </section>    

    <!-- -----About Us----- -->
    <section id="about">
        <div class="about-container">
            <div class="about-us">
                <article>
                    <h1>About Us</h1>
                    <div class="box-container">
                        <p>Fongtel is a family owned Hotel with a swimming pool, restaurant, gym, spas, clubs and bars. Our hotel provides world-class yet affordable homes for over 20 years. The Hotel's location is in Binan, Laguna.</p>
                        <p>The desire is to cater and provide guests with personalized hospitality based on what they prefer and not what is customary. A key element to our success is our effort to engage our staff in becoming a real team member with the same goals. We also value and mold them to be vibrant, welcoming, passionate and respectful of hotel guests. Inspired service is what we expect and hope for from our staff.  They are prepared to know our guests and their preference that allows them, the staff, to create a personalized service that can bring the hotel closer to the mission of building guest loyalty.</p>
                    </div>
                </article>
            </div>

            <div class="mapa">
                <h1>Explore our neighbourhood</h1>
                <div class="box-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61868.10969438282!2d121.0470734247691!3d14.267397237230833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70cc905e489%3A0xdbb7938dd87f5563!2zQmnDsWFuLCBMYWd1bmE!5e0!3m2!1sen!2sph!4v1627382050648!5m2!1sen!2sph" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ------FORM------ -->
    <form id="form">
        <fieldset>
            <div class="ekis">
                <i class="fa fa-minus" aria-hidden="true"></i>
            </div>
            <legend>Welcome to Fongtel!</legend>
            <label for="name">Enter Name</label>
            <input type="text" id="name" placeholder="Enter your name">
            <label for="email">Enter your Email</label>
            <input type="email" id="email" placeholder="Enter your email">

            <label for="Date">Arrival Date</label>
            <input type="date" id="Date" >
            <label for="night">How many Nights:</label>
            <select name="night" id="night">
                <optgroup label="Few Days">
                  <option value="solo">1 day</option>
                  <option value="dos">2 days</option>
                  <option value="tres">3 days</option>
                </optgroup>
                <optgroup label="Week">
                  <option value="mercedes">1 week</option>
                  <option value="audi">2 weeks or more</option>
                </optgroup>
            </select>

            <label for="num">How many guest:</label>
            <select name="cars" id="num">
                <optgroup label="Small Group">
                  <option value="solo">1</option>
                  <option value="dos">2</option>
                  <option value="tres">3</option>
                </optgroup>
                <optgroup label="Group">
                  <option value="mercedes">Family</option>
                  <option value="audi">Barkada</option>
                </optgroup>
            </select>

            <input class="formbtn" type="submit"></input>
        </fieldset>
    </form>


    <!-- -----Feautures----- -->
    <section id="features">
        <div class="feauture-icons">
            <i class="fa fa-key"></i>
            <i class="fa fa-cutlery"></i>
            <i class="fa fa-glass"></i>
            <i class="fa fa-bed"></i>
        </div>
        <main>
            <!-- ---Guest Rooms--- -->
            <div class="guest-container">
                <aside>
                    <div class="ul">
                        <button class="btn-1">Solo Room </button>
                        <button class="btn-2">Twin-Size Room</button>
                        <button class="btn-3">Queen Standard</button>
                        <button class="btn-4">Barkada Room</button>
                        <button class="btn-5">Family Room</button>
                        <button id="book-main" class="dish-book-main">Book Now!</button>
                    </div>
                </aside>
                <div class="main-img">
                    <img class="img-1" src="./imgs/solo.jpg" alt="">
                    <img class="img-2 hide" src="./imgs/twin.jpg" alt="">
                    <img class="img-3 hide" src="./imgs/queen.jpg" alt="">
                    <img class="img-4 hide" src="./imgs/barkada.jpg" alt="">
                    <img class="img-5 hide" src="./imgs/fami.jpg" alt="">
                </div>
                <div class="content">
                    <div class="content-desc">
                        <h1>Solo Room (Standard)</h1>
                        <h3>P1000</h3>
                        <p>This room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="content-desc1 hide">
                        <h1>Twin Room</h1>
                        <h3>P2000</h3>
                        <p>This room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="content-desc2 hide">
                        <h1>Queen Room (Standard)</h1>
                        <h3>P3000</h3>
                        <p>This room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="content-desc3 hide">
                        <h1>Barkada Room</h1>
                        <h3>P5000</h3>
                        <p>This room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="content-desc4 hide">
                        <h1>Family Room</h1>
                        <h3>P5500</h3>
                        <p>This room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                </div>
            </div>
            <!-- -----End Of Guest Roooms----- -->

            
            <!-- ------Restaurant Dishes----- -->
            <div class="dish-container hide">
                <aside>
                    <div class="ul">
                        <button class="dish-btn-1">Beef Steak</button>
                        <button class="dish-btn-2">Gourmet Beef</button>
                        <button class="dish-btn-3">Guley Shawnte'</button>
                        <button class="dish-btn-4">Gustavo Pasquini</button>
                        <button class="dish-btn-5">Verdun Su Special</button>
                        <button id="book-main" class="dish-book-main">Order Now!</button>
                    </div>
                </aside>
                <div class="main-img">
                    <img class="dish-1" src="./imgs/dish-beef steak.jpg" alt="">
                    <img class="dish-2 hide" src="./imgs/dish-gourmetBeef.jpg" alt="">
                    <img class="dish-3 hide" src="./imgs/dish-Guley shawnte'.jpg" alt="">
                    <img class="dish-4 hide" src="./imgs/dish-gustavoPasquini.jpeg" alt="">
                    <img class="dish-5 hide" src="./imgs/dish-Vedun Su.jpg" alt="">
                </div>
                <div class="content">
                    <div class="dish-content-desc">
                        <h1>Beef Steak (Filipino Special)</h1>
                        <h3>P300</h3>
                        <p>This Beef steak is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="dish-content-desc1 hide">
                        <h1>Gourmet Beef</h1>
                        <h3>P500</h3>
                        <p>This Italian dish is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="dish-content-desc2 hide">
                        <h1>Guley Shawnte'</h1>
                        <h3>P700</h3>
                        <p>This vegatable dish is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="dish-content-desc3 hide">
                        <h1>Gustavo Pasquini</h1>
                        <h3>P700</h3>
                        <p>This room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="dish-content-desc4 hide">
                        <h1>Verdun Su Special</h1>
                        <h3>P999</h3>
                        <p>This main dish is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                </div>
            </div>

            <!-- ------Bar Dishes----- -->
            <div class="bar-container hide">
                <aside>
                    <div class="ul">
                        <button class="bar-btn-1">Bar Mixed Cocktail</button>
                        <button class="bar-btn-2">Cellar Wine</button>
                        <button class="bar-btn-3">Portobello Road</button>
                        <button class="bar-btn-4">Special Tequila</button>
                        <button class="bar-btn-5">Bartender's Special Mix</button>
                        <button id="book-main" class="dish-book-main">Order Now!</button>
                    </div>
                </aside>
                <div class="main-img">
                    <img class="bar-img-1" src="./imgs/bar-cocktail.jpg" alt="">
                    <img class="bar-img-2 hide" src="./imgs/bar-wine cellar.jpg" alt="">
                    <img class="bar-img-3 hide" src="./imgs/bar-portobelloRoad.webp" alt="">
                    <img class="bar-img-4 hide" src="./imgs/bar- SpecialTequila.jpg" alt="">
                    <img class="bar-img-5 hide" src="./imgs/bar-Special Mix.jpg">
                </div>
                <div class="content">
                    <div class="bar-content-desc">
                        <h1>Mixed Cocktail</h1>
                        <h3>P700</h3>
                        <p>This well mixed Cocktail is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="bar-content-desc1 hide">
                        <h1>Wine Cellar</h1>
                        <h3>P799</h3>
                        <p>This Cellar wine is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="bar-content-desc2 hide">
                        <h1>Portobello Road</h1>
                        <h3>P899</h3>
                        <p>This italian beverage is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="bar-content-desc3 hide">
                        <h1>Tequila Special</h1>
                        <h3>P1000</h3>
                        <p>This Special Tequila is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="bar-content-desc4 hide">
                        <h1>Special Mixed</h1>
                        <h3>P1200</h3>
                        <p>Bartender's special recipe mixed is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                </div>
            </div>

            <!-- ------Wellness Dishes----- -->
            <div class="wellness-container hide">
                <aside>
                    <div class="ul">
                        <button class="well-btn-1">Jacuzzi</button>
                        <button class="well-btn-2">Gym with Trainer</button>
                        <button class="well-btn-3">Fitness Centre</button>
                        <button class="well-btn-4">Spa Standard</button>
                        <button class="well-btn-5">Spa (VIP) </button>
                        <button id="book-main" class="dish-book-main">Book Now!</button>
                    </div>
                </aside>
                <div class="main-img">
                    <img class="well-img-1" src="./imgs/Well-jacuzzi.jpg" alt="">
                    <img class="well-img-2 hide" src="./imgs/well-fitness.jpg" alt="">
                    <img class="well-img-3 hide" src="./imgs/well-gym.jpg" alt="">
                    <img class="well-img-4 hide" src="./imgs/well-Standard-Spa.jpg" alt="">
                    <img class="well-img-5 hide" src="./imgs/well-VIP Spa.jpg" alt="">
                </div>
                <div class="content">
                    <div class="well-content-desc">
                        <h1>Jacuzzi </h1>
                        <h3>P1000 per Session</h3>
                        <p>This relaxing and soothing session is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="well-content-desc1 hide">
                        <h1>Gym with Trainer</h1>
                        <h3>P1500/month</h3>
                        <p>Our trainer will coach and guid you to lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="well-content-desc2 hide">
                        <h1>Fitness Centre</h1>
                        <h3>P1200/month</h3>
                        <p>This centre is made for those who want to lose weigth consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="well-content-desc3 hide">
                        <h1>Spa Standard</h1>
                        <h3>P1299 per session</h3>
                        <p>This very relaxing and stress-free session is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                    <div class="well-content-desc4 hide">
                        <h1>Spa (VIP) </h1>
                        <h3>P1999 per session</h3>
                        <p>This quiet and comfy room is a Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae modi, explicabo quo facilis doloribus eveniet! Fugiat optio doloribus, quia dolorem quis, laboriosam ducimus aspernatur aperiam quibusdam eius quas aliquid deleniti?</p>
                    </div>
                </div>
            </div>
        </main>
    </section>


    <!-- Bloooog! -->
    <section id="blogs">
        <div class="blog-title">
            <h1>Blogs</h1>
            <a href="./blogPost/homeBlog.php?index">+ Create a New Post</a>
        </div>


        <div class="blog-container">
           <div class="card">
                <div class="pics">
                    <img src="./imgs/blog1.jpg" alt="cleaning lady">
                </div>
                <div class="blog-post">
                    <div class="h1-blog">
                        <h1>In Fongtel, your health is our priority</h1>
                    </div>
                    <div class="blog-article">
                        <p>Our hotel always make sure the your health is wealth, that is why it is our priority to Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos non quas voluptates, repudiandae aliquid, quisquam alias doloremque, laborum suscipit laboriosam aspernatur eaque odit. Cupiditate, atque!</p>
                    </div>
                    <button>Learn More &#8594;</button>
                </div>
            </div>
            <div class="card">
                <div class="pics">
                    <img src="./imgs/blog2.jpg" alt="cleaning lady">
                </div>
                <div class="blog-post">
                    <div class="h1-blog">
                        <h1>In Fongtel, you can travel with care</h1>
                    </div>
                    <div class="blog-article">
                        <p>Our hotel provide customer satisfaction and always prioritize the need and want of our guests, that is why it is our priority to Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos non quas voluptates, repudiandae aliquid, quisquam alias doloremque, laborum suscipit laboriosam koki morin poque!</p>
                    </div>
                    <button>Learn More &#8594;</button>
                </div>
            </div>
            
            <div class="card">
                <div class="pics">
                    <img src="./imgs/blog3.jpg" alt="cleaning lady">
                </div>
                <div class="blog-post">
                    <div class="h1-blog">
                        <h1>In Fongtel, your tastes is our priority</h1>
                    </div>
                    <div class="blog-article">
                        <p>Our hotel always make sure the your health is wealth, that is why it is our priority to Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos non quas voluptates, repudiandae aliquid, quisquam alias doloremque, laborum suscipit laboriosam aspernatur eaque odit. Cupiditate, atque!</p>
                    </div>
                    <button>Learn More &#8594;</button>
                </div>
            </div>
           
           
        </div>
    </section>

    <!-- ------foooter------ -->
    <footer id="footer">
        <div class="footer-center">
            <img class="logo-foot" src="./imgs/fongtel-logo-bgRemoved.png">
            <div class="footer-container">
                <div class="location">
                    <img src="./imgs/icon-location.svg">
                    <p>Our Main Hotel is located at 1 Binan City Fonggi Street Laguna Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quia eos dicta sequi dolor.</p>
                </div>
                <div class="two-icons">
                    <span>
                      <img src="./imgs/icon-phone.svg">
                      <p>+1-543-123-4567</p>
                    </span>
                    <span>
                      <img src="./imgs/icon-email.svg">
                      <p>example@fylo.com</p>
                    </span>
                </div>
                <div class="list">
                    <ul>
                      <li>About Us</li>
                      <li>Jobs</li>
                      <li>Press</li>
                      <li>Blog</li>
                    </ul>
                    <ul>
                      <li>Contact Us</li>
                      <li>Terms</li>
                      <li>Privacy</li>
                    </ul>
                </div>
                <span class="three-icons">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <i class="fa fa-twitter"></i>
                  <i class="fa fa-instagram"></i>
                </span>
            </div>
        </div>
    
      </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.js"></script>
    <script src="./main.js"></script>
</body>
</html>