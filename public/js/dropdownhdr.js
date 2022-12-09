
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}




function btncoinBase() {
    var btncoinBase = document.getElementById('coiNBase')
    var proMainDiv = document.getElementById('proMainDiv')
    proMainDiv.style.display = 'none'
    btncoinBase.style.display = 'block'
}

function proFileBtN() {
    var btncoinBase = document.getElementById('coiNBase')
    var proMainDiv = document.getElementById('proMainDiv')
    proMainDiv.style.display = 'block'
    btncoinBase.style.display = 'none'
}
