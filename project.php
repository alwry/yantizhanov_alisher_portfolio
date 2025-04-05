<!DOCTYPE html>
<html lang="en">
<?php
    require_once('includes/connect.php');

    $query = 'SELECT projects.*,
    GROUP_CONCAT(media_url) AS images, 
    (SELECT media_url FROM media WHERE projects_id = projects.id AND media_url LIKE "%preview%") AS preview_image
    FROM projects, media 
    WHERE projects_id = projects.id AND projects.id = :projectsid';

    $stmt = $connect->prepare($query);
    $projectsid = $_GET['id'];
    
    $stmt->bindParam(':projectsid', $projectsid, PDO::PARAM_INT);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = null;
    
    $image_array = explode(',',$row['images']);


    $nextQuery = "SELECT * FROM projects WHERE id != :current_id ORDER BY RAND() LIMIT 1";
    $nextStmt = $connect->prepare($nextQuery);
    $nextStmt->bindParam(':current_id', $projectsid, PDO::PARAM_INT);
    $nextStmt->execute();
    $nextProject = $nextStmt->fetch(PDO::FETCH_ASSOC);

    $previewQuery = "SELECT media_url FROM media 
                    WHERE projects_id = :pid AND media_url LIKE '%preview%' 
                    LIMIT 1";
    $previewStmt = $connect->prepare($previewQuery);
    $previewStmt->bindParam(':pid', $nextProject['id'], PDO::PARAM_INT);
    $previewStmt->execute();
    $previewImage = $previewStmt->fetchColumn();

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
        <?php echo '<title>'.$row['title'].'</title>' ?>
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
            <section class="about">
                <div class="grid-con">
                    <?php {
                    echo '<div class="case-p-div mobile-hidden col-start-3 col-span-1 t-col-start-1">
                        <p class="case-p mobile-hidden">
                            '.$row['date'].'
                        </p>
                    </div>
                    <h2 class="page-h2 col-span-3 t-col-span-4 l-col-start-4 l-col-span-5">
                        '.$row['title'].'
                    </h2>';}
                    ?>
                    <div class="col-span-1 t-col-start-6 t-col-span-1 l-col-start-13 heading-icon" id="icon-contact">
                        <object data="img/flower_3.svg" type="image/svg+xml"></object>
                    </div>
                </div>
            </section>
            
            <?php {
                echo '
            <section class="case-content">
                <img src="img/'.$row['preview_image'].'" alt="case study preview">
                <div class="case-par">
                    <div class="grid-con">
                        <h3 class="chapter-h3 col-span-full l-col-start-1 l-col-span-5">
                            Project Overview
                        </h3>
                        
                        <p class="case-p col-span-full t-col-span-4 l-col-start-6 l-col-end-13">
                            '.$row['desc_short'].'
                        </p>
                        <div class="col-span-full l-col-start-6 l-col-end-13 case-table">
                            <div class="case-item">
                                <h3 class="chapter-h3">Deliverables</h3>
                                <p class="case-p">
                                    '.$row['tags'].'
                                </p>
                            </div>
                            <div class="case-item">
                                <h3 class="chapter-h3">Industry</h3>
                                <p class="case-p">
                                    '.$row['industry'].'
                                </p>
                            </div>
                            <div class="case-item">
                                <h3 class="chapter-h3">Date posted</h3>
                                <p class="case-p">
                                    '.$row['date'].'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>';}
                
            ?>
        <section class="case-content">
            <?php
            $sections = [
                [
                    'title' => $row['heading_1'],
                    'desc' => $row['description_1'],
                    'images' => [1, 2]
                ],
                [
                    'title' => $row['heading_2'],
                    'desc' => $row['description_2'],
                    'images' => [3, 4]
                ],
                [
                    'title' => $row['heading_3'],
                    'desc' => $row['description_3'],
                    'desc2' => $row['description_4'],
                    'images' => [5, 6, 7]
                ]
            ];

            foreach ($sections as $section) {
                echo '<div class="case-par">';
                echo '<div class="grid-con">';

                if (!empty($section['title'])) {
                    echo '<h3 class="chapter-h3 l-col-start-1 l-col-span-5 col-span-full">'.$section['title'].'</h3>';
                }

                if (!empty($section['desc'])) {
                    echo '<p class="case-p col-span-full t-col-span-4 l-col-start-6 l-col-end-13">'.$section['desc'].'</p>';
                }

                if (!empty($section['desc2'])) {
                    echo '<p class="case-p col-span-full t-col-start-3 t-col-span-4 l-col-start-6 l-col-end-13">'.$section['desc2'].'</p>';
                }

                echo '</div>'; 
                echo '</div>'; 

                // Show images under this section
                foreach ($section['images'] as $i) {
                    if (isset($image_array[$i])) {
                        $image = trim($image_array[$i]);
                        echo '<img src="img/'.$image.'" alt="Project image">';
                    }
                }
            }
            ?>
        </section>


        <section class="grid-con">
        <h2 class="page-h2 col-span-full">
            Keep exploring!
        </h2>

        <div class="next-case col-span-full">
            <img src="img/<?php echo htmlspecialchars($previewImage); ?>" alt="Next project: <?php echo htmlspecialchars($nextProject['title']); ?>">

            <div class="next-case-div">
            <h3 class="next-case-h3">
                <?php echo htmlspecialchars($nextProject['title']); ?>
            </h3>
            <a href="project.php?id=<?php echo $nextProject['id']; ?>" class="main-p">
                <p>View project</p>
            </a>
            </div>

            <p class="main-p">
            <?php echo htmlspecialchars($nextProject['desc_short']); ?>
            </p>
        </div>
        </section>

        <section class="grid-con" id="cta-con">
            <h2 class="cta-heading col-span-full">Let me show you my vision</h2>
            <a href="contact.php" class="cta-button col-span-full t-col-start-2 t-col-span-4 l-col-start-5">
                <p>Click!</p>
                <object data="img/arrow.svg" type="image/svg+xml" class="button-arrow"></object>
            </a>
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