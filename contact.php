<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
        <link rel="fonts" href="fonts/Wildcut.ttf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Alisher Portfolio</title>
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
                    <h2 class="page-h2 col-span-3 t-col-span-4 l-col-span-6">
                        Contact
                    </h2>
                    <div class="col-span-1 t-col-start-6 t-col-span-1 l-col-start-8 heading-icon" id="icon-contact">
                        <object data="img/arrow.svg" type="image/svg+xml"></object>
                    </div>
                </div>
            </section>

            <section class="form-con">
                <div class="grid-con">
                    <p class="main-p col-span-full t-col-span-3 l-col-start-1 l-col-span-4 main-p-anim">Lets create something amazing together! Whether youre looking for a fresh perspective, need help with a project, or just want to connect, Im here to help. Feel free to reach out—Id love to hear from you!</p>
                    <form method="post" action="sendmail.php" class="contact-form col-span-full t-col-span-5 l-col-start-8">
                        <div class="form-heading">
                            <h3 class="form-heading-h3">
                                Project Details
                            </h3> 
                            <object data="img/arrow.svg" type="image/svg+xml"></object>
                        </div>
                        <input type="text" name="field" id="field" class="input" placeholder="What's the field?">
                        <input type="text" name="budget" id="budget" class="input" placeholder="Your estimated budget">
                        <input type="text" name="deadline" id="deadline" class="input" placeholder="What's the deadline?">
                        <div class="form-heading">
                            <h3 class="form-heading-h3">
                            Personal Details
                            </h3> 
                            <object data="img/arrow.svg" type="image/svg+xml"></object>
                        </div>
                        <input type="text" name="name" id="name" class="input" placeholder="Your name">
                        <input type="email" name="email" id="email" class="input" placeholder="Your email">
                        <input type="text" name="brief" id="brief" class="input" placeholder="Tell me about this project">
                        <input type="submit" name="sumbit" id="submit-btn" value="Submit!">
                    </form>
                </div>
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