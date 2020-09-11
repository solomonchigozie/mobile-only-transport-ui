<?php 
session_start();
require_once("includes/head.php"); ?>
<?php 
//link to database
include('includes/config.php'); 
?>
<body>
	
    <?php include("includes/nav.php"); ?>
    <!-- Menu Button -->

    <div class="menu-section">   
        <div class="menu-settings">
            <button class="openbtn" onclick="openNav()">&#9776;</button>
            <a href="#" class="margin-right:50px">
                <img src="images/logoimg.png" class="main-logo" alt="logo"></a> 
        </div>
    </div>

    <!-- body section-->
<!-- <div class="container">box-body begins -->
<div>

<!-- check mobile.js for page links -->
    <div class="box-section">
        <div class="box box1" onclick="bookSeat()">
            <div class="box-icon-top" >
                    <!-- <img id="icon-size" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB/klEQVRIic3Wz6tNURQH8I/r+TEQz4/J86OHoYHoESXFH+BHBlLKAPcNlFIYCKNXjJmYGBqYIEqvRM+Aot6AAXmUTGSCIr2Iexnso87d795z9rn3Dt63dqe991rru9Y+a+29mEVYguEe9IdwFU8wjhOYX6Z0CNP4i9uoVSTdhq94iDO4jE+YwECR4seM9P/YW4F0Id5nZHmswDtcyC/GEc2N5gcqEO/GStzHSG4M4xaOFynf0BrxZyVHlEM90o1HMy8cR3w3mi/HjkTiOVX2Y+Jx/IzW9iUSV0JM/EPIwG6If1fZb1cu8XGvx8YE4qmS/TdlBobQ0JoYFxOIa5jUObnqCTY8i5QmU5SwTogsJr2iPPnAOTNLYU0i+QIcycjGsLWdUCcvNuBVtHYS+zEYrTfwNHP2V6JzhZjSGvUDMy+Y/DhVxXjRIxBn9y48LpBfW4W46Dq8h7O5+TzhWLd0kC8rp2TUhCctf5w3+2W8LMWv41huPo3z2bcTmkL5vejFsT2KX5xOo4HDvRAP4G2X5I+KDJe1Nn8Ez7914fTros2kawyrhDodweIS2SaeC7nwPdF+IU4L/7wIm1W4l1OwVGgQtpfIDWZyO/tFXMcHaZHcwbV+EU/gUqLsQXxR0sSndpCb8BKjCbKLsAyrhT67LVKTYBRHpTs6ofWenz34B5WRmVv1lgNkAAAAAElFTkSuQmCC">
                    --><img src="images/plane-seat.png" style="width:45%; margin:auto" class="img-fluid flex-center"> 
            </div>
            <div>
                <span>Book a seat</span>
            </div>
        </div>

        <div class="box box2" onclick="hire()">
            <div class="box-icon-top">
                <img src="images/planecopy2.png" style="width:45%; margin:auto" class="img-fluid flex-center">
            </div>
            <div>
                <span>Rent a bus</span>
            </div>
        </div>
        <!-- <div class="box box2"> two</div> -->
    </div>

    <div class="box-section">
        <div class="box box2">
            <div class="box-icon-top">
                <img src="images/planecopy3.png" style="width:45%; margin:auto" class="img-fluid flex-center">
            </div>
            <div>
                <span>Booking status</span>
            </div>
        </div>
        <div class="box box1"  onclick="schedule()">
            <div class="box-icon-top" >
                <img src="images/planecopy4.png" style="width:45%; margin:auto" class="img-fluid flex-center">
            </div>
            <div>
                <span>Schedule</span>
            </div>
        </div>
        <!-- <div class="box box2"> two</div> -->
    </div>

    <div class="box-section">
        <div class="box box1">
            <div class="box-icon-top">
                <img src="images/planecopy5.png" style="width:45%; margin:auto" class="img-fluid flex-center">
            </div>
            <div>
                <span>Login / Signup</span>
            </div>
        </div>
        <div class="box box2">
            <div class="box-icon-top">
                <img src="images/planecopy6.png" style="width:45%; margin:auto" class="img-fluid flex-center">
            </div>
            <div>
                <span>Become a partner</span>
            </div>
        </div>
        <!-- <div class="box box2"> two</div> -->
    </div>

</div>
<!-- </div>box-body ends -->




    
</body>
</html>
<?php
include("includes/footerjslinks.php");

?>