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
    
    <!-- Calendar -->
    <link rel='stylesheet' href='css/fullcalendar.min.css' />
    <script src='js/jquery.min.js'></script>
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.js'></script>
    <script src='js/gcal.js'></script>
    <script src='js/jquery-ui.custom.min.js'></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- FormatGoogleCalendar Javascript file -->
    <script src="./js/format-google-calendar.js"></script>
    <script>
       $(document).ready(function(){
        formatGoogleCalendar.init({
          upcomingTopN: 8
        });

        $('#calendar').fullCalendar({
            googleCalendarApiKey: 'AIzaSyDLE-WGNFn2JLI2yFyonCMVEz89v0-4ZWg',
    
            // US Holidays
            events: 'cornell.edu_98tsboucmi53v2rlt7kdj43vkc@group.calendar.google.com',
            
            loading: function(bool) {
              $('#loading').toggle(bool);
            },
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay'
            },
            displayEventEnd: true
        })
       })
      </script>
  </head>

  <body>
    <?php include 'includes/nav.html' ?>

    <div class="container">

      <div id="events-upcoming">
      </div>

      <br><br>

      <h2>Calendar</h2>
    </div>
    
    <div class="narrow">
      <div id='calendar'></div>
<!--       <div class="section" id="calendar2">
        <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=cornell.edu_98tsboucmi53v2rlt7kdj43vkc%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe></div>
      </div> -->
      
    </div>
    

    <?php include 'includes/footer.html' ?>

  </body>
</html>