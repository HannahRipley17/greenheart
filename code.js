var acc = document.getElementsByClassName("accordion");
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
    console.log(panel.style);
  });
}

window.addEventListener('resize', this.width); //watch always to see if it's resizing

function width() {
  var element = document.getElementById("nav");
  if (window.innerWidth > 560) { 
    document.getElementById("nav").style.display = "flex";
    element.classList.remove("mobilenav");
  }
  else if (window.innerWidth < 560) {
    document.getElementById("nav").style.display = "none";
  }
  console.log("resized");
}

function hamburger() {
  var element = document.getElementById("nav");
  var x = document.getElementById("nav");
  if (x.style.display != "none") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
    element.classList.add("mobilenav");
  }
}

function changeMe() {
  document.getElementById("changeme").innerHTML = "Thank you for sending your Coordinator a message!";

};