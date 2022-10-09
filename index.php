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
    <title>Welcome to Igbinedion College of Health</title>
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
                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@icht.edu.ng</a></li>
               
                <li><a href="javascript:void(0);"><i class="fas fa-users"></i>Alumni</a></li>
                <li><a href="javascript:void(0)">Portal<i class="fas fa-sign-in-alt"></i></a></li>
            </ul>
        </div>
    </section>
    <section id="banner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/logo.png" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-building-columns"></i>Who we are</a></li>
                    <li>
                        <a href="javascript:void(0);" title="Courses we offer"><i class="fa-solid fa-book"></i>Courses <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="community_health.php"><i class="fa-solid fa-house-medical"></i>Community health</a></li>
                            <li><a href="pharm_tech.php"><i class="fas fa-user-doctor"></i> Pharmacy technician</a></li>
                            <li><a href="fundamental_health.php"><i class="fas fa-bed-pulse"></i> Fundamental health technology</a></li>
                            <li><a href="lab_tech.php"><i class="fas fa-heart-pulse"></i> Med Lab technology</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" title="What we do"><i class="fas fa-briefcase"></i>Other Services <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="event_centre.php"><i class="fa-solid fa-gifts"></i> Event centre</a></li>
                            <li><a href="skill_acquisition.php"><i class="fas fa-paper-plane"></i> Skill Acquisition</a></li>
                            
                            
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" title="News and updates"><i class="fa-solid fa-user-graduate"></i>Events</a></li>
                    <li><a href="javascript:void(0)" class="showRequest" title="Apply for admission"><i class="fa-solid fa-graduation-cap"></i>Admissions</a></li>
                    <!-- <li><a href="recruitment.html" title="Job recruitment">Career</a></li> -->
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <li id="login"><a href="contact.php" title="Contact us">Contact us<i class="fas fa-headset"></i></a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="slides">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/college1.jpg" alt="ICH Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Welcome to Igbinedion College of Health Technology</h2>
                            <p>We strive to meet up with the growing worldwide demand for oil & gas while preparing for the future..</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Take a tour <i class="fas fa-info"></i></a>
                                <a href="projects.php">Register <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/banner4.jpeg" alt="ICH Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Explore your future with us. </h2>
                            <p>Providing quality, sustainable and affordable health care Education for the grassroot.</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="javascript:void(0)" class="showRequest">Request Admission <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/banner2.jpeg" alt="ICH Banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Providing Innovative solutions</h2>
                            <p>We are here to provide you With the best and recent skills in the health sector</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="contact.php">Contact us <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <!-- summary of services -->
    <section id="service_summary">
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/chairs.jpg" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Online Courses</h3>
                <hr>
                <p>Download and study courses taught by our professionals in various media format. </p>
                <div class="serv_icon2">
                    <a href="#plans" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/school_building.jpg" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Student portal</h3>
                <hr>
                <p>Registered students can now log in and register their courses for the session, as well as pay fees</p>
                <div class="serv_icon2">
                    <a href="student_portal.php" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/books.jpg" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-university"></i>
                </div>
                <h3>Admission</h3>
                <hr>
                <p>Admission into the current 2022 session is on going. Find a course and apply now</p>
                <div class="serv_icon2">
                    <a href="javascript:void(0)" class="showRequest" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
        
        <div class="sum_serv">
            <div class="sums_banner">
                <img src="images/chairs.jpg" alt="summary banner">
            </div>
            <div class="sums_details">
                <div class="serv_icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Online Courses</h3>
                <hr>
                <p>Download and study courses taught by our professionals in various media format. </p>
                <div class="serv_icon2">
                    <a href="#plans" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
        </div>
    </section>
    <section id="trending">
        <h4><i class="fas fa-newspaper"></i> Updates</h4>
        <div class="trendings">
            <marquee behavior="" direction="">
                <?php
                    $get_trends = $connectdb->prepare("SELECT * FROM news_events ORDER BY post_date DESC LIMIT 6"); 
                    $get_trends->execute();
                    $trends = $get_trends->fetchAll();
                    foreach($trends as $trend):
                ?>
                        <a href="javascript:void(0)" onclick="viewArticle('<?php echo $trend->article_id?>')"><i class="fas fa-angle-double-right"></i> <?php echo $trend->title?></a>
                <?php endforeach?>
                <?php
                    if(!$get_trends->rowCount() > 0 ){
                        echo "<h3>No recent stories</h3>";
                    }

                ?>
            </marquee>
            
        </div>
    </section>
    <main>
        <!-- features -->
        <section id="features">
            <div class="features">
                <h3>Features</h3>
                <h4>We offer</h4>
                <h2>General and specialized health education</h2>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-book-medical"></i>
                        <div class="feat_details">
                            <h3>Med Lab technology</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-laptop-medical"></i>
                        <div class="feat_details">
                            <h3>Fundamental Health Technology</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-capsules"></i>
                        <div class="feat_details">
                            <h3>Pharmacy technicians</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="feat">
                        <i class="fas fa-bed-pulse"></i>
                        <div class="feat_details">
                            <h3>Community Health</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="feature_img">
                <img src="images/banner3.jpeg" alt="Our services">
            </div>
        </section>
        <!-- about page -->
        <section id="about_us">
            <div class="about_banner">
                <div class="banner_img">
                    <img src="images/college2.jpg" alt="banner">
                </div>
                <div class="clients">
                    <img src="images/banner2.jpeg" alt="banner">

                </div>
            </div>
            <div class="about_text">
                <h3>Who we are</h3>
                <h2>Igbinideion College of Health Education!</h2>
                <div class="notes">
                    <div class="notes_1">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio soluta magni qui sunt quam ipsa fugiat voluptatum veritatis voluptates? Excepturi dolore in corrupti maxime accusantium et, sint ullam, earum aliquid, molestias quibusdam aperiam mollitia. Optio harum vitae maiores ex dolores!</p><br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dicta possimus nihil, beatae cupiditate labore inventore repellendus. Esse optio tempora nulla voluptatum possimus quasi fuga quidem sunt harum adipisci consequatur incidunt, beatae aspernatur corporis, quam sit modi? Tempore, minima omnis vel non quidem ut quod a laborum facere rem? Iure?<br><br>
                        <!-- Our team provides invaluable support at all levels to help customers reduce costs and risk by making informed choices at the earliest possible stage.<br>
                        <p>At <strong>Bob & Sil</strong>, our business is people-centric and we believe and adhere to our guiding principle of building strong human resource capacity to achieve and sustain our business goals and objectives. --></p>
                        <!-- <p style="text-align: justify;">Our current staff strength of almost a hundred (100) actively engaged personnel.</p>
                        <p style="text-align: justify;">A greater percentage of our team is made up of qualified persons from within our business operating communities. --></p>
                        <a href="about.php"class="about_btn">Read more <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <!-- <div class="notes_2">
                        <p>How can we meet the growing demand for oil and gas while protecting our climate & make planet a better place?</p>
                        <ul>
                            <li>We ensure strict adherence to being HSC compliant</li>
                            <li>We have high focus on the sustainability of the environment</li>
                            <li>We increase local participation in the oil and gas sector.</li>
                            <li>We do not relent in our continued contribution to community development</li>
                            <li>We increase healthy competition in the petroleum industry.</li>
                            
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
        
        <!-- why choose us -->
        <section id="why_choose">
            <div class="reasons">
                <h3 id="this">Why choose us</h3>
                <h2>We are Building a Sustainable Future for the health sector</h2>
                <div class="all_reasons">
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Our mission</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sunt voluptatum minus nemo tenetur exercitationem eum quibusdam quae tempore commodi..</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Our vision</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum nostrum soluta eveniet quis esse.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Core value</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio molestiae delectus dolores debitis eligendi repellat iusto quo, maiores pariatur sit?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_service">
                <div class="service_box" id="box1">
                    <div class="service_img">
                        <img src="images/college3.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-users"></i>
                        <h3>World class tutors</h3>
                        <p>PBest tutors in the health sector</p>
                    </div>
                </div>
                <div class="service_box">
                <div class="service_img">
                        <img src="images/banner4.jpeg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-users"></i>
                        <h3>World class tutors</h3>
                        <p>PBest tutors in the health sector</p>
                    </div>
                </div>
                <div class="service_box" id="box3">
                    <div class="service_img">
                        <img src="images/books.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-book"></i>
                        <h3>World class Library</h3>
                        <p>Best laboratories ith word class acilities and books</p>
                    </div>
                </div>
                
                
                <div class="service_box" id="box4">
                    <div class="service_img">
                        <img src="images/books.jpg" alt="hero">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-book"></i>
                        <h3>World class Library</h3>
                        <p>Best laboratories ith word class acilities and books</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission section -->
        <section id="covid" class="whyChoose">
            
            <img src="images/school_building.jpg" alt="about us">
            <div class="choose_text">
                <div class="chooseImg">
                    <img src="images/college2.jpg" alt="ICH">
                </div>
                <div class="texts">
                    <h3>Apply for Admission</h3>   
                    <h2>Admission is currently on going for the current session</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem dolore ratione voluptatum quaerat reprehenderit porro, reiciendis nisi, quo eos, illo hic. Eligendi, provident dolorum. Iusto quasi itaque facilis odit cum?</p>
                    <div class="btns">
                        <a href="javascript:void(0)" title="Apply for admission">Apply for admission<i class="fas fa-sign-in-alt"></i></a>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- team -->
        <section id="team">
            <h2>The Amazing team behind our College</h2>
            <hr>
            <p>We have a qualified team of Doctors, Pharmacist, health technicians, and top professionals in the health sector, prepared to guide you in your journey through out your course of study.</p>
            <div class="team">
                <figure>
                    <img src="images/lecturer.jpg" alt="management photo">
                    <figcaption>
                        <h3>John Tsimigan<span>Dean of stdents</span></h3>
                    </figcaption>
                </figure>
                <figure>
                <img src="images/lecturer.jpg" alt="management photo">
                    <figcaption>
                        <h3>John Tsimigan<span>Dean of stdents</span></h3>
                    </figcaption>
                </figure>
                <figure>
                <img src="images/lecturer.jpg" alt="management photo">
                    <figcaption>
                        <h3>John Tsimigan<span>Dean of stdents</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <img src="images/lecturer.jpg" alt="management photo">
                    <figcaption>
                        <h3>John Tsimigan<span>Dean of stdents</span></h3>
                    </figcaption>
                </figure>
            </div>
            <div class="more_team">
                <a href="about.html#team" title="View team members">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </section>
        <!--Partners -->
        <section id="partners">
            <h3>Our Partners</h3>
            <div class="partners">
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
            </div>
        </section>
        <!-- online courses -->
        <Section id="plans">
            <h3 class="plans_title">Online Courses</h3>
            <h2>Check out courses taught by our professionals</h2>
            <p class="first_p">Most popular courses taught by professionals at ICH, Benin</p>
            <div class="plans">
                <?php 
                    $get_projects = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 20) AS details, title, photo, author, post_date FROM projects ORDER BY post_date LIMIT 4");
                    $get_projects->execute();
                    $projects = $get_projects->fetchAll();
                    foreach($projects as $project):
                ?>
                <div class="plan_form" id="plan1">
                    <figure>
                        <div class="project_img">
                            <div class="pro_img">
                                <img src="<?php echo 'media/'.$project->photo?>" alt="projects">
                            </div>
                            <a href="javascript:void(0)">Read more <i class="fas fa-eye"></i></a>
                        </div>
                        <figcaption>
                            <h3><?php echo $project->title?></h3>
                            <p class="post_date"><?php echo date("jS M, Y", strtotime($project->post_date))?></p>
                            <div class="clear"></div>
                            <p class="course_details"><?php echo $project->details?></p>
                            <div class="author">
                                <img src="images/lecturer.jpg" alt="lecturer">
                                <p class="author_name">Abadon Idiase</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
            </div>
            <a id="moreProjects" href="projects.php" title="View more projects">View all courses <i class="fas fa-angle-double-right"></i></a>

        </Section>
        <!-- gallery -->
        <Section id="gallery">
            <h3 class="plans_title">Our Gallery</h3>
            <!-- <h2>Photos and media</h2> -->
            <p class="first_p">Student gallery for the past sessions</p>
            <div class="plans">
                <?php 
                    $get_photos = $connectdb->prepare("SELECT * FROM gallery ORDER BY post_date DESC LIMIT 8");
                    $get_photos->execute();
                    $photos = $get_photos->fetchAll();
                    foreach($photos as $photo):
                ?>
                <div class="plan_form">
                    <figure>
                        <div class="gallery_img">
                            <img src="<?php echo 'media/'.$photo->photo?>" alt="gallery">

                        </div>
                        <figcaption>
                            <h3><?php echo $photo->title?></h3>
                            
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
                
                
                <a id="moreProjects" href="gallery.php" title="View more photos">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </Section>
        
        <!-- investment -->
        <section id="investment">
            <div class="intro">
                <p>Create a better tomorrow for the health sector</p>
                <h2>We excel in training the life savers of our generation</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, laudantium illum, consequatur molestias, corrupti sint neque quia rem doloremque quisquam impedit molestiae quos labore aut iste quae debitis iusto error.<br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sunt deserunt iusto nobis quo deleniti perspiciatis eaque quaerat numquam quos..</p>
                <a href="contact.html"><i class="fa-solid fa-graduation-cap"></i> Apply now <i class="fa-solid fa-angle-double-right"></i></a>
            </div>
            <div class="invest_img">
                <img src="images/banner.jpeg" alt="Investment">

            </div>
        </section>
        <!-- hero -->
        <section id="hero">
            <div class="hero_image">
                <img src="images/college1.jpg" alt="hero image">
            </div> 
            <div class="hero_notes">
                <div class="note">
                    <i class="fas fa-users"></i>
                    <h3>300+</h3>
                    <p>Students Enrolled</p>
                </div>
                <div class="note">
                <i class="fas fa-user-tie"></i>
                    <h3>20+</h3>
                    <p>Qualified Lecturers</p>
                </div>
                <div class="note">
                    <i class="fas fa-book"></i>
                    <h3>50+</h3>
                    <p>Classes Completed</p>
                </div>
                <div class="note">
                    <i class="fas fa-user-graduate"></i>
                    <h3>200+</h3>
                    <p>Graduates</p>
                </div>
            </div>
        </section>
        <!-- <section id="testimonies">
            <h2>testimonies from our Clients</h2>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_01-540x518.jpg" alt="James Chester">
                        </div>
                        <div class="test_note">
                            <p>"I couldn’t be happier with the service I was provided. Everyone took ample time with me to ensure that my visit exceeded my expectations."</p>
                            <div class="testifier">
                                <img src="images/team_01-540x518.jpg" alt="testifier">
                                <span>- James Chester</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_02-540x518.jpg" alt="Andre Coleman morgans">
                        </div>
                        <div class="test_note">
                            <p>"We have used Bob and sil to provide services that our competitions cannot begin to offer. That has given us a decisive edge in our market. Now we can produce even more with sustainable energy"</p>
                            <div class="testifier">
                                <img src="images/team_02-540x518.jpg" alt="testifier">
                                <span>- Eddie Smith</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_03-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"We have been engaged with Bob and sil for several months now. They have been very responsive to all requests. Investing with Irecco has brought more financial value to us as a company as well as development."</p>
                            <div class="testifier">
                                <img src="images/team_03-540x518.jpg" alt="testifier">
                                <span>- Damian wilsbrock</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_04-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"Bob and SIl globale an excellent service, be it on a business or personal level.I found the company's various investment plans very helpful to the growth of my business and i am heading on a great path to finanncial freedom"</p>
                            <div class="testifier">
                                <img src="images/team_04-540x518.jpg" alt="testifier">
                                <span>- Sean Mendoz</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- hero 2 -->
        
        
        
        <!-- events and stories -->
        <section class="trends">
            <h2>Latest News and Events</h2>
            <hr>
            <div class="topics">
                <?php
                    $get_events = $connectdb->prepare("SELECT SUBSTRING_INDEX(details, ' ', 40) AS details, article_id, title, photo FROM news_events ORDER BY post_date DESC LIMIT 2");
                    $get_events->execute();
                    $views = $get_events->fetchAll();
                    foreach($views as $view):
                ?>
                <article>
                    <a href="javascript:void(0)" onclick="viewArticle('<?php echo $view->article_id?>')">
                        <img src="<?php echo 'media/'.$view->photo?>" alt="Impact of covid">
                        <div class="summary">
                            <h3><?php echo $view->title?></h3>
                            <p><?php echo $view->details?> <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
                <?php endforeach?>
                <?php
                    if(!$get_events->rowCount() > 0 ){
                        echo "<h3>No recent stories</h3>";
                    }

                ?>
            </div>
            <div class="more">
                <a href="events_news.php">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </section>
        
    </main>
    
    <?php include "footer.php"?>
</body>
</html>