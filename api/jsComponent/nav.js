const indicator = document.querySelector('.subnav__switch-indicator');
const links = document.querySelectorAll('.subnav__switch-list a');
const navList = document.querySelector('.subnav__switch-list');
let hero = document.getElementById("header-hero");
console.log(hero)
let addIndicatorLeft = 10;

function moveIndicator(element) {
    const rect = element.getBoundingClientRect();
    const parentRect = navList.getBoundingClientRect();
    indicator.style.opacity = "1";
    indicator.style.width = `${rect.width + 20}px`;
    indicator.style.height = `${rect.height + 10}px`;
    indicator.style.left = `${rect.left - addIndicatorLeft}px`;
    indicator.style.top = `${rect.top - parentRect.top - 5}px`;
}

links.forEach(link => {
    link.addEventListener('mouseenter', (e) => {
        // let distanzaHero = hero.getBoundingClientRect().bottom;
        // addIndicatorLeft = distanzaHero >= 125 ? 27 : 10;
        // console.log(addIndicatorLeft);
        moveIndicator(e.target);
    });
});

// Posizioniamo l'indicatore sul primo link all'avvio
// if (links.length > 0) moveIndicator(links[0]);

navList.addEventListener("mouseleave", () => {
    indicator.style.opacity = "0"; // Nasconde lentamente l'indicatore
});
