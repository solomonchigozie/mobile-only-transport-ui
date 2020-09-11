<?php 
session_start();
require_once("includes/head.php"); ?>
<?php 
//link to database
include('includes/config.php'); 
?>
<style>
html{
    overflow-x: hidden;
  overflow-y: hidden;
}
</style>
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
    
    <h4 style="text-align:center">Select a seat</h4>
<!--seat selection starts -->
<div class="seat-section">
                
        <form action="passenger.php" method="post">
        <div class="plane">
        <ol class="cabin fuselage">
            <li class="row row--1">
            <ol class="seats" type="A">
                <li class="seat">
                <input type="checkbox" id="1C" name="viju" value="1" onClick="showVal(this.form)" />
                <label for="1C">1</label>
                </li>
            </ol>
            </li>
            <li class="row row--2">
            <ol class="seats" type="A">
                <li class="seat">
                <input type="checkbox" id="2A"  name="viju" value="2" onClick="showVal(this.form)"/>
                <label for="2A">2</label>
                </li>
                <li class="seat">
                <input type="checkbox" id="2B" name="viju" value="3" onClick="showVal(this.form)"/>
                <label for="2B">3</label>
                </li>
                <li class="seat">
                <input type="checkbox" id="2C" name="viju" value="4" onClick="showVal(this.form)"/>
                <label for="2C">4</label>
                </li>
                
            </ol>
            </li>
            <li class="row row--3">
            <ol class="seats" type="A">
                <li class="seat">
                <input type="checkbox" id="3A" name="viju" value="5" onClick="showVal(this.form)"/>
                <label for="3A">5</label>
                </li>
                <li class="seat">
                <input type="checkbox" id="3B" name="viju" value="6" onClick="showVal(this.form)"/>
                <label for="3B">6</label>
                </li>
                <li class="seat">
                <input type="checkbox" id="3C" name="viju" value="7" onClick="showVal(this.form)"/>
                <label for="3C">7</label>
                </li>
               
            </ol>
            </li>
            
        </div>
       
        <div class="seat-guide">
                <div class="seat-guide-options">
                <img src="images/seat1.png" alt="" class="guide-image">
                <br>
                <span>Booked <br>seat</span>
                </div>
                <div class="seat-guide-options">
                <img src="images/seat2.png" alt="" class="guide-image">
                <br>
                <span>Selected<br> Seat</span>
                </div>
                <div class="seat-guide-options">
                <img src="images/seat3.png" alt="" class="guide-image">
                <br>
                <span>Available <br> Seat</span>
                </div>      
        </div>
        <div class="continue">
            <input type="submit" class="btn btn-danger" value="Continue" onclick="$('#cover-spin').show(0)">
        </div>

        </form>

    </div>

    
    <?php include("includes/footerjslinks.php"); ?>


    <script>
// var checked = false;

// function checkedAll() {
//     var c = document.getElementsByName("viju");
//     checked = document.getElementById('causelist_month').checked;

//     for (var i = 0; i < c.length; i++) {
//         c[i].checked = checked;
//     }
// }

function showVal(frm) {
    var arr = [];
    for (var i in frm.viju) {
        if (frm.viju[i].checked) {
            arr.push(frm.viju[i].value);
        }
    }
    document.getElementById("checkit").innerHTML= arr ;
    return arr
}
</script>