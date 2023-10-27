
// Element toggle function
const elemToggleFunc = function (elem) { elem.classList.toggle("active"); }

// navbar toggle
const navbar = document.querySelector("[data-navbar]");
const overlay = document.querySelector("[data-overlay]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");

const navElemArr = [overlay, navCloseBtn, navOpenBtn];

// close navbar when click
for (let i = 0; i < navbarLinks.clientHeight; i++) {
    navElemArr.push(navbarLinks[i]);
}

// add event on all elements
for (let i = 0; i < navElemArr.length; i++) {
    navElemArr[i].addEventListener("click", function () {
        elemToggleFunc(navbar);
        elemToggleFunc(overlay);
    });
}


// Header active status
const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  window.scrollY >= 400 ? header.classList.add("active")
    : header.classList.remove("active");
}); 


// Hero Toogle
function loco() {
}
loco();

var headers = document.querySelector(".header");
var image = document.querySelector(".container>img");

container.addEventListener("mousemove",function(dets){
    image.style.top = 1-dets.y*0.05 +"px"
    image.style.left = 1-dets.x*0.05 +"px"
})


