<?php
    require "controller/connections.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Igbinedion Cllege of Health is an Educational INstitution dedicated to the training of students to become professionals in the Health sector">
    <meta name="keyword" content="Igbinedion College of Health, ICH, college of health, heath, pharmacy, health education" />
    
	<meta name="author" content=""/>
	<meta name="og:url" property="og:url" content="https://">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="" />
    <meta name="og:site_name" property="og:site_name" content="" />
    <meta name="description" content="Igbinedion Cllege of Health is an Educational INstitution dedicated to the training of students to become professionals in the Health sector">
    <meta name="og:image" property="og:image" itemprop="image" content="images/logo.png">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title>ICHT | Fundamental Health technology</title>
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
        <?php include "header.php"?>
    <main>
    <Section id="plans" class="main_projects">
            <h3>Online Courses</h3>
            <hr>
            <p class="first_p">Discover some of our online courses completed</p>
            <div class="plans">
            <?php 
                    $get_projects = $connectdb->prepare("SELECT * FROM projects ORDER BY post_date LIMIT 4");
                    $get_projects->execute();
                    $projects = $get_projects->fetchAll();
                    foreach($projects as $project):
                ?>
                <div class="plan_form" id="plan1">
                    <figure>
                        <img src="<?php echo 'media/'.$project->photo?>" alt="projects">
                        <figcaption>
                            <h3><?php echo $project->title?></h3>
                            <p><?php echo $project->details?></p>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
            

            </div>
        </Section>
        
    </main>
    <?php include "footer.php"?>
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