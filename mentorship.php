<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Women in Computing at Cornell</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="img/icon.png" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,700,900,800' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
      $("#mentor").click(function(){
        $("#mentee").removeClass("selected");
        $("#mentor").addClass("selected");
        $("#mentor-info").show();
        $("#mentee-info").hide();
      });
      $("#mentee").click(function(){
        $("#mentee").addClass("selected");
        $("#mentor").removeClass("selected");
        $("#mentee-info").show();
        $("#mentor-info").hide();
      });
    })
      
    </script>
  </head>
  <body>
    <?php include 'includes/nav.html' ?>
    
    <!-- Intro container -->
    <div class="container" style="padding-bottom: 10">
      <div class="sm wrap">
        <h2>Mentorship</h2>

        <p class="rfont">Our mentorship program strives to encourage and aid women who are pursuing studies or future employment 
      in computing by connecting female undergraduates with more experienced upperclassmen and alumni 
      mentors. The role of the mentor is to cultivate and enhance their mentees' interest in computer 
      science.</p>

        <p class="bfont">Mentors and mentees will be matched primarily based on academic interests. Mentees can also 
      request mentors, and we will do our best to honor these requests.</p>

        <div id="mentor_buttons">
          <h2 class="alt bfont selected" id="mentor">Mentor</h2>
          <h2 class="alt bfont" id="mentee">Mentee</h2>
        </div>
      </div>
    </div>

    <!-- Gray container -->
    <div class="g">
      <div class="container" style="padding-top: 20px">

        <!-- MENTOR INFO -->
        <div id="mentor-info">
          <div class="row wrap medium">
            <div class="col-sm-8 left">
              <h2 class="alt">Become a Mentor</h2>
              <p class="rfont">As a mentor you are expected to hold conversations with your mentee monthly, help your mentee 
            establish meaningful connections, give her advice on course selection, or otherwise. Any 
            motivated undergraduates, graduate students, and grads majoring in or working CS or related 
            technical fields can sign-up as a mentor.</p>
            </div>

            <div class="col-sm-4 right tright">
              <br><br>
              <div class="circle">
                <img src="img/mentor.jpg">
              </div>
            </div>
          </div>

          <div class="row wrap medium bfont">
            
              <div class="col-sm-6 left">
                <h3>Undergraduate Mentors</h3>

                <ul>
                  <li><b>Undergraduates</b> must be at juniors or seniors at Cornell.</li>
                  <li><b>Two one-on-one meetings</b>: Meetings could be in person for lunch, coffee, etc. and should be at least 30 minutes long.</li>
                  <li><b>One general meeting</b>, which could include: outings with other mentor pairings, WICC social events with both the mentor and mentee attending, or additional one-on-one meetings.</li>
                </ul>

              </div>

              <div class="col-sm-6 right">
                <h3>Virtual Mentors (Alumni)</h3>
                <ul>
                  <li><b>Alumni</b> must have been an undergraduate or graduate at Cornell.</li>
                  <li><b>Two one-on-one "virtual" meetings</b>: Meetings could include video calls, phone calls, etc. and should be at least 30 minutes long.</li>
                </ul>
              </div>
            
              
          </div>
          <div class="c medium wrap">
            <a class="teal button" href="mentors.php">Sign Up</a>
          </div>
        </div>

        <!-- MENTEE INFORMATION -->
        <div id="mentee-info">
          <div class="row wrap medium">
            <div class="col-sm-4 right">
              <br>
              <div class="circle">
                <img src="img/mentee.jpg">
              </div>
            </div>

            <div class="col-sm-8 left">
              <h2 class="alt">Get a Mentor</h2>
              <p class="rfont">Interested in being mentored? Sign-up to be matched with an experienced upperclassmen or alumni mentor.</p>

              <a class="button teal" href="https://docs.google.com/a/cornell.edu/forms/d/1HpyIRIO07kNek841e-ME1oUoJP3auwsxyrZFaTLjvXY/viewform">Sign-Up</a>

            </div>

              
          </div>
        </div>

      </div>
    </div>

    <!-- Director Container -->
    <div class="container c">
      <h3>Mentorship Directors</h3>
      <div class="director">
        <div class="circle circle_sm">
          <img src="img/board/HannaRamsden.jpg">
        </div>
        <div class="name">Hanna Ramsden</div>
        <div class="netid">hnr6</div>
      </div>
      
      <div class="director">
        <div class="circle circle_sm">
          <img src="img/board/MeganTeeKing.jpg">
        </div>
        <div class="name">Megan TeeKing</div>
        <div class="netid">mat333</div>
      </div>


    </div>

    
    <?php include 'includes/footer.html' ?>

  </body>
</html>