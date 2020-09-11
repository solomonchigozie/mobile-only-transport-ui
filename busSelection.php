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
            <a href="#" class="margin-right:50px">
                <img src="images/logoimg.png" class="main-logo" alt="logo"></a> 
        </div>
    </div>

    <!-- loader icon -->
    <div id="cover-spin"></div>

    <!-- bus section -->
    <div class="bus-selection-box">
        <form action="seatSelection.php" method="POST">
            <div class="bus-selection-tags-container">
                <span class="bus-selection-tags">Toyota Sienna</span>
            </div>

            <div class="bus-selection-image"><!-- bus image begins-->
                <div><img src="images/pd_bus.jpg" alt="bus image" class="bus-image"></div>
                <div>
                    <span class="bus-selection-amount">N12,000</span>
                </div>
            </div><!-- bus image ends-->

            <div class="bus-details-tag">
                <div><span><i class="fa fa-clock"></i> 6:30am</span> <span>6 seats(s) Available</span></div>
                <div><input type="submit" value="View Seats" class="btn btn-danger" onclick="$('#cover-spin').show(0)"></div>
            </div>
        </form>
    </div>
    <!-- bus section ends --> 

    <!-- bus section -->
    <div class="bus-selection-box">
        <form action="seatSelection.php" method="POST">
            <div class="bus-selection-tags-container">
                <span class="bus-selection-tags">Toyota Sienna</span>
            </div>

            <div class="bus-selection-image"><!-- bus image begins-->
                <div><img src="images/pd_bus.jpg" alt="bus image" class="bus-image"></div>
                <div>
                    <span class="bus-selection-amount">N12,000</span>
                </div>
            </div><!-- bus image ends-->

            <div class="bus-details-tag">
                <div><span><i class="fa fa-clock"></i> 6:30am</span> <span>6 seats(s) Available</span></div>
                <div><input type="submit" value="View Seats" class="btn btn-danger" onclick="$('#cover-spin').show(0)"></div>
            </div>
        </form>
    </div>
    <!-- bus section ends --> 

   <!-- bus section -->
   <div class="bus-selection-box">
        <form action="seatSelection.php" method="POST">
            <div class="bus-selection-tags-container">
                <span class="bus-selection-tags">Toyota Sienna</span>
            </div>

            <div class="bus-selection-image"><!-- bus image begins-->
                <div><img src="images/pd_bus.jpg" alt="bus image" class="bus-image"></div>
                <div>
                    <span class="bus-selection-amount">N12,000</span>
                </div>
            </div><!-- bus image ends-->

            <div class="bus-details-tag">
                <div><span><i class="fa fa-clock"></i> 6:30am</span> <span>6 seats(s) Available</span></div>
                <div><input type="submit" value="View Seats" class="btn btn-danger" onclick="$('#cover-spin').show(0)"></div>
            </div>
        </form>
    </div>
    <!-- bus section ends --> 


    
<?php include("includes/footerjslinks.php"); ?>

