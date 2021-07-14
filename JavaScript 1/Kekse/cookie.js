function setCookie(cookieName, inhalt, favColor, dauer) {

    let datum = new Date();

    datum.setTime(datum.getTime() + (dauer * 24 * 60 * 60 * 1000));

    let ablaufdatum = "expires=" + datum.toGMTString();

    document.cookie = cookieName + "=" + inhalt + "!" + favColor +";" + ablaufdatum;
}

function getCookieInhalt(cookieName) {

    cookieName += "=";

    let decCookie = decodeURIComponent(document.cookie);
    let arr = decCookie.split(";");

    for (let i = 0; i < arr.length; i++) {

        let inhalt = arr[i];

        while (inhalt.charAt(0) == ' ') {

            inhalt = inhalt.substring(1);
        }

        if (inhalt.indexOf(cookieName) == 0) {

            end = inhalt.indexOf("!");

            return inhalt.substring(cookieName.length, end);
        }
    }
    return "";
}

function getCookiefavColor(favColor) {

    let decCookie = decodeURIComponent(document.cookie);
    let arr = decCookie.split(";");

    for (let i = 0; i < arr.length; i++) {

        let inhalt = arr[i];

        while (inhalt.charAt(0) == ' ') {

            inhalt = inhalt.substring(1);
        }

        if (inhalt.indexOf(favColor) == 0) {

            start = (inhalt.indexOf("!")+1);

            return inhalt.substring(start);
        }
    }
    return "";
}

function checkCookie() {
    let anwender = getCookieInhalt("anwender");
    let favColor = getCookiefavColor("anwender");

    if (anwender != "") {
        $('div').text("Hallo " + anwender + "!");
        document.getElementById("greeting").style.background = favColor;

    } else {
        anwender = prompt("Gib deinen Namen ein:");
        favColor = prompt("Deine Lieblingsfarbe? (in english)");

        $('div').text("Hallo " + anwender + "!");
        document.getElementById("greeting").style.background = favColor;

        if (anwender != "" && anwender != null) {

            setCookie("anwender", anwender, favColor, 180);
        }
    }
}
