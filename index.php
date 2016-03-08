<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Women in Computing at Cornell</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    
    <link rel="shortcut icon" href="img/wicc-logo.jpg" />
    <link rel="shortcut icon" href="http://wicc.acm.org/img/wicc-logo.jpg">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,700,900,800' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/subscribe_ajax.js"></script>
    <script>

    // Smooth scrolling
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    // Banner resizing

    $(document).ready(function(){

      resizeBanner();
      
      

      $(window).scroll(function(){
        fixMenu();
      })

      $(window).resize(function(){
        resizeBanner();
      });
    });

    function resizeBanner(){
      $(".banner").height(window.innerHeight - 60);
    }

    function fixMenu(){
      if ($(window).scrollTop() + 60 > window.innerHeight){
        $(".navbar").css("position", "fixed");
        $(".navbar").css("top", 0);
        $("h2.top").css("margin-top", 80);
      } else{
        $(".navbar").css("position", "relative");
        $(".navbar").css("top", 0);
        $("h2.top").css("margin-top", 20);
      }
    }
    
    </script>
  </head>
  <body>
    
    <div class="banner">
      <img class="bg" src="img/banner.jpg">

      <div class="over">
        <h1>Women in Computing at Cornell</h1>
        <a class="button" href="#joinus">Join</a>
      </div>
    </div>

    <?php include "includes/nav.html" ?>


    <br>
    <!-- Start Content -->
    <div class="container">

      <h2 class="top">Mission</h2>
      <p class="sm wrap rfont">Our goal is to bring together the women in computing at Cornell. We seek not only to encourage prospective women and to expand their opportunities, but also to provide support to existing women in computing fields so that they can carve their own paths in CS.</p>

      <div class="row wrap medium">
        <div class="col-sm-4 c goals">
          <div class="image"><img src="img/icons/career2.png" style="bottom:-10px"></div>
          <h3>Career Development</h3>
          <a href="#">Alumni Network</a>
          <a href="#">Tech Talks</a>
          <a href="#">Networking Events</a>
        </div>

        <div class="col-sm-4 c goals">
          <div class="image"><img src="img/icons/outreach2.png"></div>
          <h3>Outreach</h3>
          <a href="#">LearnCS</a>
          <a href="#">Grace Hopper</a>
          <a href="#">Faculty Relations</a>
        </div>

        <div class="col-sm-4 c goals">
          <div class="image"><img src="img/icons/community2.png" style="bottom:-5px"></div>
          <h3>Community Building</h3>
          <a href="#">Mentorship Program</a>
          <a href="#">Community Discussions</a>
          <a href="#">Panels</a>
        </div>
      </div>
    </div>

    
    <div class="g">
      <div class="container sub" id="events">
        <h2>Upcoming Events</h2>
        <br>
          
        <!-- Event template-->
        <!--
        <div class="event">
          <div class="date">
            <div class="month">MONTH</div>
            <div class="day">DAY</div>
          </div>
          <div class="info">
            <h3>EVENT NAME</h3>
            <p>DAY, MONTH DAY</p>
            <p>TIME - TIME</p>
            <p>PLACE</p>
            <p><a href="EVENTLINK">RSVP</a></p>
          </div>
        </div>
        -->


        
        <iframe src="https://calendar.google.com/calendar/embed?src=cornell.edu_98tsboucmi53v2rlt7kdj43vkc%40group.calendar.google.com&ctz=America/New_York&mode=WEEK&showTabs=0&showPrint=0" style="border: 0" width="700" height="450" frameborder="0" scrolling="no"></iframe>

        <br><br><br>
        <a href="calendar.php" class="button">Full Calendar</a>
        <br><br>
      </div>
    </div> <!-- End content -->

    <div class="container" id="joinus">
      <h2>Join Us</h2>

      <div class="row wrap narrow">
        <div class="col-sm-4 c">





          <h3>Students</h3>
          <form method="post" action="php/subscribe.php">
            <input type="text" class="listserve" name="netid" id="netid" placeholder="Cornell NetID">
            <a id="submit" class="button teal">Join Our Listserve</a>
            <div id="error"></div>
          </form>

          
        </div>
        <div class="col-sm-4 c">
          <h3>Connect with WICC</h3>

          <div class="media-buttons">
            <a href="https://www.facebook.com/CornellWomenInComputing"><img src="img/social_media/facebook_square.png"></a>
            <a href="https://www.linkedin.com/groups/8480565"><img src="img/social_media/linkedin_square.png"></a>
            <a href="https://www.instagram.com/wiccornell/"><img src="img/social_media/instagram_square.png"></a>
          </div>
        </div>
        <div class="col-sm-4 c">
          <h3>Corporate</h3>
          <p>Contact us at <br><a href="mailto:wicc@cornell.edu">wicc@cornell.edu</a></p>
          <a href="https://docs.google.com/a/cornell.edu/forms/d/1znGOx1z6wn3O-ZrnrIKAOTvnyaJ5qRvlPoC3QSxazp0/viewform" class="button teal">Host an event</a>
        </div>
      </div>

    </div>

    <div class="g">
      <div class="container">
        <h2>Why is Wicc's mission important?</h2>
      </div>
    </div>

    <div class="bottom_banner">
      <img src="img/pictures.jpg">
    </div>


    <?php include 'includes/footer.html' ?>

  </div>
  </body>
</html>