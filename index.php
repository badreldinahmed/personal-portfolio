<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wide=device-width, initial-scale=1.0">
    <title> Badreldin Ahmed Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
          integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- <div class="logo">
            <img src="img/logo-00.jpg" alt="">
        </div> -->
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">My services</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">About me</a></li>
                <li class="nav__item"><a href="#work" class="nav__link">My work</a></li>
            </ul>
        </nav>
    </header>

    <!-- Introduction title section -->
    <section class="intro" id="home">
        <H1 class="section__title section__title--intro">
            Hi, I am <strong> Badreldin Ahmed</strong>
        </H1>
        <p class="section__subtitle section__subtitle--intro">Front-end dev</p>
        <img src="img/ahmed.JPG" alt="a picture of Badreldin Ahmed" class="intro__img">
    </section>

    <!-- My Services -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services"> What I do </h2>
        <div class="services">
            <div class="service">
                <h3>Design + Development </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div> <!-- / service -->

            <div class="service">
                <h3>Web tester </h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div> <!-- / service -->

            <div class="service">
                <h3>Code Editor </h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div> <!-- / service -->
        </div> <!-- / services -->
        <a href="#work" class="btn">My work</a>
    </section>

    <!-- About me -->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about"> Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Creative designer based out of Connecticut</p>

        <div class="about-me__body">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>>
        </div>
        <img src="img/ahmed-02.JPG" alt="Ahmed leaning against the wall" class="about-me__img">
    </section>

    <!-- My work -->
    <section class="my-work" id="work">
        <h2 class="section__title section__tilte--work">My work</h2>
        <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

        <div class="portfolio">
            <!-- Portfolio item 01 -->
            <a href="portfolio-item.html" class="portfolio__item">
                <img src="img/portfolio-01.jpg" alt="" class="portfolio__img">
            </a>

             <!-- Portfolio item 02 (change the "#" in href to the page of the portfolio-->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-02.jpg" alt="" class="portfolio__img">
            </a>

             <!-- Portfolio item 03 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-03.jpg" alt="" class="portfolio__img">
            </a>

             <!-- Portfolio item 04 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-04.jpg" alt="" class="portfolio__img">
            </a>

             <!-- Portfolio item 05 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-05.jpg" alt="" class="portfolio__img">

                 <!-- Portfolio item 06 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-06.jpg" alt="" class="portfolio__img">
            </a>

                 <!-- Portfolio item 07 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-07.jpg" alt="" class="portfolio__img">
            </a>

                 <!-- Portfolio item 08 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-08.jpg" alt="" class="portfolio__img">
            </a>

                 <!-- Portfolio item 09 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-09.jpg" alt="" class="portfolio__img">
            </a>

                 <!-- Portfolio item 10 -->
            <a href="#" class="portfolio__item">
                <img src="img/portfolio-10.jpg" alt="" class="portfolio__img">
            </a>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <a href="mailto:badreldin.ahmed@uconn.edu" class="footer__link">badreldin.ahmed@uconn.edu</a>
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-list__link" href="https://www.linkedin.com/in/badreldin-ahmed-996324198">
                    <i class="fab fa-linkedin"></i></a></li>
            <li class="social-list__item">
                <a class="social-list__link" href="https://www.instagram.com/bad.reldin/">
                    <i class="fab fa-instagram"></i></a></li>
        </ul>
    </footer>

    <script src="js/index.js"></script>

</body>
</html>