/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function responsive() {
    var x = document.getElementById("mainNav");
    if (x.className === "mainNav") {
        x.className += " responsive";
    } else {
        x.className = "mainNav";
    }
}