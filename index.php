<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./landing.css?v=<?php echo time(); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onsty</title>
</head>

<body>

<!--<section class="hero">-->
<!--    <img src="./images/dark-blue-technology-background-free-vector.jpg" alt="Hero Background" class="img-fluid w-100">-->
<!--    <button>Back to Home</button>-->
<!--</section>-->

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="" class="logo d-flex align-items-center me-auto" style="text-decoration: none">
            <h1 class="sitename">Onsty</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="./landing.php" class="active" style="text-decoration: none">Home</a></li>
                <li><a href="#services" style="text-decoration: none">Services</a></li>
                <li><a href="#" style="text-decoration: none">Team</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>


<section id="hero" class="hero section" style="
color: white;
    background-image: linear-gradient(to right top, #031a3d, #002354, #002c6c, #003584, #003e9d);
">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Elegant and creative solutions</h1>
                <p>We are team of talented designers making websites with Bootstrap</p>
                <button>Back to Home</button>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="./images/bg_1.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: 2rem" id="services">
    <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
        <li class="nav-item col-6 col-md-5 col-lg-2">
            <div class="button_card"
                 style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                <button class="btn about-btn" data-info="Info 1">
                    <img src="./images/user-information.png" class="about-img">
                </button>
                <p style="color: black; margin-top: 1rem"> About Us</p>
            </div>
        </li>
        <li class="nav-item col-6 col-md-5 col-lg-2">
            <div class="button_card"
                 style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                <button class="btn about-btn" data-info="Info 2">
                    <img src="./images/onsty.png" class="about-img" style="width: 5rem !important;">
                </button>
                <p style="color: black; margin-top: 1rem; text-align: center"> Onsty IT Solutions</p>
            </div>
        </li>
        <li class="nav-item col-6 col-md-5 col-lg-2">
            <div class="button_card"
                 style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                <button class="btn about-btn" data-info="Info 3">
                    <img src="./images/studio.png" class="about-img">
                </button>
                <p style="color: black; margin-top: 1rem"> Onsty Studio </p>
            </div>
        </li>
        <li class="nav-item col-6 col-md-5 col-lg-2">
            <div class="button_card"
                 style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                <button class="btn about-btn" data-info="Info 4">
                    <img src="./images/support.png" class="about-img" style="width: 5rem!important;">
                </button>
                <p style="color: black; margin-top: 1rem; text-align: center"">Onsty Supporters </p>
            </div>
        </li>
        <li class="nav-item col-6 col-md-5 col-lg-2">
            <div class="button_card"
                 style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                <button class="btn about-btn" data-info="Info 5">
                    <img src="./images/design.png" class="about-img">
                </button>
                <p style="color: black; margin-top: 1rem; text-align: center""> Onsty Designers </p>
            </div>
        </li>
    </ul>
</section>

<div class="spaces"></div>


<!-- Services Section -->
<section class="services">
    <div class="services-card-body">
        <p class="services-card-text service-info" id="service-info1">
            <!-- <h3 class="services-card-title" id="section-title1">About Onsty</h3> -->
            Onsty Education is an organization that supports students in school to find the
            educational knowledge they need, as well as helping students in universities and other
            educational institutions to find the knowledge they need. Onsty is a networked
            organization consisting of many sub-sectors and thereby aspires to create a
            social-educational platform related to education.

            Onsty Education is a networked organization consisting of several sub-sectors and
            thereby aspires to create a social-educational platform related to education. Onsty IT
            Solutions, Onsty Studios, Onsty Supporters, Onsty Designer, Onsty Printers, Onsty
            Advertising are providing services to tutors in several sectors and thus expect a wide
            spread in tuition classes. It hopes to attract students to onsty.lk and thereby create a
            social-educational platform.

            The onsty education is started in February 2023 as an organization providing assistance
            to migrants was called DeVn Migration (pvt) ltd at that time. An LMS that can teach
            online was developed to meet the qualifications such as IELTS, PTE, etc. required for
            overseas employment and education, and then it was developed as an LMS that could teach
            online for tuition classes from the beginning of 2024.

            ONSTI, which stands for Online Study, has further developed and spread widely in the
            field of tuition and reached to the present level. Today, it is an organization that
            offers many services beyond an LMS, such as recording lessions and online distribution,
            as well as online advertising for teacher through various services such as Onsty studio,
            Onsty designer, Onsty supporters and Onsty printers.
        </p>
        <div class="services-card-text service-info d-none" id="service-info2">
            <p>
                <!-- <h3 class="services-card-title service-info d-none">Onsty IT solutions</h3> -->
                The main operational center of ONSTI organization is known as Onsty IT Solutions. This
                section develops the Onsty Educational Platform. This section consists of web developers
                and mobile application developers. Many services are provided to teachers and students
                through this onsty educational platform.
            </p>
            <div class="unorderd-list">
                <ul>
                    <li>Online classes for teachers.</li>

                    <li>Providing opportunities for students to watching videos.</li>

                    <li>Providing opportunities for students to deliver tiutorials online.</li>

                    <li>Providing opportunities for held ontime exams.</li>

                    <li>Attendant marking, card marking and class fees collection.</li>

                    <li>To provide opportunities for teachers to study the basic information of students.</li>

                    <li>Providing opportunities for students to engage in self-study.</li>
                </ul>
            </div>
        </div>
        <p class="services-card-text service-info d-none" id="service-info3">
            <!-- <h3 class="services-card-title service-info d-none">Onsty Studio</h3> -->
            Teachers have to face many problems while doing online classes in the classroom where
            tuition classes are held. So, onsty has built Onsty Studios to conduct online classes in
            a quiet location. In this studio, technical staffs assist teachers in solving technical
            problems and they assist in connecting students to online classes, adding video
            recordings to the website, adding tutorials to the website and conducting online exams.
        </p>
        <p class="services-card-text service-info d-none" id="service-info4">
            <!-- <h3 class="services-card-title service-info d-none" id="service-info4">Onsty Supporters</h3> -->
            Customer officers work in onsty to assist students and teachers in using the onsty.lk
            website. They are available from 7:00 AM to 9:00 PM every day (except government
            approved holidays) to assist in resolving technical issues arising from the use of the
            website.
        </p>
        <p class="services-card-text service-info d-none" id="service-info5">
            <!-- <h3 class="services-card-title service-info d-none">Onsty Designers</h3> -->

            Onsty is expanding widely in the field of tuition classes and offers other services
            besides online classes through the website. Through this, Onsty organization expect to
            attract more teachers to the website. Our graphic designers design leaflets and
            brochures for teachers and advertise on online platforms like facebook. Also supports
            the promotion of teachers' tuition classes.
        </p>
    </div>
</section>

<div class="spaces"></div>
<section id="testimonials" class="testimonials section bg-dark text-light py-5">
    <div class="container text-center mb-4" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="testimonial-item text-center d-flex flex-column justify-content-center"
                     style="height: 300px; align-items: center">
                    <img src="./images/testimonials/testimonials-1.jpg" class="testimonial-img rounded-circle mb-3"
                         alt="Saul Goodman">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="px-lg-5">
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="testimonial-item text-center d-flex flex-column justify-content-center"
                     style="height: 300px;  align-items: center">
                    <img src="./images/testimonials/testimonials-2.jpg" class="testimonial-img rounded-circle mb-3"
                         alt="Sara Wilsson">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="px-lg-5">
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                        malis quorum velit fore eram velit sunt aliqua noster fugiat irure.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
        </div>
    </div>
</section>
<div class="spaces"></div>
<section id="team" class="team section">

    <div class="container section-title" data-aos="fade-up">
        <span>Onsty Team Members</span>
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">

        <div class="row gy-5">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="pic"><img src="./images/team-1.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="pic"><img src="./images/team-1.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="pic"><img src="./images/team-1.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                    </div>
                </div>
            </div>


        </div>

    </div>

</section>
<div class="spaces"></div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<script>
    const defaultInfo = document.getElementById('service-info1');

    defaultInfo.classList.remove('d-none');

    const aboutButtons = document.querySelectorAll('.about-btn');
    const serviceInfos = document.querySelectorAll('.service-info');

    aboutButtons.forEach(button => {
        button.addEventListener('click', function () {
            const info = this.getAttribute('data-info');

            // Reset background color and icon color for all buttons
            aboutButtons.forEach(btn => {
                btn.style.transition = 'none';
                btn.style.backgroundColor = '';
                const img = btn.querySelector('img');
                img.style.filter = ''; // Reset image color
            });

            // Change background color of clicked button
            this.style.transition = 'background-color 0.99s ease';
            this.style.backgroundColor = '#031A3D';

            // Change the icon color of the clicked button to white
            const img = this.querySelector('img');
            img.style.filter = 'brightness(0) invert(1)'; // Change the image to white

            // Hide all service info paragraphs and show the one corresponding to the clicked button
            serviceInfos.forEach(paragraph => paragraph.classList.add('d-none'));
            const selectedInfo = document.getElementById(`service-info${info.split(' ')[1]}`);
            selectedInfo.classList.remove('d-none');
        });
    });
</script>
</body>
</html>
