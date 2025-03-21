<!DOCTYPE html>
<html lang="en">
<?php
    require_once('includes/connect.php');

    $stmt = $connect->prepare("SELECT title, date, projects.id AS project, media_url AS preview_image FROM projects, media WHERE projects.id = projects_id AND media_name LIKE '%preview%'");

    $stmt->execute();
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
        <link rel="fonts" href="fonts/Wildcut.ttf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/site.webmanifest">
        <title>Alisher Portfolio</title>
    </head>
    <body>
        <header>
        <div class="grid-con" id="header-mobile">
                <div class="col-span-1">
                    <object data="img/logo-portfolio-02.svg" type="image/svg+xml" id="header-logo"></object>
                </div>
                <div class="col-span-1 col-start-4" id="burger-div">
                    <object data="img/list.svg" type="image/svg+xml" id="burger"></object>
                </div>
                <nav class="main-nav t-col-start-5 t-col-span-3 l-col-start-10 l-col-end-13">
                    <ul class="main-nav-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <nav class="mobile-nav col-span-full hidden">
                    <ul class="mobile-nav-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
        <section class="welcome-con">
                <div class="grid-con" id="welcome">
                    <div class="welcome-hero col-span-2 t-col-span-4 l-col-span-6">
                        <h2 class="welcome-h2">
                            ALISH Portfolio
                        </h2>
                    </div>
                    <div class="welcome-hero-copy col-span-2 t-col-start-5 t-col-end-7 l-col-span-6">
                        <p class="welcome-text">
                            London, Canada
                        </p>
                        <object data="img/flower_3.svg" type="image/svg+xml"></object>
                        <p class="welcome-coord">
                            43.2380° N<br> 81.2642° W
                        </p>
                    </div>
                </div>
                <video controls class="player">
                    <source src="video/demo-reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
            </section>

            <section class="hailing">
                <div class="grid-con" id="hailing-con">
                    <div class="col-span-full">
                        <p class="hailing-text">
                            Hailing from Kazakhstan and currently based in Canada, I'm a versatile designer passionate about crafting exceptional user interfaces and innovative product designs.
                        </p>
                    </div>
                    <div class="col-span-2">
                        <a href="about.html" class="more-link"><p>More about me</p></a>
                    </div>
                </div>
            </section>

            <section class="works">
                

                <div class="grid-con" id="works-con">
                    <h2 class="works-h2 col-span-2 t-col-span-5">Selected works</h2>
                    
                <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="work-card col-span-full">
                        <img src="img/'.$row['preview_image'].'" alt="Jibek case study preview">
                        
                        <p class="descriptor">'.$row['date'].'</p>
                        <a href="project.php?id='.$row['project'].'"><h3 class="card-heading">'.$row['title'].'</h3></a>
                        <div class="work-card-text">
                            <p class="main-p">A mobile app that becomes every travelers best friend</p>
                            <object data="img/arrow.svg" type="image/svg+xml"></object>
                        </div>
                    </div>';
                    }

                    $stmt = null;
                ?>
                

                </div>
            </section>

            <section class="grid-con" id="cta-con">
                <h2 class="cta-heading col-span-full">
                    Let's work together!
                </h2>
                <button class="cta-button col-span-full"><p>Click!</p><object data="img/arrow.svg" type="image/svg+xml" class="button-arrow"></object></button>
            </section>
        </main>
        <footer>
            <div class="grid-con" id="footer-div">
                
                <ul class="col-span-1 col-start-1">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <object data="img/logo-portfolio-02.svg" type="image/svg+xml" class="footer-log col-start-4 col-span-2 t-col-start-6 t-col-span-3 l-col-start-11 l-col-end-13"></object>
                <p class="descriptor col-span-full">
                    Alisher Yantizhanov 2024. All rights reserved
                </p>
            </div>

            <?php
echo date('l jS \of F Y h:i:s A');
?>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@latest/bundled/lenis.min.js"></script>
    <script>
        const lenis = new Lenis()


        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)
        
    </script>
    <script src="js/SplitText.js"></script>
    <script src="js/main.js"></script>
    <script src="js/burger.js"></script>
    </body>
    
</html>