<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Digitally Elite | About us | Web Design | Web Development | Digital Marketing</title>
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
          <h1 class="heading-primary heading--white">About us</h1>
          <p class="subheading mb--lg">
            Digitally Elite is an ideal digital partner for all kinds of businesses who wish to mark an online presence.
          </p>
          <a href="#contact-us" class="link btn btn-bold btn-tertiary">Request a Quote</a>
        </div>
      </div>
    </section>
    <section class="section-about mb--section">
      <div class="container grid grid--2-cols grid--center-v">
        <div class="about-img-box">
          <img class="about-img" src="assets/img/about.png" alt="Digitally Elite about illustration" />
        </div>
        <div class="about-text-box">
          <h2 class="heading-secondary mb--md">About Us</h2>
          <p class="description mb--s">
            Digitally Elite is an ideal digital partner for all kinds of
            businesses who wish to mark an online presence.
          </p>
          <p class="description mb--s">
            We are a growing Digital Solutions Company with a vision to offer
            best of the industry digital services and support for businesses
            who want a perfect blend of cost and efficiency.
          </p>
          <p class="description mb--s">
            Our values guide us in creating a better experience for our
            clients and maintain relationships for the long run or for that
            matter, anyone who comes into contact with us.
          </p>
          <p class="description mb--lg">
            <strong>CLIENT SATISFACTION is our prime goal.</strong>
          </p>
          <a href="./services" class="link btn btn-bold btn-primary">Our Services</a>
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
