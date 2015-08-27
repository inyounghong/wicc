<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Women in Computing at Cornell</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    
    
    <link rel="shortcut icon" href="img/icon.png" />
    <link rel="shortcut icon" href="http://wicc.acm.org/img/wicc-logo.jpg">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,700,900,800' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
      // Cover slider function
      $(function () {
        $(".rslides").responsiveSlides({
          auto: true,
          timeout: 4000,  
          pager: true,
          speed: 800,
        });
      });
    </script>
  </head>
  <body>
    <?php include "includes/nav.html" ?>
    
    <div class="cover">
      <ul class="rslides" id="slider2">
          <li>
            <img src="img/unpanel.jpg">
            <div class="caption">Welcome Social and Unpanel 
              <div class="desc">Spring 2015</div>
            </div>
          </li>
          <li>
            <img src="img/scavengerhunt.jpg">
            <div class="caption r">WICC Scavenger Hunt
              <div class="desc">Spring 2015</div>
            </div>
          </li>
          <li>
            <img src="img/cover.jpg">
            <div class="caption">LearnCS-H Open House
              <div class="desc">Fall 2014</div>
            </div>
          </li>
          <li>
            <img src="img/opensourceworkshop.jpg">
            <div class="caption">Open Source Workshop
              <div class="desc">Fall 2014</div>
            </div>
          </li>

      </ul>
    </div>


    <br>
    <!-- Start Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-6">
          <div class="video">
            <iframe width="100%" height="400" src="//www.youtube.com/embed/5ctRcy_kL1Q?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-sm-6">
          <h1 class="l">Mission</h1>
          <p>Our goal is to bring together the women in computing at Cornell. We seek not only to encourage prospective women and to expand their opportunities, but also to provide support to existing women in computing fields so that they can carve their own paths in CS.</p>
        </div>
      </div>
    </div>

    <div class="g">
      <div class="content">
        <h1>Upcoming Events</h1>
        <br>
          
          
        <!-- Event -->
        <!--<div class="event">
          <div class="date">
            <div class="month">MONTH</div>
            <div class="day">DAY</div>
          </div>
          <div class="info">
            <h2>EVENT NAME</h2>
            <p>DAY, MONTH DAY</p>
            <p>TIME - TIME</p>
            <p>PLACE</p>
            <p><a href="EVENTLINK">RSVP</a></p>
          </div>
        </div>-->
          
        
        
        Check back next semester!


      
        
      </div>
    </div>

    <div class="container">

      <h1>Our Goals</h1>
      <br>
      <div class="col-sm-4 c goals">
        <div class="image"><img src="img/career.png" style="bottom:-15px"></div>
        <h3>Career Development</h3>
        <p>Expanding opportunities and providing career support by publicizing opportunities for women, hosting alumni women panels, tech talks and networking events with companies.</p>
      </div>

      <div class="col-sm-4 c goals">
        <div class="image"><img src="img/outreach2.png"></div>
        <h3>Outreach</h3>
        <p>Extending our influence by inspiring young girls to pursue computing fields, supporting scholarships for the Grace Hopper Conference, and running weekly Computer Science workshops (LearnCS) held at Cornell for high school and middle school girls in the Ithaca area.</p>
      </div>

      <div class="col-sm-4 c goals">
        <div class="image"><img src="img/community.png" style="bottom:-5px"></div>
        <h3>Community Building</h3>
        <p>Building a sense of community among women in computing fields at Cornell through social networking events, informative and inspirational internship panels, and a mentorship program.</p>
      </div>

    </div> <!-- End content -->

    <?php include 'includes/footer.html' ?>

  </div>
  </body>
</html>
