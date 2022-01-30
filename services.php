<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Digitally Elite | Contact us | Web Design | Web Development | Digital Marketing</title>
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
    <section class="section-service-hero hero-innerpage mb-section--md">
      <div class="container align--text-c">
        <div class="service-text-box">
          <h1 class="heading-primary heading--white">Our Services</h1>
          <p class="subheading mb--lg">
            We deliver creative solutions for your Design, Development and
            Marketing needs.
          </p>
          <a href="#contact-us" class="link btn btn-bold btn-tertiary">Request a Quote</a>
        </div>
      </div>
    </section>

    <section class="section-services mb--section">
      <div class="container">
        <div class="service-headings">
          <h2 class="heading-secondary align--text-c mb--s">
            Services We Offer
          </h2>
          <p class="subheading">We offer a wide range of services</p>
        </div>
        <div class="service-cards grid grid--4-cols">
          <div class="card service-card">
            <div class="icon-box">
              <i class="fab fa-sketch"></i>
            </div>
            <h3 class="heading-tertiary">UI/UX Design</h3>
            <p class="description">
              Top Notch Designs for Landing Page, Website, Web App, Mobile App
            </p>
          </div>
          <div class="card service-card">
            <div class="icon-box">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3 class="heading-tertiary">Web Development</h3>
            <p class="description">
              One Stop Solution for Custom Websites , Wordpress, and Webflow
              Development
            </p>
          </div>
          <div class="card service-card">
            <div class="icon-box">
              <i class="fas fa-bullhorn"></i>
            </div>
            <h3 class="heading-tertiary">Digital Marketing</h3>
            <p class="description">
              Effective Search Engine Optimization, Social Media Marketing,
              and Email Marketing
            </p>
          </div>
          <div class="card service-card">
            <div class="icon-box">
              <i class="fas fa-bezier-curve"></i>
            </div>
            <h3 class="heading-tertiary">Graphic Designing</h3>
            <p class="description">
              Creative Designs for Logo, Brochure, Social Media Posts, Stories
              & many more
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
