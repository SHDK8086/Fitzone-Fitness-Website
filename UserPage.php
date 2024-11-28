<?php
@include 'connection.php';

if (isset($_POST['submit'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $insert = "INSERT INTO message (full_name, email, message) VALUES ('$full_name', '$email', '$message')";

    $query = mysqli_query($conn, $insert);
    
    if ($query) {
        echo "<script>alert('Message send successfully!');
        window.location.href='UserPage.php';
        </script>";
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "<script>alert('Message send failed. Please try again.');</script>";
    }
}
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="UserPage.css">
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
                <li><a href="#Classes">Programs</a></li>
                <li><a href="#Memberships">Memberships</a></li>
                <li><a href="#Trainers">Trainers</a></li>
                <li><a href="#Contact">Contact Us</a></li>
            </ul>

            <a href="store.php">
                <button id="store"><i class="fas fa-shopping-cart"></i> Online Store</button>
            </a>
            <a href="logout.php">
                <button id="Logout"><i class="fas fa-door-open"></i>Logout</button>
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
            <h1>
                Choose your Program
            </h1>
            <p>
                Choose from our various fitness Programs to suit your needs and goals. We offer a variety of strength training and cardio equipment options, as well as group exercise classes, personal training services, and a friendly, motivating atmosphere.
            </p>
        
            <div class="classes">

                <div class="class-card">
                    <div class="class-name">
                        <h2>Cardio</h2>
                    </div>
                    <div class="class-image">
                        <img src="images/cardio.jpg" class="class-thumb" alt="Cardio Class">
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-name">
                        <h2>Strength Training</h2>
                    </div>
                    <div class="class-image">
                        <img src="images/strength.jpg" class="class-thumb" alt="Strength Class">
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-name">
                        <h2>Yoga</h2>
                    </div>
                    <div class="class-image">
                        <img src="images/yogajpg.jpg" class="class-thumb" alt="Yoga Class">
                    </div>
                </div>
            </div>
            <a href="BookingPage.php">
            <button class="class-btn"><i class="fas fa-book"></i> Book Now</button>
            </a>
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
        <a href="SubscriptionPage.php">
        <button class="membership-btn"><i class="fas fa-bell"></i> Subscribe</button>
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
    <h1>Contact Support</h1>
    <p>
        We are here to help you. Please provide us with your details so we can respond to your inquiry as quickly as possible.
    </p>
    <form action="UserPage.php" method="post">
        <label for="fname">Full Name:</label>
        <input type="text" id="fname" name="full_name" required>
    
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
    
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <div class="btn-container">
            <input type="submit" value="Submit" name="submit">
            <a href="viewresponse.php">
                <button type="button">View Response</button>
            </a>
        </div>
    </form>
</div>


    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Fitzone Fitness</h3>

            <p class="footer-links">
                <a href="#Home">Home</a>
                |
                <a href="#Classes">Programs</a>
                |
                <a href="#Memberships">Membership</a>
                |
                <a href="#Trainers">Trainers</a>
                |
                <a href="#Contact">Contact Support</a>
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
