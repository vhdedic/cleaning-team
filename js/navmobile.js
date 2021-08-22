

function myFunction() {
    document.getElementById("navigation").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.navicon')) {

    var dropdowns = document.getElementsByClassName("main-menu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
