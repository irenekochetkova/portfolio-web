<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, initial-scale=1.0">
  <meta name="description" content="This is portfolio of front end web developer with Ruby-on-Rails, JavaScript, HTML, CSS, SASS, GIT, VeuJS and SQL skills.">

  <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/queries.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700"> 
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600,700" rel="stylesheet">

  <title>Irina Kochetkova</title>

</head>
<body>
  <header>    
    <nav>
      <div class="row">        
        <img src="img/logo-3.png" alt="Kochetkova" class="logo">
        <img src="img/logo-black-3.png" alt="Kochetkova" class="logo-black">        
        <ul class="main-nav js--main-nav">
          <li ><a class="font-dark" href="#about">About</a></li>
          <li><a class="font-dark" href="#works">Portfolio</a></li>          
          <li><a class="font-dark" href="#contact">Contact</a></li>
        </ul>
        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>      
      </div>
    </nav>
    
    <div class="row" id="about"> 
      <div class="col span-1-of-2 box img-center text-box">
        <img src="img/photo-11.jpg" alt="Name" class="photo ">
      </div>
      <div class=" col text-box span-1-of-2 box ">

        <h3> I`m Irina &mdash; a Front End Developer</h3>
        <i class="ion-arrow-right-b icon-small-about" ></i>
        <h6>I am a web developer who enjoys building web apps, is continuously learning, and is a dedicated and energetic person. One of my principles is to constantly strive to improve my own work and benefit the company as a whole.</h6>

        <h4 class="">Work experience</h4>
        <ul class="list u-margin-bottom-middle">
          <li class="font-white item-list">JavaScript, VueJS, Ruby on Rails, HTML, CSS, SASS, jQuery and Git;</li>
          <li class="font-white item-list">Creating responsive web applications.</li>
        </ul>

        <a class="btn btn-full js--scroll-to-work" href="#works">My Work</a>
        <a class="btn btn-ghost js--scroll-to-contact" href="#contact">Contact Me</a>
      </div>
    </div>    
  </header>

  <section class=" js--scroll-work js--section-portfolio u-padding-bottom u-background " id="works">
    <div class="row">
      <h2>My projects</h2>
    </div>
  </section>

  <section class="section-portfolio u-background">
    <div class="row u-background ">
      <div class="col span-1-of-2 box u-background">
        <img src="img/homemade-2.png" alt="Name" class="img-work">
      </div>
    
      <div class="col span-1-of-2  box ">
        <div class="title inside u-margin-bottom-small"> 
        <i class="ion-ios-cart icon-small"></i>
        <h3 class="text-box-work ">Homemade Food</h3>
        </div> 
        <p class="u-margin-bottom-small">The main idea of this website is to unite chefs and customers. The chefs sell their own homemade food and customers order it. If the users want to sell their own homemade food, they should create an account as a chef and choose the option "chef". If the users want to order homemade food, they choose the option “customer".
        </p>

        <h5 >Languages and Technologies:</h5>
        <p class="font u-margin-bottom-small"> Ruby on Rails, VueJs, JavaScript, HTML, CSS, Bootstrap and jQuery</p>
        <a class="btn btn-ghost js--scroll-to-homemade" id="show-2" href="#details">Learn more</a>         
        <a href="https://github.com/irenekochetkova/homemade_food_app" ><i class="ion-social-github-outline  icon-git"></i></a>
      </div>
    </div>
    <div >
      <i class="ion-ios-arrow-down icon-big u-center-text" id="show"></i>
    </div>
  </section>

  <section class="section-details-food js--scroll-homemade" hidden id="ditails">
    <div class="row u-margin-bottom-big ">
      <h2>Project Homemade food</h2>
    </div>
    <div class="row" >
      <div class="title inside "> 
        <i class="ion-home icon-small"></i>
        <h3 class="text-box-work ">Home page about</h3>
      </div>
    </div>
    <div class="row centered-img">
      <div class=" box ">
        <img src="img/home-page.gif" alt="page-home" class="img-details-big">
      </div>
    </div>
      
    <div class="row">
      <div class="box box-project  ">
        <ul>
          <li>Every user can see the Homepage. This page gives visitors an immediate sense of the type of  service that is provided by the company.</li>
          <li>The homepage also guides them to other important information throughout the internal pages of this website.</li>
          <li>In addition, users can see all photos of every chef that has an account.</li>
        </ul>
      </div> 
    </div>

    <div class="row u-border u-margin-bottom-middle"></div>

    <div class="row">
      <div class="title inside u-margin-bottom"> 
        <i class="ion-android-person icon-small"></i>
        <h3 class="text-box-work ">Authentication registration</h3>
      </div>
    </div>

    <div class="row ">
      <div class=" box ">
        <img src="img/signup-page.gif" alt="page-signup" class="img-details-big">
      </div>
      </div>
    <div class="row"> 
      <div class="box box-project">
        <ul>
          <li>The authentication is added to the app.</li>
          <li>Every visitor can create an account, edit and delete it. Also, users can change their passwords.</li>
          <li>The validation is implemented when the user is signing up or logging in.</li>
          <li>An account of the chef differs from the customer`s by the states of the SideBar Navigation. The chef has the right to create a new dish, and the customer has the right to see pages with their orders and shopping cart.</li>
        </ul>       
      </div>
    </div>
      
    

    <div class="row u-border u-margin-bottom-middle"></div>

    <div class="row">
      <div class="title inside u-margin-bottom"> 
        <i class="ion-coffee icon-small"></i>
        <h3 class="text-box-work ">User logged in as a chef</h3>
      </div>
    </div>

    <div class="row ">
      <div class="box ">
        <img src="img/chef-2.gif" alt="page-home" class="img-details-big">
      </div> 
    </div>
    <div class="row">
      <div class="box box-project">
        <ul>
          <li>Every logged in user can see Menu page with dishes from all chefs. 
          </li>
          <li>Every logged in user can see the Search Bar. Here users can type the name of a dish and get results of dishes sorted by name.</li>
          <li>Every logged in user can use the filter to search a dish by cuisine.</li>
          <li>Chefs can use the filter to get a list of their own dishes.</li>
          <li>Every dish includes a button with additional information about the dish.</li>
          <li>If user-chefs press this button, they can see a call to action to edit or delete their dish.</li>
          <li>User-chefs don`t have the rights to edit and delete dishes that were not created by them.</li>
          <li>The selected button “edit” leads user-chefs to the page where they can update their own dishes.</li>
          <li>The validation is implemented when the user updates thier dishes.
          </li>
        </ul>
      </div> 
    </div>

    <div class="row u-border u-margin-bottom-middle"></div>

    <div class="row">
      <div class="title inside u-margin-bottom"> 
        <i class="ion-android-restaurant icon-small"></i>
        <h3 class="text-box-work ">User Logged in as a customer</h3>
      </div>
    </div>

    <div class="row ">
      <div class=" box u-center-text">
         <img src="img/customer.gif" alt="page-home" class="img-details-big">
      </div>
    </div>
    <div class="row">  
      
      <div class=" box box-project ">
        <ul>          
          <li>Every logged in user can see Menu page with dishes from all chefs. 
          </li>
          <li>User-customers can see the secondary Navigation with selected states: Search Bar, thier shopping cart and their orders.</li>
          <li>The selected state of shopping cart includes the amount of items that the user-customers added to their cart.</li>
          <li>If user-customers press the button “more info” on the dish they can see a call to action to choose quantity and add to cart.</li>
          <li>If user-customers input quantity and press the button "add to cart" it will allow to add the dish to their shopping cart.</li>
          <li>User-customers don`t have the right to edit and delete a dish.</li>          
          <li>The selected state icon shopping cart of the secondary navigation leads user-customers to the shopping cart page.This page contains information about dishes that user-customers added to the cart and a total sum of their purchases.</li>
          <li>User-customers can remove some added dish from the cart or proceed/continue shopping</li>
          <li>If user-customers choose a call to action to checkout, then it leads them to the order page with the created order of their purchases.</li>
        </ul>
       
      </div>      
    </div>
    
    <div class="row u-border u-margin-bottom-middle"></div>
    <div>
      <i class="ion-ios-arrow-up icon-big u-center-text" id="hide"></i>
    </div>
  </section>

  <section class="section-second-project u-background" >
    <div class="row">
      <div class="col span-1-of-2  box">
        <img src="img/photo-2.png" alt="Name" class="img-work">
      </div>
    
      <div class="col span-1-of-2  box ">
        <div class="title inside u-margin-bottom-small"> 
        <i class="ion-camera icon-small"></i>
        <h3 class="text-box-work ">Photo & video service</h3>
        </div> 
        <p class="u-margin-bottom-small">The main idea of this website is to provide the photography and video service to people making their life memorable.
        </p>
        <h5 >Languages and Technologies:</h5>
        <p class="font u-margin-bottom-small">VueJs, JavaScript, HTML and SASS</p>
        <a class="btn btn-ghost js--scroll-to-photo" id="show-4" href="#details-photo">Learn more</a>
        <a href="https://github.com/irenekochetkova/photo_video_service" ><i class="ion-social-github-outline  icon-git"></i></a>
      </div>
    </div>
    <div>
      <i class="ion-ios-arrow-down icon-big u-center-text" id="show-3"></i>
    </div>
  </section>

  <section class="section-details-photo js--scroll-photo" hidden id="details-photo">
    <div class="row u-margin-bottom-big ">
      <h2>Project Photography & video</h2>
    </div>
    <div class="row">
      <img src="img/photo-2.gif" alt="home-page" class="img-details-big">
    </div>

    <div>
      <i class="ion-ios-arrow-up icon-big u-center-text" id="hide-2"></i>
    </div>
  </section>

  <section class="section-contact js--scroll-contact" id="contact">
    <div class="row">
      <div class="u-margin-bottom-middle contact">
        <h3 class="u-center-text font-white ">Let`s Get In Touch!</h3>
      </div>
    
      <div class="u-center-text u-margin-bottom-middle">
        <h3>Want to get in touch with me? Want to learn more about my skills? Feel free to contact me anytime.</h3>
      </div>
    </div>

    <!-- <div class="map-box">
    <div class="map" id="map"></div> -->

      <div class="form-box" id="form">
      

        <div class="row">
          <form method="post" action="mailer-new.php" class="contact-form">
              <div class="row">
                <?php
                  if($_GET['success'] == 1) {
                    echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                  }
                  
                  if($_GET['success'] == -1) {
                    echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
                  }  
                ?>

              </div>
              

              <div class="row">

              <div class="font-dark col span-1-of-4 u-align-right">
                <label for="name" class="">Name</label>
              </div>
              <div class="col span-1-of-2">
                <input type="text" name="name" id="name" placeholder="Your name" required class="">
              </div>
            </div>
            <div class="row">
              <div class="font-dark col span-1-of-4 u-align-right">
                <label for="email" class="">Email</label>
              </div>
              <div class="col span-1-of-2">
                <input type="email" name="email" id="email" placeholder="Your email" required class="">
              </div>
            </div>
            
           
            <div class="row">
              <div class="font-dark col span-1-of-4 u-align-right">
                <label>Message</label>
              </div>
              <div class="col span-1-of-2 u-margin-bottom-middle">
                <textarea name="message" placeholder="Your message" ></textarea>
              </div>
            </div>
             <div class="row u-center-text ">
                <input class="btn btn-ghost btn-contact" type="submit" value="Send it">
            </div>
          </form>
        </div>
  </section>



  <footer>
    <div class="row u-center-text">
      <ul class="social-links">
        <li><a href="#"><i class="ion-social-facebook"></i></a></li><li><a href="#"><i class="ion-social-twitter"></i></a></li><li><a href="#"><i class="ion-social-googleplus"></i></a></li><li><a href="#"><i class="ion-social-instagram"></i></a></li>
      </ul>
    </div>
    <div class="row">
      <p>
        Copyright &copy; 2019 Portfolio created by Irina Kochetkova . All rights reserved.
      </p>
    </div>
  </footer>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js" ></script>
  <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js" ></script>
  <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js" ></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/script.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128560229-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128560229-1');
  </script>

</body>
</html>
