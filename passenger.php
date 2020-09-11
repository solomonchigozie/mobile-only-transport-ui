<?php 
session_start();
require_once("includes/head.php"); ?>
<?php 
//link to database
include('includes/config.php'); 
?>
<style>

/* passenger page style */
.passenger-section{
  width:90%;
  margin: 10px auto;
}
.collapsible {
  background-color: #fff;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  box-shadow:0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
  border-radius:10px;
  /* margin-bottom:px; */
}

.active, .collapsible:hover {
  /* background-color: #ccc; */
  background-color: #fff
}

.collapsible:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  border-radius:20px;
}
.panel-inner{
    padding: 0 18px;
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

    <div class="passenger-section"><!-- informatio begins-->
        <button class="collapsible">Trip Summary</button>
        <div class="panel">

        <div class="panel-inner"><!--panel inner begins here-->
        <hr>
        <h4>Abuja(Utako) ==> Port-Harcourt</h4>
        <h5 >
            <span>January 31 2019 6:30 AM</span><br>
            <span>Toyota Sienna</span><br>
            <span>Selected Seat: 2</span>

        </h5>

        <br>
        <div class="trip-summary-amount">
            <div>1 Adult</div>
            <div>N12,500</div>
            
        </div>
        <hr>

        </div><!--panel inner ends here-->
        
        <div class="trip-summary-total">
            <div>Total to pay</div>
            <div>N12,500</div>
        </div>
        
    </div>

        <button class="collapsible">Passenger Details</button>
        <div class="panel">
        <div class="panel-inner"><!--panel inner begins here-->
        <h4><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i>
        Please enter name as it appears on identification document</h4>
            <form class="form-style-transport" action="index.php"><!-- FORM BEGINS HERE -->
                <label for="full_name">Full Name</label>
                <input type="text" name="field1" placeholder="Travelling from" />
                <label for="gender">Gender </label>
                <select name="" id="">
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>

        

        </div><!--panel inner ends here-->
        </div>

        <button type="button" class="collapsible">Contact details and Payment method</button>
        <div class="panel">
        <div class="panel-inner form-style-transport"><!--panel inner begins here-->
        <h4><i class="fa fa-info-circle" aria-hidden="true" style="color:red"></i>
        We need your contact details to complete your booking</h4>
                <label for="email">Email *</label>
                <input type="email" name="field1" placeholder="Email Address" />
                <label for="phone">Mobile Phone Number</label>
                <input type="text" name="field1" placeholder="2348000000000" />
                <label for="next_of_kin">Next of Kin</label>
                <input type="text" name="field1" placeholder="Next of Kin" />
                <label for="nof_number">Next of Kin Number</label>
                <input type="text" name="field1" placeholder="Next of Kin Number" />
        </div><!--panel inner ends here-->
        </div>

        <div>
            <h4>Select Payment Option</h4><br>
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>
            In using this option,
            please complete transaction within 5 minutes to avoid 
            a timeout and possible loss of chosen seat number.
            </span>
            <div style="width:300px;margin:30px auto"> 
                <button type="submit"><img src="images/cards.png" alt="paystack" style="width:300px;margin:0 auto"></button>

            </form>
            </div>
        </div>

        <div>
            <h4>Terms and Conditions</h4><br>
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>Please note that we has a no refund policy. However our 
            tickets are valid for a month.</span>
            <span class="">By proceeding to make payment, 
            you accept the </span>
            <a href="#" target="_blank">Terms and Conditions</a>

            </span>
        </div>


    </div><!-- informatio ends-->

    <div style="margin:10px 0 50px 0;text-align:center;color:#777">
        <p>&copy; Transport <script>document.write(new Date().getFullYear()); </script>. All Rights Reserved</p>
    </div>

    <?php include("includes/footerjslinks.php"); ?>
    <script>
var acc = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>