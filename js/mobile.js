function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

function bookSeat(){
  window.location.assign("booking.php");
}
function rentBus(){
  //window.location.assign("booking.php");
}
function bookingStatus(){
  //window.location.assign("booking.php");
}
function schedule(){
  window.location.assign("schedule.php");
}
function hire(){
  window.location.assign("hire.php");
}