<!DOCTYPE html>
<html lang="en">
<?php
    require_once('includes/connect.php');

    $stmt = $connect->prepare("SELECT *, projects.id AS project, media_url AS preview_image FROM projects, media WHERE projects.id = projects_id AND media_name LIKE '%preview%'");

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
        <link rel="fonts" href="fonts/ZI_SQUARE.otf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"/>
        <link rel="manifest" href="img/site.webmanifest">
        <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
        <script defer src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@latest/bundled/lenis.min.js"></script>
        <script defer src="js/lenis.js"></script>

        <script defer src="js/ball.js"></script>
        <script defer src="js/SplitText.js"></script>
        <script defer src="js/main.js"></script>
        <script defer src="js/burger.js"></script>
        
        <title>Alish Designs Here!</title>
    </head>
    <body>
        <header>
            <div class="grid-con">
                <div class="col-span-1">
                    <object data="img/logo-portfolio-02.svg" type="image/svg+xml" id="header-logo"></object>
                </div>
                <nav class="main-nav">
                    <ul class="main-nav-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="socials mobile-hidden t-col-start-6 t-col-end-7 l-col-start-12 l-col-end-13">
                    <a href="https://linkedin.com/in/alisher-y" target="_blank" rel="noopener noreferrer" class="mobile-hidden">
                        <i class="ph-fill ph-linkedin-logo"></i>
                      </a>
                      <a href="https://instagram.com/alish.des" target="_blank" rel="noopener noreferrer" class="mobile-hidden">
                        <i class="ph-fill ph-instagram-logo"></i>
                      </a>
                      <a href="https://www.behance.net/alishdesigncom" target="_blank" rel="noopener noreferrer" class="mobile-hidden">
                        <i class="ph-fill ph-behance-logo"></i>
                      </a>
                </div>
            </div>
        </header>
        <main>
            <div class="ball"></div>
            <section class="welcome-con">
                <div class="grid-con" id="welcome">
                    <div class="welcome-hero col-span-2 t-col-span-4 l-col-span-6">
                        <h2 class="welcome-h2">
                            hi there
                        </h2>
                    </div>
                    <div class="welcome-hero-copy col-span-2 t-col-start-5 t-col-end-7 l-col-span-6">
                        <p class="welcome-text">
                            London, Canada
                        </p>
                        <object data="img/flower_3.svg" type="image/svg+xml" class="welcome-star"></object>
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
                        <p class="hailing-text hover-target">
                            Hailing from Kazakhstan and currently based in Canada, I'm a versatile designer passionate about crafting exceptional user interfaces and innovative product designs.
                        </p>
                    </div>
                    <div class="col-span-2">
                        <a href="about.html" class="more-link"><p>More about me <span>&#10141;</span></p></a>
                    </div>
                </div>
            </section>

            <section class="works">
                <div class="grid-con" id="works-con">
                    <h2 class="works-h2 col-span-2 t-col-span-full">Selected works </h2>
                </div>
                <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="card">
                    <div class="grid-con">
                        <img src="img/'.$row['preview_image'].'" alt="Orbitz case study preview" class="col-span-full t-col-span-3 l-col-span-6">
                        <div class="card-text col-span-full t-col-span-3 l-col-span-6">
                            <div class="card-heading-div">
                                <h3 class="card-heading">
                                    '.$row['title'].'
                                </h3>
                                <p class="main-p col-span-full">
                                    '.$row['desc_short'].' 
                                </p>
                            </div>
                            <div class="card-cols">
                                <div class="card-left-col">
                                    <div class="card-desc">
                                        <p class="descriptor">
                                            Industry
                                        </p>
                                        <p class="main-p">
                                            '.$row['industry'].'
                                        </p>
                                    </div>
                                    <a href="project.php?id='.$row['project'].'" class="view-link main-p">View project &#10141;</a>
                                </div>
                                <div class="card-right-col">
                                    <div class="card-desc">
                                        <p class="descriptor">
                                            Deliverables
                                        </p>
                                        <p class="main-p">
                                            '.$row['tags'].'
                                        </p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>';}
                $stmt = null;
                ?>
            </section>

            <section class="cta-section">
                <div class="grid-con" id="cta-con">
                    <h2 class="cta-heading col-span-full">
                        Let me show you my vision
                    </h2>
                    <a href="contact.php" class="cta-button col-span-full t-col-start-2 t-col-span-4 l-col-start-5">
                        <p>Click!</p>
                        <object data="img/arrow.svg" type="image/svg+xml" class="button-arrow"></object>
                    </a>
                </div>
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
                <p class="descriptor col-span-full t-col-start-1 t-col-end-4">
                    &#169; Alisher Yantizhanov 2025. All rights reserved
                </p>
                <div class="socials t-col-start-6 t-col-end-7 l-col-start-12 l-col-end-13">
                    <a href="https://linkedin.com/in/alisher-y" target="_blank" rel="noopener noreferrer">
                        <i class="ph-fill ph-linkedin-logo"></i>
                      </a>
                      <a href="https://instagram.com/alish.des" target="_blank" rel="noopener noreferrer">
                        <i class="ph-fill ph-instagram-logo"></i>
                      </a>
                      <a href="https://www.behance.net/alishdesigncom" target="_blank" rel="noopener noreferrer">
                        <i class="ph-fill ph-behance-logo"></i>
                      </a>
                </div>
            </div>
        </footer>
    </body>
    
</html>