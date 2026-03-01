<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies - Zeran Lu Portfolio</title>
    <link type="text/css" href="css/main.css" rel="stylesheet">
    <link type="text/css" href="css/grid.css" rel="stylesheet">

    <!--GreenSock Connections-->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollToPlugin.min.js"></script>
        
    <!--JS Modules-->
    <script type="module" defer src="js/main.js"></script>
</head>
<body data-page="case-study" id="case-study-body">
<header class="grid-con">
    
        <a href="index.html" class="sticky-mobile mobile-only" id="logo">
            <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540.41 469.44">
  <defs>
    <style>
      .cls-1 {
        fill: #FFF;
        stroke: #44CFCB;
        stroke-miterlimit: 10;
        stroke-width: 6px;
      }
    </style>
  </defs>
  <g>
    <g>
      <polygon class="cls-1" points="271.53 388.82 271.53 467.71 539.41 313.05 539.41 234.16 355.31 340.45 271.53 388.82"/>
      <polygon class="cls-1" points="355.31 338.45 355.31 108.02 271.53 156.39 271.53 386.82 271.53 386.82 355.31 338.45"/>
    </g>
    <g>
      <polygon class="cls-1" points="270.53 388.82 186.75 340.45 2.65 234.16 2.65 313.05 270.53 467.71 270.53 388.82 270.53 388.82"/>
      <polygon class="cls-1" points="270.53 236.27 186.75 187.9 2.65 233.16 86.43 281.53 270.53 236.27"/>
      <polygon class="cls-1" points="270.53 156.39 186.75 108.02 2.65 1.73 2.65 80.62 270.53 235.27 270.53 156.39 270.53 156.39"/>
    </g>
  </g>
</svg>
        </a>

    <button class="sticky-mobile" id="hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#FFF"><path d="M120-240v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg>
    </button>

    <div class="overlay" id="menu">

        <button class="sticky-mobile" id="close">
            <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#FFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </button>

        <nav>
            <ul>
                <li><a href="index.html"><img src="images/gen-logo/port-logo.svg" alt="logo"></a></li>
                <li><a href="index.html"><span>01.</span> Homepage</a></li>
                <li><a href="contact.html"><span>02.</span> Contact</a></li>
                <li><a href="assets/lu_zeran_resume.pdf"><button class="btn">Resume</button></a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <h1 class="hidden">Case Study Page</h1>

    <div class="grid-con" id="case-study-intro-con">

        <h2 class="col-span-full"><span>01.</span>Project Case Studies</h2>

        <p class="col-span-full">Check out some case studies of my various projects!</p>
        
    </div>

    <div id="case-study-filter-con">
        
        <div id="filter-tags-con">

            <div class="filter-tags">
                <button>Front-end</button>
            </div>

            <div class="filter-tags">
                <button>Back-end</button>
            </div>

            <div class="filter-tags">
                <button>Motion Design</button>
            </div>

            <div class="filter-tags">
                <button>Graphic Design</button>
            </div>

            <div class="filter-tags">
                <button>3D Modelling</button>
            </div>

        </div>
    </div>

    <div class="grid-con" id="case-study-con">
        <h2 class="col-span-full"><span>02.</span>All Projects</h2>


        <?php require_once 'includes/classes/Database.php';
        
        use ZeranPortfolio\Database;

        $database = new Database();
        $projects = $database->query("SELECT * FROM tbl_case_studies ORDER BY case_study_id DESC");

        foreach ($projects as $project) {
            echo '<div class="case-study-box col-span-4 m-col-span-6">
                <h3>' . htmlspecialchars($project['project_title']) . '</h3>
                <p>' . htmlspecialchars($project['project_desc']) . '</p>
            </div>';
        }

        ?>


    </div>
    
</main>

