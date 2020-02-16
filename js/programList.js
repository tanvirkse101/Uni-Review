
function hover(x) {
    x.style.border = "15px";
    x.style.borderStyle = "solid";
    x.style.borderRadius =  "50px";
    x.style.borderColor = "red";
}


function endHover (x) {
    x.style.border = "5px";
    x.style.borderStyle = "solid";
    x.style.borderRadius =  "15px";
    x.style.borderColor = "rgb(160, 97, 38)";
}


function show () {
    var x = document.getElementsByClassName("admin");

    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "block";
      }
}

function hide () {
    var x = document.getElementsByClassName("admin");

    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
    
}
