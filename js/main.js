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
const swiper = new Swiper('.swiper', {
    speed: 400,
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
          slidesPerView: 2,
          ccenteredSlides: true,
          slidesOffsetBefore: 50,
        },
        // when window width is >= 480px
        768: {
          slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        }
      }
  });

  
  const swiper2 = new Swiper('.swiper-two', {
    speed: 400,
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
          slidesPerView: 2,
          ccenteredSlides: true,
          slidesOffsetBefore: 50,
        },
        // when window width is >= 480px
        768: {
          slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 4,
        },
        1200: {
            slidesPerView: 4,
        }
      }
      
  });
  