<?php 
session_start();
require_once("includes/head.php"); ?>
<?php 
//link to database
include('includes/config.php'); 
?>
<body>
    <?php include("includes/nav.php"); ?>

    <div class="menu-section-others">   
        <div class="menu-settings-others">
            <button class="openbtn" onclick="openNav()">&#9776;</button>
            <a href="index.php" class="margin-right:50px">
                <img src="images/logoimg.png" class="main-logo" alt="logo"></a> 
        </div>
    </div>

    <!-- loader icon -->
    <div id="cover-spin"></div>

    <!-- shedule section -->
    <div class="schedule">
           <div class="schedule-title">
               <h3>Routes</h3>
           </div>
           <div class="schedule-text">
               <h4><b>Abuja(Utako) ==> Port Harcourt</b> </h4>
                <span>7:30am (Toyota Sienna)</span>
               
           </div>
           <div class="schedule-text">
               <h4><b>Port Harcourt ==> Abuja(Utako)</b></h4>
                <span>7:30am (Toyota Sienna)</span>
               
           </div>
    </div>
    <!-- shedule section ends --> 


    
<?php include("includes/footerjslinks.php"); ?>

