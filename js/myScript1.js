/*
function passwordlog() {

var password;
var password2=plymouth19;
password=prompt('enter your admin password');
if(password2==password)
window.location="uplord.php";
else{
    window.location="index.html";
}
*/
    
}

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
