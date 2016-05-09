<!doctype html>
<html class="no-js" lang="en">
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
    <script src="js/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include "includes/nav.html" ?>

      <div class="container" id="joinus">
        <h2>Join Us</h2>

        <div class="row wrap narrow">
          <div class="col-sm-6 c">

            <h3>Students</h3>
            <form method="post" action="php/subscribe.php">
              <input type="text" class="listserve" name="netid" id="netid" placeholder="Cornell NetID">
              <a id="submit" class="button teal">Join Our Listserve</a>
              <div id="error"></div>
            </form>
          </div>

          <div class="col-sm-6 c">
            <h3>Corporate</h3>
            <p>Contact us at <br><a href="mailto:wicc@cornell.edu">wicc@cornell.edu</a></p>
            <a href="https://docs.google.com/a/cornell.edu/forms/d/1znGOx1z6wn3O-ZrnrIKAOTvnyaJ5qRvlPoC3QSxazp0/viewform" class="button teal">Host an event</a>
          </div>
        </div>
        <br>

        <div class="row wrap narrow">
          <div class="col-sm-6 c">
            <h3>Alumni</h3>
            <p>Join our alumni network!</p>
            <a href="#" class="button teal">Coming Soon</a>
          </div>

          <div class="col-sm-6 c">
            <h3>Mentorship</h3>
            <p>Participate in our mentorship program as a mentor or a mentee!</p>
            <a href="http://localhost/wicc/mentorship.php" class="button teal">Learn More</a>
          </div>
        </div>

        <br>

        <div class="c">
            <h3>Connect with WICC</h3>

            <div class="media-buttons">
              <a href="https://www.facebook.com/CornellWomenInComputing"><img src="img/social_media/facebook_square.png"></a>
              <a href="https://www.linkedin.com/groups/8480565"><img src="img/social_media/linkedin_square.png"></a>
              <a href="https://www.instagram.com/wiccornell/"><img src="img/social_media/instagram_square.png"></a>
            </div>
          </div>
        </div>
        <br><br>

      </div>

    <?php include 'includes/footer.html' ?>

    <script src="js/jquery.js"></script>

  </body>
</html>

