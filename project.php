<!DOCTYPE html>
<html lang="en">
<?php
    require_once('includes/connect.php');
    $query = 'SELECT * FROM projects, media WHERE projects.id = projects_id AND projects.id ='.$_GET['id']; 
    $results = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($results);
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
        <?php 
    echo '<title>'.$row['title'].'</title>' ?>
    </head>
    <body>
        <header>
            <div class="grid-con" id="header-mobile">
                <div class="col-span-1">
                    <object data="img/logo-portfolio-02.svg" type="image/svg+xml" id="header-logo"></object>
                </div>
                <div class="col-span-1 col-start-4 t-col-start-5 t-col-span-3 l-col-start-10 l-col-end-13" id="burger-div">
                    <object data="img/list.svg" type="image/svg+xml" id="burger"></object>
                    <nav class="main-nav">
                        <ul class="main-nav-ul">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <section class="about">
                <div class="grid-con">
                    <?php {
                        echo '<h2 class="page-h2 col-span-3 t-col-span-4 l-col-span-6">'
                        .$row['title'].'
                        </h2>';
                    }
                    ?>
                    
                    <div class="col-span-1 t-col-start-6 t-col-span-1 l-col-start-8 heading-icon" id="icon-contact">
                        <object data="img/arrow.svg" type="image/svg+xml"></object>
                    </div>
                </div>
            </section>

            <section class="case-info">
                <div class="grid-con">
                    <div class="case-info-con col-span-full">
                        <?php 
                            {
                            echo '<p class="main-p">'.$row['date'].'</p><p class="tools-p">'.$row['tags'].'</p>';
                            }
                        ?>
                        
                    </div>
                </div>
            </section>

            <section class="case-content">
                <img src="img/orbitz-1.jpg" alt="case study preview">
                <div class="grid-con">
                    <?php 
                        {
                    echo '<h3 class="chapter-h3 col-span-full">'
                        .$row['heading_1'].'
                    </h3>
                    <p class="case-p col-span-full t-col-span-4 l-col-span-6">'
                        .$row['description_1'].'
                    </p>
                    <p class="decorative-p mobile-hidden l-col-start-11">
                        [01]
                    </p>
                    <h3 class="chapter-h3 col-span-full t-col-start-3 l-col-start-6 l-col-span-6">'
                        .$row['heading_2'].'
                    </h3>
                    <p class="decorative-p mobile-hidden l-col-start-1">
                        (02)
                    </p>
                    <p class="case-p col-span-full t-col-start-3 t-col-span-4 l-col-start-6 l-col-span-6">'
                    .$row['description_2'].'
                    </p>';
                        }
                    ?>        
                    </div>
                
                <img src="img/orbitz-2.jpg" alt="case study preview">
                <div class="grid-con">
                    <?php {
                    echo '<h3 class="chapter-h3 col-span-full">'
                        .$row['heading_3'].'
                    </h3>
                    <p class="case-p col-span-full t-col-span-4 l-col-span-6">'
                        .$row['description_3'].'
                    <p class="decorative-p mobile-hidden l-col-start-11">
                        [03]
                    </p>
                    <p class="case-p col-span-full t-col-start-3 t-col-span-4 l-col-start-7 l-col-span-6">'
                        .$row['description_4'].'</p>';
                    }
                    ?>
                </div>
                <img src="img/orbitz-3.jpg" alt="case study preview">
                <img src="img/orbitz-4.jpg" alt="case study preview">
                <img src="img/orbitz-5.jpg" alt="case study preview">
                <img src="img/orbitz-6.jpg" alt="case study preview">
                <img src="img/orbitz-7.jpg" alt="case study preview">
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <object data="img/logo-portfolio-02.svg" type="image/svg+xml" class="footer-log col-start-4 col-span-2 t-col-start-6 t-col-span-3 l-col-start-11 l-col-end-13"></object>
                <p class="descriptor col-span-full">
                    Alisher Yantizhanov 2024. All rights reserved
                </p>
            </div>
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
    <script src="js/main.js"></script>
    </body>
    
</html>