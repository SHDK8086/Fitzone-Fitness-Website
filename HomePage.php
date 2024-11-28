<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitzone Fitness</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" href="images/Logopng.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Signika:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="Starting-Page" id="Home">

        <div class="navbar">
            <img src="images/Logopng.png" class="Logo">
            <ul >
                <li><a href="#Home">HOME</a></li>
                <li class="dropdown-parent">
                    <a href="#Classes">Services <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown">
                        <ul>
                            <li ><a href="ClassSchedules.php">Class Schedules</a></li>
                            <li ><a href="store.php">Online Store</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#Memberships">Memberships</a></li>
                <li><a href="#Trainers">Trainers</a></li>
                <li><a href="#Contact">Customer Feedback</a></li>
            </ul>

            <a href="LoginPage.php">
                <button id="Login">Sign-In</button>
            </a>
        </div>

        <div class="home-content">
            <h1>Welcome to Fitzone Fitness</h1>
            <p>
                Fitzone Fitness Center is a modern, fully-equipped gym dedicated to helping individuals achieve their fitness goals.
                With a wide range of strength training and cardio equipment, group exercise classes, personal training services, 
                and a friendly, motivating atmosphere, Fitzone provides a space for everyone—from beginners to advanced athletes. Whether you're 
                aiming for weight loss, muscle building, or overall wellness, Fitzone offers the tools and guidance you need to succeed.</p>
        </div>
        
        <a href="Blog.php">
        <button id="AboutUs"><i class="fas fa-laptop"></i> View Blog</button>
        </a>

        </div>

    

        <div class="class-page" id="Classes">
            <h1>Classes That We are Conducting</h1>
            <p>
                Choose from our various fitness classes to suit your needs and goals. We offer a variety of strength training and cardio equipment options, as well as group exercise classes, personal training services, and a friendly, motivating atmosphere.
            </p>
        
            <div class="classes">

                <div class="class-card">
                    <div class="class-name">
                        <h2>Cardio</h2>
                    </div>
                    <div class="class-image">
                        <img src="images/cardio.jpg" class="class-thumb" alt="Cardio Class">
                        <a href="CardioPage.php">
                        <button class="card-btn">View More....</button>
                        </a>
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-name">
                        <h2>Strength Training</h2>
                    </div>
                    <div class="class-image">
                        <img src="images/strength.jpg" class="class-thumb" alt="Strength Class">
                        <a href="StrengthPage.php">
                        <button class="card-btn">View More....</button>
                        </a>
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-name">
                        <h2>Yoga</h2>
                    </div>
                    <div class="class-image">
                        <img src="images/yogajpg.jpg" class="class-thumb" alt="Yoga Class">
                        <a href="YogaPage.php">
                        <button class="card-btn">View More....</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="membership-page" id="Memberships">
            <h1>Membership Options</h1>
            <p>
                Joining a Fitzone Fitness Center membership is a great way to save money and get access to exclusive benefits and features.
                Choose from our various membership options to suit your needs and goals.
            </p>

            <div class="membership">
        
            <div class="membership-card">
                <h2>Basic Membership plan</h2>
                <p>Features:
                    <br>* Access to gym facilities during non-peak hours
                    <br>* Free access to standard fitness equipment (treadmills, weight machines, etc.)
                    <br>* One complimentary personal training session per month
                    <br>* Access to locker rooms and showers
                    <br>* Standard group fitness classes (yoga, pilates, etc.)</p>

                    <div class="price-basic">
                        <h3>Rs. 2500 per month</h3>
                    </div>
            </div>

            <div class="membership-card">
                <h2>Premium Membership Plan</h2>
                <p>Features:
                    <br>* Unlimited 24/7 access to all gym facilities
                    <br>* Free access to premium fitness equipment and advanced training zones
                    <br>* Two complimentary personal training sessions per month
                    <br>* Discounts on fitness merchandise and supplements
                    <br>* Priority booking for group classes and workshops</p>

                    <div class="price-premium">
                        <h3>Rs. 5000 per month</h3>
                    </div>
            </div>
        </div>
        <a href="RegisterPage.php">
        <button class="membership-btn">Register Now</button>
        </a>
    </div>

    <div class="trainers-page" id="Trainers">
        <h1>Meet Our Trainers</h1>

        <p>
            Our trainers are highly experienced and knowledgeable about their respective fields. They provide personalized guidance, coaching, and motivation to our clients. 
        </p>
    
        <div class="trainers">

            <div class="trainer-card">
                <div class="trainer-name">
                    <h2>Kasun Jayawardena</h2>
                </div>
                <div class="trainer-image">
                    <img src="images/trainer-1.jpg" class="trainer-thumb" alt="Cardio Class">
                    <a href="mailto:kasunjayawardhana@gmail.com">
                    <button class="trainer-btn-email">
                        <i class="fas fa-envelope"></i></button>
                    </a>
                </div>
            </div>
            

            <div class="trainer-card">
                <div class="trainer-name">
                    <h2>Darren Lockwood</h2>
                </div>
                <div class="trainer-image">
                    <img src="images/trainer-2.jpg" class="trainer-thumb" alt="Cardio Class">
                    <a href="mailto:darrenlockwood@gmail.com">
                    <button class="trainer-btn-email">
                        <i class="fas fa-envelope"></i></button>
                    </a>
                </div>
            </div>

            <div class="trainer-card">
                <div class="trainer-name">
                    <h2>Sienna Thompson</h2>
                </div>
                <div class="trainer-image">
                    <img src="images/trainer-3.jpg" class="trainer-thumb" alt="Cardio Class">
                    <a href="mailto:siennathompson@gmail.com">
                    <button class="trainer-btn-email">
                        <i class="fas fa-envelope"></i></button>
                        </a>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-us" id="Contact">
    <div class="feedback-container">
        
        <div class="feedback-form">
            <h1>Customer Feedback</h1>
            <form action="add-reviews.php" method="POST">
                <label for="fname">Full Name:</label>
                <input type="text" id="fname" name="full_name" required>
                
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <label>Rating:</label>
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5" title="5 stars">★</label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4" title="4 stars">★</label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3" title="3 stars">★</label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2" title="2 stars">★</label>
                    <input type="radio" id="star1" name="rating" value="1" required>
                    <label for="star1" title="1 star">★</label>
                </div>
                <input type="submit" class="submit-button" value="Submit">
            </form>
        </div>

        <div class="feedback-cards">
            <h2> Reviews</h2>
            <div class="card">
                <p><strong>Avishka Sahan</strong></p>
                <p>"I've been coming here for three months, and I'm already seeing a big difference in my energy and fitness levels. The trainers are knowledgeable and supportive, and the facility is always clean and well-maintained."</p>
                <p class="stars">Rating: ★★★★☆</p>
            </div>
            <div class="card">
                <p><strong>Suneth Silva</strong></p>
                <p>"The gym offers a lot of flexibility with its class timings, which is great for my busy schedule. The staff is friendly and always willing to help, which makes working out here a pleasant experience."</p>
                <p class="stars">Rating: ★★★★★</p>
            </div>
            <div class="card">
                <p><strong>Sarah Johnson</strong></p>
                <p>""This gym is conveniently located and has a great atmosphere. However, it would be nice if they added more group classes, especially in the evenings. Overall, a good place to work out!"</p>
                <p class="stars">Rating: ★★★★☆</p>
            </div>
        </div>
        
    </div>
</div>


    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Fitzone Fitness</h3>

            <p class="footer-links">
                <a href="#Home">Home</a>
                |
                <a href="#Classes">Classes</a>
                |
                <a href="#Memberships">Membership</a>
                |
                <a href="#Trainers">Trainers</a>
                |
                <a href="#Contact">Contact Us</a>
            </p>

            <p class="footer-company-name">Copyright © 2024 <strong>FitzoneFitness</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>No.15 Maliyadeva Road</span>
                    Kurunegala</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+94 769799681</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">fizonefitness@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Fitzone Fitness</span>
                <strong>Follow us on</strong>    
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>
