let cube = document.querySelector(".cube");

cube.addEventListener("click", () => {
    if (window.location.pathname == "/StandartProjekt/html/cube.html") {
        // window.location.href = "seite3.html";
    } else {
        window.location.href = "cube.html";
    }
});
 
let cube2 = document.querySelector(".cube2");

  cube2.onclick = toggleAnimation;
  cube.onclick = toggleAnimation;

  cube2.style.webkitAnimationPlayState = 'running';
  cube.style.webkitAnimationPlayState = 'running';

function toggleAnimation() {

  let style = this.style;

  
    if (style.webkitAnimationPlayState === 'running') {
      style.webkitAnimationPlayState = 'paused';
    } else {
      style.webkitAnimationPlayState = 'running';
  }
}