<footer>
        
        <div class="footer-section grid-con" id="footer-nav-con">
            <!-- Footer Nav Links -->
                    <h3 class="col-span-full">Footer Navigation</h3>

                    <div class="footer-cta-con col-span-2">
                        <a href="#intro">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#fff"><path d="m560-242-43-42 168-168H160v-60h525L516-681l43-42 241 241-240 240Z"/></svg>
                            Introduction
                        </a>
                    </div>

                    <div class="footer-cta-con col-span-2">
                        <a href="#about">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#fff"><path d="m560-242-43-42 168-168H160v-60h525L516-681l43-42 241 241-240 240Z"/></svg>
                            About
                        </a>
                    </div>

                    <div class="footer-cta-con col-span-2">
                        <a href="#projects">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#fff"><path d="m560-242-43-42 168-168H160v-60h525L516-681l43-42 241 241-240 240Z"/></svg>
                            Projects
                        </a>
                    </div>

                    <div class="footer-cta-con col-span-2">
                        <a href="case_study.php">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#fff"><path d="m560-242-43-42 168-168H160v-60h525L516-681l43-42 241 241-240 240Z"/></svg>
                            Case Studies
                        </a>
                    </div>

                    <div class="footer-cta-con col-span-2">
                        <a href="contact.html">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#fff"><path d="m560-242-43-42 168-168H160v-60h525L516-681l43-42 241 241-240 240Z"/></svg>
                            Contact Me!
                        </a>
                    </div>
        </div>

        <!-- Footer Socials -->

        <div class="footer-section grid-con" id="footer-socials-con">
            <h3 class="col-span-full">Visit my socials!</h3>

            <div class="col-span-full" id="footer-socials-icons-con">
                
                <div class="icons-con">
                    <a href="https://www.facebook.com/">
                        <img src="images/social-media-logo/facebook.svg" alt="facebook logo">
                    </a>
                </div>
                
                <div class="icons-con">
                    <a href="https://www.linkedin.com/">
                        <img src="images/social-media-logo/linkedin.svg" alt="linkedIn logo">
                    </a>
                </div>

                <div class="icons-con">
                    <a href="https://www.instagram.com/">
                        <img src="images/social-media-logo/instagram.svg" alt="instagram logo">
                    </a>
                </div>

                <div class="icons-con">
                    <a href="https://ca.pinterest.com/zeranlu0326/">
                        <img src="images/social-media-logo/pinterest.svg">
                    </a>
                </div>

            </div>
        </div>

        <div class="footer-section grid-con" id="footer-logo-text-con">
            <div class="footer-logo-con col-span-2 m-col-start-2 m-col-span-3">
                <a href="index.html">
                    <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 540.41 469.44">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: #FFF;
                            stroke: #44CFCB;
                            stroke-miterlimit: 10;
                            stroke-width: 6px;
                        }
                        </style>
                    </defs>
                    <g>
                        <g>
                        <polygon class="cls-1" points="271.53 388.82 271.53 467.71 539.41 313.05 539.41 234.16 355.31 340.45 271.53 388.82"/>
                        <polygon class="cls-1" points="355.31 338.45 355.31 108.02 271.53 156.39 271.53 386.82 271.53 386.82 355.31 338.45"/>
                        </g>
                        <g>
                        <polygon class="cls-1" points="270.53 388.82 186.75 340.45 2.65 234.16 2.65 313.05 270.53 467.71 270.53 388.82 270.53 388.82"/>
                        <polygon class="cls-1" points="270.53 236.27 186.75 187.9 2.65 233.16 86.43 281.53 270.53 236.27"/>
                        <polygon class="cls-1" points="270.53 156.39 186.75 108.02 2.65 1.73 2.65 80.62 270.53 235.27 270.53 156.39 270.53 156.39"/>
                        </g>
                    </g>
                    </svg>
                </a>
        </div>

        <div class="col-span-2 m-col-start-7 m-col-span-full" id="footer-text-con"> 
                <p>Thank you for your time and checking out my portfolio!
                    <br>
                    <br>
                    Contact me to work together:
                </p>

                <p>Contact: 4168006908</p>

                <p>Email: zeranlu0326@gmail.com</p>
            </div>
        </div>
        
        <div class="footer-closing-text">
            <p>Copyright ©2026 Zeran Lu</p>
        </div>
</footer>
</body>
</html>