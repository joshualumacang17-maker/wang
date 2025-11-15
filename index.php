<?php
    // Personal Info
    $name = "JOSHUA LUMACANG";
    $title = "Freelance Graphic Artist";
    $bio = "I am a BSIT graduated and a passionate freelancer, eager to learn and grow in the tech and design industry. I enjoy working on different projects for companies as a freelancer, helping them bring their ideas to life. I have experience in designing business logos and creating custom basketball jerseys, combining creativity with attention to detail.

I am constantly improving my skills and exploring new tools to deliver high-quality work. I take pride in completing projects on time and making sure clients are satisfied with the results. Even as a beginner, I am dedicated, motivated, and ready to take on new challenges to build my experience and expand my portfolio.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <!-- NAVIGATION BAR -->
<nav class="navbar fade-in">
    <div class="nav-logo">JOSHUA LUMACANG</div>

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <!-- Mobile Menu Icon -->
    <div class="nav-toggle" onclick="toggleMenu()">
        ☰
    </div>
</nav>


    <!-- HEADER -->
    <header id="home" class="fade-in home-section">
    <div class="home-container">

        <!-- LEFT SIDE (TEXT) -->
        <div class="home-text">
            <h1>Hello, I'm <span class="highlight"><?php echo $name; ?></span></h1>
            <h2><?php echo $title; ?></h2>

            <p class="home-bio">
               A driven person who has a relentless passion for bringing ideas to life.
            </p>

        </div>

        <!-- RIGHT SIDE (IMAGE) -->
        <div class="home-image">
            <div class="image-wrapper">
                <img src="img/grad.jpg" alt="Profile Image of Joshua Lumacang">
            </div>
        </div>
    </div>
</header>

    <!-- ABOUT -->
    <section id="about" class="about fade-in">
    <div class="about-container">
        <!-- LEFT SIDE IMAGE -->
        <div class="about-image">
            <img src="img/wang.jpg" alt="About Me Image">
        </div>

        <!-- RIGHT SIDE TEXT -->
        <div class="about-text">
            <h2>About Me</h2>
            <p><?php echo $bio; ?></p>
        </div>
    </div>
</section>

    <!-- PROJECTS -->
   <section id="projects" class="projects fade-in">
    <h2>My Projects</h2>

    <div class="project-grid">

        <?php
            $projects = [
                ["Promotion Design", "img/casino.jpg", "Logo and branding design projects crafted to elevate businesses and personal brands."],
                ["Business Logo Design", "img/blogo.jpg", "Creative posters designed for events, promotions, and digital advertising."],
                ["Sports Jersey Design ", "img/digitalart.jpg", "Custom illustrations and expressive digital artworks for clients and personal projects."],
            ];

            foreach ($projects as $p) {
                echo "
                <div class='project-card'>
                    <img src='$p[1]' alt='$p[0]' onclick='openLightbox(this)' />
                    <h3>$p[0]</h3>
                    <p>$p[2]</p>
                </div>
                ";
            }
        ?>

    </div>
</section>

<!-- LIGHTBOX MODAL -->

    <!-- CONTACT -->
    <footer id="contact" class="fade-in">
        <h2>Contact</h2>
        <p>Email: joshualumacang17@email.com</p>
        <p>Facebook: Joshua Lumacang / Instagram : Joshua Lumacang /</p>
    </footer>

</body>
</html>
