<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federico pisa's portfolio</title>
    <!-- jquery -->
    <script type="text/javascript" src="./JsLibs/jquery-3.6.0.min.js"></script>
    <!-- three js -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Grey+Qo&family=Montserrat+Alternates:wght@100;200;300&display=swap"
        rel="stylesheet">
    <!-- particles.js -->
    <script type="text/javascript" src="./JsLibs/particles.js-master/particles.js"></script>
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- page script + css -->
    <script type="text/javascript" src="./index.js"></script>
    <link rel="stylesheet" href="./index.css">
    <!-- emailJS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>

</head>

<body>
    <div id="wrapper">
    </div>
    <div id="popUp" class="ms fw-bold text-center pt-0" style="display: none;">
        <div class="row">
            <div class="col-1 offset-10">
                <i id="times" class="fas fa-times"></i>
            </div>
        </div>
        <div id="popUpContent">

        </div>
    </div>
    <div id="darkScreen" style="display: none;">

    </div>
    <div id="who" class="row m-0 text-center" data-aos="fade-left" data-aos-duration="1000">
        <div class="col-10 offset-1">
            <h1 class="ms display-4">Pisa Federico: Web developer</h1>
            <div class="mt-5 row">
                <div class="col-md-6">
                    <img src="./img/me.jpg" class="shadowHDS">
                </div>
                <div class="col-md-6 ms whoDesc">
                    <h2><i class="fas fa-user"></i> Who am i?</h2>
                    <p>
                        Hi, my name is <b>Federico Pisa</b> I'm 22 years old and i'm from Italy.<br /> My love for
                        computers started when I was a kid that wanted to become a "Mad scientist", while that dream
                        didn't succeed my passions led me to a bachelor
                        in computer science.<br>
                        Nowdays, i'm web developer for a tour operator and i'd like to do some freelancing projects to
                        gain some money
                        and learn new things.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="why" class="text-md-start ms px-5 col-10 offset-1">
        <div class="whyContent" data-aos="fade-right">
            <h2><i class="fas fa-hard-hat"></i> Why should you hire me?</h2>
            <p> If you are here you probably found me on some freelancing
                website, then my profile already convinced you a bit.<br /> If my profile wasn't enough or you reached
                me in other ways I'd like to tell you how i work:
            </p>
            <div class="row">
                <div class="whyLi col-md-3 offset-md-0 col-10 offset-1 my-md-0 my-2" data-aos="zoom-in-down"
                    data-aos-duration="1000">
                    Every project i decide to take it's a project i know i can do, so it
                    will be started and finished without a problem.
                </div>
                <div class="whyLi col-md-3 offset-md-0 col-10 offset-1 my-md-0 my-2" data-aos="zoom-in-down"
                    data-aos-duration="1000">
                    I've studied computer science at university, i know how to make a clean, scalable and manutenible
                    code. <br>
                    This will help in future versions.
                </div>
                <div class="whyLi col-md-3 offset-md-0 col-10 offset-1 my-md-0 my-2" data-aos="zoom-in-down"
                    data-aos-duration="1000">
                    Every project will have its own report which explain everything about how the website is made.
                </div>
                <div class="whyLi col-md-3 offset-md-0 col-10 offset-1 my-md-0 my-2" data-aos="zoom-in-down"
                    data-aos-duration="1000">
                    I already do this has a job, i'm a professional web developer.
                </div>
            </div>
        </div>
    </div>
    <div id="how" class="text-md-end ms px-5 col-10 offset-1">
        <div class="howContent" data-aos="fade-left">
            <h2><i class="fas fa-tools"></i> How do i work?</h2>
            <p>
                My tools are
                <span class="anim yl">
                    <i class="fab fa-js-square"></i> javascript
                </span>,
                <span class="anim or">
                    <i class="fab fa-html5"></i> html5
                </span>,
                <span class="anim bl">
                    <i class="fab fa-css3-alt"></i> css3
                </span>,
                <span class="anim vl">
                    <i class="fab fa-css3-alt"></i> PHP
                </span>,
                <span class="anim rd">
                    <i class="fab fa-angular"></i> AngularJS
                </span>,
                <span class="anim az">
                    <i class="fas fa-database"></i> mySql
                </span>,
                I'm currently learning Angular2, Wordpress and React, when I am able to use them I will write it here.
            </p>
        </div>
    </div>
    <div id="certificate" class="text-md-center ms px-5 col-10 offset-1" data-aos="fade-down">
        <h2><i class="fas fa-certificate"></i> Certificates</h2>
        <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/html.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/css.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/js.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/jq.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/ajs.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/php.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/mysql.jpg" class="w-50 rounded shadowHDS" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="when" class="text-md-start ms px-5 col-10 offset-1">
        <div class="whenContent" data-aos="fade-down">
            <h2><i class="fas fa-calendar"></i> When can i contact you?/will you work on my project?</h2>
            <p>
                I work from monday to tuesday from 9 a.m to 6 p.m but i'll be able to read every email anytime. <br>
                To work on a project i'll take some hours after dinner and during the weekend, but don't worry, I'll
                respect the schedule. <br>
            </p>
        </div>
    </div>
    <div id="where" class="text-md-center ms px-5 col-10 offset-1">
        <div class="whereContent" data-aos="fade-in">
            <h2><i class="fas fa-map-marker-alt"></i> Where can you find me?</h2>
            <p>
                I'm on
                <span class="ig fw-bold">
                    <a href="https://www.instagram.com/federico_pisa/" class="text-decoration-none" target="_blank">
                        <i class="fab fa-instagram"></i>
                        Instagram
                    </a>
                </span>
                <br>
                This is my email
                <span class="email fw-bold">
                    <a href="mailto:Federicopisajob@gmail.com" class="text-decoration-none" target="_blank">
                        <i class="far fa-envelope"></i>
                        Federicopisajob@gmail.com
                    </a>
                </span>
                <br>
                and this is my number
                <span class="number fw-bold">
                    <a href="tel:3335384289" class="text-decoration-none" target="_blank">
                        <i class="fas fa-phone-alt"></i>
                        333 538 4289
                    </a>
                </span>
                <br>
                or...
            </p>
        </div>
    </div>
    <div id="contactForm" class="text-md-center ms px-5 col-10 offset-1">
        <div class="contactFormContent" data-aos="flip-left">
            <h2><i class="fas fa-pen"></i> Contact me right now</h2>
            <form id="contact-form" class="col-10 offset-1 pt-4">
                <div class="form-group text-start py-2">
                    <label for="Fullname">Full name</label>
                    <input type="text" class="form-control" id="Fullname" placeholder="Enter fullname or nominative">
                </div>
                <div class="form-group text-start py-2">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" id="Address"
                        placeholder="Ex: Phone number, and email or social profile url...">
                </div>
                <div class="form-group text-start py-2">
                    <label for="Motivation">Why are you contacting me?</label>
                    <input type="text" class="form-control" id="Motivation"
                        placeholder="Ex: I need a website.../I need a restyling...">
                </div>
                <div class="form-group text-start py-2">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" id="Description"
                        placeholder="Ex: I need an e-commerce website to sell potatoes">
                </div>
                <div class="form-check text-start py-2">
                    <input type="checkbox" class="form-check-input" id="AreYouSureAboutThat">
                    <label class="form-check-label" for="AreYouSureAboutThat">I'm sure i want to contact you</label>
                </div>
                <button class="btn btn-dark" id="sendC">Send request</button>
            </form>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>