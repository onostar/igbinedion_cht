<?php
    require "controller/connections.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Igbinedion Cllege of Health is an Educational INstitution dedicated to the training of students to become professionals in the Health sector">
        <meta name="keyword" content="Igbinedion College of Health, ICH, college of health, heath, pharmacy, health education" />
        <meta name="author" content=""/>
        <meta name="og:url" property="og:url" content="https://">
        <meta name="og:type "property="og:type" content="website">
        <meta name="og:title" property="og:title" content="" />
        <meta name="og:site_name" property="og:site_name" content="" />
        <meta name="og:description" property="og:description" content="Igbinedion Cllege of Health is an Educational INstitution dedicated to the training of students to become professionals in the Health sector">
        <meta name="keyword" content="Igbinedion College of Health, ICH, college of health, heath, pharmacy, health education">
        <meta name="og:image" property="og:image" itemprop="image" content="images/logo.jpg">
        <meta property="og:image:width" content="300" />
        <meta property="og:image:height" content="300" />
        <title>ICHT | Gallery</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
        <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
        
        <link rel="icon" href="images/logo.png" type="image/png" size="32X32">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
        <section class="top_head" id="topHeader">
            <div class="social_media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="contact_phone">
                <ul>
                    <li>
                        <a><i class="far fa-clock"></i>Mon - Fri : 8:00am - 5:00pm</a>
                    </li>
                    <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@iginedioncollegeofhealth.com</a></li>
                   
                    <li><a href="javascript:void(0);"><i class="fas fa-users"></i>Alumni</a></li>
                    <li><a href="javascript:void(0)">Portal<i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
            </div>
        </section>
    <section id="aboutBanner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/logo.png" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.html" title="who we are"><i class="fas fa-building-columns"></i>Who we are</a></li>
                    <li>
                        <a href="javascript:void(0);" title="Courses we offer"><i class="fa-solid fa-book"></i>Courses <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="petroleum.html"><i class="fa-solid fa-house-medical"></i>Community health</a></li>
                            <li><a href="sales.html"><i class="fas fa-user-doctor"></i> Pharmacy technician</a></li>
                            <li><a href="marine_logistics.html"><i class="fas fa-bed-pulse"></i> Fundamental health technology</a></li>
                            <li><a href="waste_management.html"><i class="fas fa-heart-pulse"></i> Med Lab technology</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="What we do"><i class="fas fa-briefcase"></i>Other Services <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="petroleum.html"><i class="fa-solid fa-gifts"></i> Event centre</a></li>
                            <li><a href="waste_management.html"><i class="fas fa-paper-plane"></i> Skill Acquisition</a></li>
                            
                            
                        </ul>
                    </li>
                    <li><a href="#investment" title="News and updates"><i class="fa-solid fa-user-graduate"></i>Events</a></li>
                    <li><a href="admissions.php" title="Apply for admission"><i class="fa-solid fa-graduation-cap"></i>Admissions</a></li>
                    <!-- <li><a href="recruitment.html" title="Job recruitment">Career</a></li> -->
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <li id="login"><a href="contact.html" title="Contact us">Contact us<i class="fas fa-headset"></i></a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/vessel5.jpg" alt="bob and sil">
                    </div>
                    <div class="taglines">
                        <h2>Gallery</h2>
                        <!-- <p>We bring exceptional care close to you. Consult a Doctor any time, any day.</p> -->
                        <!-- <div class="btns">
                            <a href="javascrip:void(0);" class="showRequest">Schedule an Appointment Now</a>
                            <a href="contact.html">Get a Quote</a>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <main>
        <Section id="gallery" >
            <h2>Photos and media</h2>
            <div class="plans">
            <?php 
                    $get_photos = $connectdb->prepare("SELECT * FROM gallery ORDER BY post_date");
                    $get_photos->execute();
                    $photos = $get_photos->fetchAll();
                    foreach($photos as $photo):
                ?>
                <div class="plan_form">
                    <figure>
                        <img src="<?php echo 'media/'.$photo->photo?>" alt="gallery">
                        <figcaption>
                            <h3><?php echo $photo->title?></h3>
                            
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
            

            </div>
        </Section>
        
    </main>
    <footer>
        <section class="mainFooter">
            <section class="mainFooter1">
                <div class="contactAddress">
                    <img src="images/bobsil_logo.JPG" alt="Bob and sil Global">
                    <!-- <h3>For more info and to book an appointment</h3> -->
                    <div class="address">
                        <i class="fas fa-street-view"></i>
                        <div class="addtext">
                            <!-- <h4>Head office:</h4> -->
                            <p>Our Head office is located at Obitugbo Community, Along Koko Expressway, Koko Delta state</p>
                        </div>
                    </div>
                    <div class="address">
                        <i class="fas fa-database"></i>
                        <div class="addtext">
                            <!-- <h4>Head office:</h4> -->
                            <p>Our Storage Facility is situated at Ajagbodudu community, Warri North LGA, Koko, Delta state, Nigeria</p>
                        </div>
                    </div>
                    <div class="address phone">
                        <i class="fas fa-tty"></i>
                        <div class="addtext">
                            <h4>Help Lines: If you have any questions or need help, feel free to contact with our team, or you can call us any time </h4>
                            <p>+2348067495426, +2348125631690, +2348071805429</p>
                        </div>
                    </div>
                    <div class="address email">
                        <i class="fas fa-envelope-open-text"></i>
                        <div class="addtext">
                            <h4>Email:</h4>
                            <p>info@bobsilglobal.com</p>
                        </div>
                    </div>
                </div>
                <div class="subscribe_category">
                    
                <div class="category">
                        <h3>Quick Links</h3>
                        <div class="categories">
                            <li><a href="about.html">About Bob & sil</a></li>
                            <li><a href="#">Career Opportunities</a></li>
                            <li><a href="#">Vessels</a></li>
                            <li><a href="petroleum.html">Haulage & Storage</a></li>
                            <li><a href="waste_management.html">Waste management</a></li>
                            
                            
                        </div>
                    </div>
                    <div class="subscribe">
                        <h3>Please subscribe to our newsletter</h3>
                        <form id="subscribe" method="post" action="">
                            <input type="email" id="email" name="email" placeholder="enter your email">
                            <input type="submit" id="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="socialMedia_workHours">
                    <div class="workingHours">
                        <h3>Working hours</h3>
                        <div class="hours">
                            <p>We are Open Mondays to Fridays 8:00am to 5:00pm</p>
                        </div>
                    </div> 
                    <div class="socialMedia">
                        <h3>Follow us on social media</h3>
                        <div class="socialLinks">
                            <a target="_blank" href="#" title="Follow bob abd sil on facebook"><i class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="#" title="Follow bob abd sil on twitter"><i class="fab fa-twitter-square"></i></a>
                            <a target="_blank" href="#" title="Follow bob abd sil on instagram"><i class="fab fa-instagram-square"></i></a>
                            <a target="_blank" href="#" title="Follow bob abd sil on Linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>   
                </div>
            </section>
        </section>
        <section class="secondaryFooter">
            <p>&copy;2022 Bob & Sil Global. All Rights Reserved.</p>
        </section>
    </footer>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
    
    <div class="toTop">
        <a href="#topHeader"><i class="fas fa-chevron-up" style="color:#fff;" size="10"></i></a>
    </div>
    
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>