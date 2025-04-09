const navbar = document.querySelector(".navbar")
const logo = document.querySelector(".logo-svg use")
const mMenuToggle = document.querySelector(".mobile-menu-toggle")
const menu = document.querySelector(".mobile-menu")

function lightModeOn() {
    navbar.classList.add("navbar-light")
    logo.href.baseVal = "img/icons.svg#logo-black";
}
function lightModeOff() {
    navbar.classList.remove("navbar-light")
    logo.href.baseVal = "img/icons.svg#logo-light";
}

function openMenu() { 
    menu.classList.add("is-open"); // вешает класс is-open
    mMenuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden"; //запрещаем прокрутку сайта под меню
    lightModeOn();
}
function closeMenu() { //функция закрывания меню/
    menu.classList.remove("is-open"); //убирает класс is-open
    mMenuToggle.classList.remove("close-menu");
    document.body.style.overflow = ""; // возвращает прокрутку сайта под меню
    lightModeOff();
}
window.addEventListener("scroll", () => {
this.scrollY >1 ? lightModeOn () : lightModeOff ();

})
mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();

    if (menu.classList.contains("is-open")) { //if - если
        closeMenu()
    } else { // else - иначе
        openMenu();
    }
})