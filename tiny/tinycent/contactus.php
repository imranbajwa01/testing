<?php 
session_start();
include("connection.php");
$user_id=$_SESSION['userid'];
if(isset($_POST["send_msg"])){
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$description=$_POST["message"];
	$sql = mysql_query("INSERT INTO  ContactUs (userid,email,subject,description) VALUES('$user_id','$email','$subject','$description')"); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png" />

    <title>TinyCent</title>

    <!-- Bootstrap core CSS -->
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
   body{
    margin-top: 100px;
   }
   .footer{
    margin-bottom: 0px;
    text-align: center;
	padding-top: 500px;
   }
   .footercss{
   background-color:#ddd;
   padding-bottom:0px;
   height:60px;
   padding-top:30px;
 
   }
   .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }

    </style>
	 
  </head>



  <body role="document">
 
    <?php include("includes/header2.php"); ?>

    <div class="container theme-showcase" role="main">




    

     <div class="row">
	 
     <div class="col-md-3">
	  
     </div>
	 
<div class="col-md-8">
   <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-envelope"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-copy"></i></span>
                            <div class="col-md-8">
                                <input id="subject" name="subject" type="text" placeholder="Enter Your Subject" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="glyphicon glyphicon-duplicate"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control2" id="message" name="message" placeholder="Please Enter The Message You Want To Share With Us We Will Get Back To You 24-48 Hours  " rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="send_msg" class="btn btn-danger btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
  
  </div>
  
  
  </div>
  
    </div> <!-- /container -->
   
    <div class="footer">

    <div class="footercss"> <strong>All right reserved |</strong> <strong> © Copyrights 2015 | Tinycent</strong></div>

   </div>
  </body> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
