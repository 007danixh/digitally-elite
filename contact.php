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
     <section class="section-contact-hero hero-innerpage mb--section">
       <div class="container align--text-c">
         <div class="contact-text-box">
           <h1 class="heading-primary heading--white">Get in Touch</h1>
           <p class="subheading mb--lg">
             Let’s dicuss your project.
           </p>
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
