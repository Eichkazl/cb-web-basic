function styling(styletype) {
    switch (styletype) {
    case 1:
        document.getElementById("txt").style.background ="red";
        document.getElementById("txt").style.fontSize ="120%";
        document.getElementById("txt").style.color ="yellow";
        document.getElementById("txt").style.width ="85%";
        document.getElementById("txt").style.border ="solid 2px cyan";
        document.getElementById("txt").style.padding ="2px";
        break;

    case 2:
        document.getElementById("txt").style.background ="blue";
        document.getElementById("txt").style.fontSize ="80%";
        document.getElementById("txt").style.color ="orange";
        document.getElementById("txt").style.width ="90%";
        document.getElementById("txt").style.border ="dashed 4px white";
        document.getElementById("txt").style.padding ="10px";
        break;

    case 3:
        document.getElementById("txt").style.background ="green";
        document.getElementById("txt").style.fontSize ="150%";
        document.getElementById("txt").style.color ="red";
        document.getElementById("txt").style.width ="60%";
        document.getElementById("txt").style.border ="dotted 7px yellow";
        document.getElementById("txt").style.padding ="6px";
        break;
    }
}