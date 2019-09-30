function message() {
    alert ("Clicked!");
}

function changecolor() {
    var color = "colorchoice";

    var choice = document.getElementById(color);

    var division = "div1";

    var div = document.getElementById(division);

    var colorchosen = choice.value;

    div.style.backgroundColor = colorchosen;
}