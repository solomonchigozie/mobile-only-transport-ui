<?php 
session_start();
require_once("includes/head.php"); ?>
<?php 
//link to database
include('includes/config.php'); 
?>
<body>
    <?php include("includes/nav.php"); ?>
    
    <div class="menu-section-booking">   
        <div class="menu-settings-booking">
            <button class="openbtn" onclick="openNav()">&#9776;</button>
            <a href="index.php" class="margin-right:50px">
                <img src="images/logoimg.png" class="main-logo" alt="logo"></a> 
        </div>

            <div class="tab-slider--nav switch">
                <ul class="tab-slider--tabs">
                    <li class="tab-slider--trigger active" rel="tab1">One Way</li>
                    <li class="tab-slider--trigger" rel="tab2">Round Trip</li>
                </ul>
            </div>
    </div>

    <div id="cover-spin"></div>
	
            <div class="booking-section"><!--booking section begins-->
                <form class="form-style-transport" action="busSelection.php" method="Post">
                    <label for="from">From : </label>
                    <input type="text" name="field1" placeholder="Travelling from" />
                    <label for="to">To : </label>
                    <input type="email" name="field2" placeholder="Travelling to" />
                    <label for="adult">Adult (18+)</label>
                    <input type="url" name="field3" placeholder="5" />

                <div class="tab-slider--container">
                        <div id="tab1" class="tab-slider--body">
                                
                            <label for="adult">Departure Date</label>
                            <input type="url" name="field3" placeholder="5/6/2020" />

                        </div>

                        <div id="tab2" class="tab-slider--body">

                            <label for="adult">Departure Date</label>
                            <input type="url" name="field3" placeholder="5/6/2020" />
                            <label for="adult">Return Date</label>
                            <input type="url" name="field3" placeholder="5/6/2020" />

                        </div>
                </div>
                    <input type="submit" value="Book Now" onclick="$('#cover-spin').show(0)"/>
                </form>
                <!-- </div> -->
                </div><!--booking section ends-->      
        
    </div>

<?php include("includes/footerjslinks.php"); ?>