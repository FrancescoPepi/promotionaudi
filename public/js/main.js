// SCOROLL TO TOP MENU
window.addEventListener("scroll", function () {
    let navBar = document.getElementById("nav-bar-container");
    let hero = document.getElementById("header-hero");
    let distanzaHero = hero.getBoundingClientRect().bottom;
    if (distanzaHero <= 125) {
        navBar.style.position = "fixed";
        navBar.style.top = "0px";
    } else if (distanzaHero >= 125) {
        navBar.style.position = "sticky";
    }
});
