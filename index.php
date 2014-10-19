<?php
    require_once("scripts/func.php");     
    //connectDb(); 
    $noRe = $_GET['r'];
    if($noRe!=1){uxRedirect();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSH - RIDE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/js/bootstrap.min.js"></script>
   <!-- Load Common Files -->                                              
   <script>                                                                
       $(document).ready(function () {                                     
           $("#headerWrap").load("header.html");                           
           $("#footerWrap").load("footer.html");                           
       });                                                                 
   </script>  

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    
  </head>
  <body>
    <div id="headerWrap"></div>
    <div class="container">
       <?php //echo $_SERVER['WEBAUTH_USER'] ;   ?>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="row">
      <div class="page-header">  
        <h1>CSH - RIDE</h1>
        <p>CSH RIDE (<strong>R</strong>emote <strong>I</strong>deal <strong>D</strong>eparture <strong>E</strong>ngine) is desined to ensure all CSH members have a ride to various off campus CSH events.</p>
        <p><a class="btn btn-primary btn-large" href="selectEvent.php?type=join">View Current Events &raquo;</a></p>
      </div>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-4">
          <h2>Create An Event</h2>
          <p>It is impossible to have a ride board without an event.</p> <br>
          <p><a class="btn btn-success" href="createEvent.php">Create Event &raquo;</a></p>
        </div>
        <div class="col-xs-4">
          <h2>Do You Have A Car?</h2>
          <p>Are you driving to a CSH event? Want to take other CSH's with you? Create a ride so other members can ride along.</p>
          <p><a class="btn btn-success" href="selectEvent.php?type=create">Create Ride &raquo;</a></p>
       </div>
        <div class="col-xs-4">
          <h2>User Status</h2>
          <p>Forget what car you are in or when you are leaving? Check the user details page for information on your rides.</p>
          <p><a class="btn btn-info" href="userDetails.php">User Details &raquo;</a></p>
        </div>
      </div>
    </div>



    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <div id="footerWrap"></div>
</body>
</html>
