 <?php
  session_start();
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Digitally Elite | Web Design | Web Development | Digital Marketing</title>
   <meta name="description" content="Digitally Elite is an ideal digital partner for all kinds of
             businesses who wish to mark an online presence.">
   <meta name="keywords" content="Web Design, Web Developement, Digital Marketing">

   <?php
    @include('./layouts/links.php')
    ?>

 </head>

 <body>

   <?php
    @include './layouts/navigation.php'
    ?>
   <script src="assets/js/script.js"></script>
   <main>

     <section class="section-hero">
       <div id="particles-js" class="hero-animation"></div>
       <div class="container mb--section">
         <div class="grid grid--2-cols grid--center-v">
           <div class="hero-text-box">
             <h1 class="heading-primary">
               Grow your business with our digital expertise
             </h1>
             <p class="hero-description mb--lg">
               We deliver creative solutions for your Design, Development and
               Marketing needs.
             </p>
             <a href="#contact-us" class="link btn btn-bold btn-primary mr--md hero-btn">Contact Us</a>
             <!-- <a href="#" class="link btn btn-bold btn-secondary">Our Work</a> -->

           </div>

           <div class="hero-img-box">
             <img class="hero-img" src="assets/img/hero.png" alt="Growing Business Illustration" />
           </div>
         </div>
       </div>

     </section>

     <!-- Services -->
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

     <!-- About us section -->
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
           <a href="./about" class="link btn btn-bold btn-secondary">Learn More</a>
         </div>
       </div>
     </section>


     <!-- Process section -->
     <section class="section-process mb--section">
       <div id="particles-js2" class="process-animation"></div>
       <div class="container">
         <div class="process-headings">
           <h2 class="heading-secondary align--text-c mb--s">Our Process</h2>
           <p class="subheading">
             The success of any project hinges on the process that moves it forward.
           </p>
         </div>

         <div class="cards grid grid--3-cols grid--2-rows">
           <div class="card process-card">
             <span class="step-number">1</span>
             <h3 class="heading-tertiary heading-uppercase">Discovery</h3>
             <p class="description">
               Our team will perform research and discovery to plan and inform
               the phases of the project.
             </p>
           </div>
           <div class="card process-card">
             <span class="step-number">2</span>
             <h3 class="heading-tertiary heading-uppercase">Wireframing</h3>
             <p class="description">
               We will create wireframes which plan out the structure and user
               flow of your website or App.
             </p>
           </div>
           <div class="card process-card">
             <span class="step-number">3</span>
             <h3 class="heading-tertiary heading-uppercase">Design</h3>
             <p class="description">
               In a collaborative process from end-to-end, the design of the
               website is created from scratch in Figma, Adobe XD or Photoshop.
             </p>
           </div>
           <div class="card process-card">
             <span class="step-number">4</span>
             <h3 class="heading-tertiary heading-uppercase">Development</h3>
             <p class="description">
               The final designs from the design phase are used to develop a
               web version of the site on our staging server.
             </p>
           </div>
           <div class="card process-card">
             <span class="step-number">5</span>
             <h3 class="heading-tertiary heading-uppercase">Testing</h3>
             <p class="description">
               The website undergoes a full Q&A and interoperability testing
               procedure, ensuring optimal performance.
             </p>
           </div>
           <div class="card process-card">
             <span class="step-number">6</span>
             <h3 class="heading-tertiary heading-uppercase">Marketing</h3>
             <p class="description">
               Our focus is to establish a connection with the target audience
               on the right time through appropriate channel.
             </p>
           </div>
         </div>
       </div>
     </section>

     <!-- Projects Section -->
     <section class="section-process mb--section">
       <div class="container align--text-c">
         <div class="process-headings">
           <h2 class="heading-secondary align--text-c mb--s">Our Projects</h2>
           <p class="subheading">
             The success of any project hinges on the process that moves it forward.
           </p>
         </div>

         <div class="cards grid grid--3-cols mb--lg">
          <div class="card project-card">
             <div class="img-box mb--lg">
               <img src="./assets/img/neversleep.png" alt="" class="project-img">
             </div>
          <a href="https://www.neversleepskashmir.com">  <h3 class="heading-tertiary">Never Sleeps Tour & Travel</h3> </a> 
             <p class="description">Kashmir based tour and travel company specializes in creating customized travel experiences.</p>
           </div>
           <div class="card project-card">
             <div class="img-box mb--lg">
               <img src="./assets/img/seperhr.png" alt="" class="project-img">
             </div>
            <a href="https://seperhr.com"> <h3 class="heading-tertiary">Seperhr</h3></a>
             <p class="description">Business support firms operating globally by maintaining our uncompromising principles and create value for all our stakeholders.</p>
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
           <!-- <div class="card project-card">
             <div class="img-box mb--lg">
               <img src="./assets/img/projects/tms.png" alt="" class="project-img">
             </div>
             <h3 class="heading-tertiary">TMS</h3>
             <p class="description">
               Dashboard for Transport management system which includes all the functionality of logistics software.
             </p>
           </div> -->
           <!-- <div class="card project-card">
             <div class="img-box mb--lg">
               <img src="./assets/img/projects/bagsventure.png" alt="" class="project-img">
             </div>
             <h3 class="heading-tertiary">Bags Venture</h3>
             <p class="description">
               A complete Ecommerce store for Bags.
             </p>
           </div> -->
         </div>

         <a type="submit" href="./projects.php" class="link btn btn-bold btn-primary ">
           View All
         </a>
       </div>


     </section>

     <?php
      include './layouts/contact-form.php'
      ?>

     <?php
      include './layouts/message.php'
      ?>

     <!-- Footer included -->
     <?php
      include './layouts/footer.php'
      ?>
   </main>

   <script src="assets/js/particles.js"></script>
   <script src="assets/js/app.js"></script>


 </body>

 </html>
