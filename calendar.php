<!doctype html>
<html class="no-js" lang="en">
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
    <script src="js/modernizr.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <!-- jQuery library -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- FormatGoogleCalendar Javascript file -->
    <script src="./js/format-google-calendar.js"></script>
  </head>

  <body>
    <?php include 'includes/nav.html' ?>

    <div class="content">

      test
      <ul id="events-upcoming">
      </ul>
      <ul id="events-past">
      </ul>

      <script>
       $(document).ready(function(){

        formatGoogleCalendar.init({
          calendarUrl: 'https://www.googleapis.com/calendar/v3/calendars/milan.kacurak@gmail.com/events?key=AIzaSyCR3-ptjHE-_douJsn8o20oRwkxt-zHStY',
          past: false,
          upcoming: true,
          sameDayTimes: true,
          pastTopN: -1,
          upcomingTopN: 3,
          itemsTagName: 'li',
          upcomingSelector: '#events-upcoming',
          upcomingHeading: '<h2>Upcoming events</h2>',
          format: ['*date*', ': ', '*summary*', ' — ', '*description*', ' in ', '*location*']
        });
       })
        
      </script>

      

      <h1>Calendar</h1>

      <div class="section" id="calendar">
        <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=cornell.edu_98tsboucmi53v2rlt7kdj43vkc%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe></div>
      </div>
      
    </div>

    <?php include 'includes/footer.html' ?>
    <script src="js/jquery.js"></script>

  </body>
</html>