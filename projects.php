<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digitally Elite | Our Projects | Web Design | Web Development | Digital Marketing</title>
    <meta name="description" content="Digitally Elite is an ideal digital partner for all kinds of
             businesses who wish to mark an online presence.">
    <meta name="keywords" content="Web Design, Web Developement, Digital Marketing">

    <?php
    @include('./layouts/links.php')
    ?>
</head>

<body>

    <?php
    @include 'layouts/navigation.php'
    ?>

    <main>
        <section class="section-about-hero hero-innerpage mb--section">
            <div class="container align--text-c">
                <div class="about-text-box">
                    <h1 class="heading-primary heading--white">Projects</h1>
                    <p class="subheading mb--lg">
                        Our success lies in changing the game for our clients' brands. By focusing on customer outcomes, we build beautiful, engaging experiences that drive real business results.
                    </p>
                    <a href="#contact-us" class="link btn btn-bold btn-tertiary">Request a Quote</a>
                </div>
            </div>
        </section>

        <section class="section-process mb--section">
            <div class="container">
                <div class="process-headings">
                    <h2 class="heading-secondary align--text-c mb--s">Our Projects</h2>
                    <p class="subheading">
                        The success of any project hinges on the process that moves it forward.
                    </p>
                </div>

                <div class="cards grid grid--3-cols">
                    <div class="card project-card">
                        <div class="img-box mb--lg">
                            <img src="./assets/img/projects/jobboard.png" alt="" class="project-img">
                        </div>
                        <h3 class="heading-tertiary">Job Board</h3>
                        <p class="description">
                            A platform where job seekers apply for jobs
                            and recruiters hire job seekers.
                        </p>
                    </div>
                    <div class="card project-card">
                        <div class="img-box mb--lg">
                            <img src="./assets/img/projects/tms.png" alt="" class="project-img">
                        </div>
                        <h3 class="heading-tertiary">TMS</h3>
                        <p class="description">
                            Dashboard for Transport management system which includes all the functionality of logistics software.
                        </p>
                    </div>
                    <div class="card project-card">
                        <div class="img-box mb--lg">
                            <img src="./assets/img/projects/socialsaviour.png" alt="" class="project-img">
                        </div>
                        <h3 class="heading-tertiary">Social Saviour</h3>
                        <p class="description">
                            Web application which funds for deserving necessities using a crowdfunding platform.
                        </p>
                    </div>
                    <div class="card project-card">
                        <div class="img-box mb--lg">
                            <img src="./assets/img/projects/Hairport.png" alt="" class="project-img">
                        </div>
                        <h3 class="heading-tertiary">Hair Port</h3>
                        <p class="description">
                            Website for saloon which includes funtionality as online booking and appointment.
                        </p>
                    </div>
                    <div class="card project-card">
                        <div class="img-box mb--lg">
                            <img src="./assets/img/projects/rapidescort.png" alt="" class="project-img">
                        </div>
                        <h3 class="heading-tertiary">Rapid Escort</h3>
                        <p class="description">
                            Website of pathology lab includes functions as online registration of home sampling.
                        </p>
                    </div>
                    <div class="card project-card">
                        <div class="img-box mb--lg">
                            <img src="./assets/img/projects/bagsventure.png" alt="" class="project-img">
                        </div>
                        <h3 class="heading-tertiary">Bags Venture</h3>
                        <p class="description">
                            A complete Ecommerce store for Bags.
                        </p>
                    </div>
                </div>

            </div>

        </section>


        <?php
        include './layouts/contact-form.php'
        ?>

        <?php
        include './layouts/message.php'
        ?>

        <?php
        @include 'layouts/footer.php'
        ?>

    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>
