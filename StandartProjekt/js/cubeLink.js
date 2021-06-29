const cube = document.querySelector(".cube");

cube.addEventListener("click", () => {
    if (window.location.pathname == "/StandartProjekt/html/cube.html") {
        window.location.href = "seite3.html";
    } else {
        window.location.href = "cube.html";
    }
});