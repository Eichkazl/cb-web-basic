// function bodyclick() {
//     alert("Body clicked");
// }

// function mainclick() {
//     alert("Main clicked");
// }

// function articelclick() {
//     alert("Articel clicked");
// }

// function sectionclick() {
//     alert("Section clicked");
// }

// b.onclick = bodyclick;
// m.onclick = mainclick;
// a.onclick = articelclick;
// s.onclick = sectionclick;

// var cells = table.getElementsByTagName("td"); 
// for (var i = 0; i < cells.length; i++) { 
//    cells[i].onclick = redClicked;
// }

b.onclick = clicked;

function clicked(colorClick) {

    if (colorClick.target.nodeName == "BODY" || 
        colorClick.target.nodeName == "MAIN" || 
        colorClick.target.nodeName == "ARTICLE" || 
        colorClick.target.nodeName == "SECTION") {

    b.style.backgroundColor = 'white';
    m.style.backgroundColor = 'white';
    a.style.backgroundColor = 'white';
    s.style.backgroundColor = 'white';
    t.style.backgroundColor = 'white';

    colorClick.target.style.backgroundColor = 'rgb(93, 255, 93)';
    colorClick.target.parentElement.style.backgroundColor = 'rgb(250, 242, 135)';
    } 
    else if (colorClick.target.nodeName == "TD"){
        if (colorClick.target.style.backgroundColor == 'red')
            colorClick.target.style.backgroundColor = 'white';
        else
            colorClick.target.style.backgroundColor = 'red';
    }
}
