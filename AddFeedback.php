<?php

require_once '..\..\BusinessServicesLayer\Services\FeedbackController.php';
$controller = new FeedbackController();
if (isset($_POST['add'])) {
    $FeedbackData = $controller->add();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
        </style>
        </head>
        <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">ADD FEEDBACK</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                  
        </label>
        <div class="mdl-textfield__expandable-holder">
        <input class="mdl-textfield__input" type="text" id="search">
        <label class="mdl-textfield__label" for="search">Enter your query...</label>
        </div>
        </div>
               
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
        <img src="http://www.oesems.com/assets/ems-logo-dark-green-a84d7d47320b3fcb272a76aed2b04fee7671697876015a76f630fa15d2ffbe3b.png" class="demo-avatar">
        <!-- coding for button on the homepage -->
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>SelectSupplier</a>
        <a class="mdl-navigation__link" href="http://localhost/EMS3/ApplicationLayer/Customer/UpdateProfile.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Update Profile</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Event</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Equipment</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>Question</a>
        <a class="mdl-navigation__link" href="http://localhost/EMS3/ApplicationLayer/Customer/AddFeedback.php">"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">feedback</i>Feedback</a>
        <nav>
        </div>
      
           
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form Using HTML, CSS And PHP - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>


   <!-- coding for Add feedback form for the customer to fill  -->
    <body >
        <div class="container">
        <div class="imagebg"></div>
        <div class="row " style="margin-left: 50px">
        <div class="col-md-6 col-md-offset-3 form-container">
        <h2>Your Feedback</h2> 
        <p> Please provide your feedback below: </p>
        <form action="" method="POST">
        <div class="row">
        <div class="col-sm-12 form-group">
        <label for="supplierid"><b>Supplier ID* :</b></label>
        <input type="text" placeholder="Enter SupplierID" name="supplierid" required><br>
         
        <b>Date* : </b> <input type="date" name="insertdate"><br>

        <label>How do you rate your overall experience?</label>
        <p>
        <label class="radio-inline">
        <input type="radio" name="rating" id="radio_experience" value="bad" >
         Bad 
        </label>
        <label class="radio-inline">
        <input type="radio" name="rating" id="radio_experience" value="average" >
        Average 
        </label>
        <label class="radio-inline">
        <input type="radio" name="rating" id="radio_experience" value="good" >
        Good 
        </label>
        </p>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
        <label for="comments"> Comments: </label>
        <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
        <button type="submit" name = "add" class="btn btn-lg btn-warning btn-block" >ADD </button>
        </div>
        </div>
        </form>
        </div>
        </div>
           
        </div>     
        <script src="https://code.getmdl.io/1.3.0/material.min.js">
        </script>
      </body>
    </html>
