// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("");
    });
    this.classList.add("");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};


var alert_del = document.querySelectorAll(".alert-del");
alert_del.forEach((x) =>
    x.addEventListener("click", function () {
        x.parentElement.classList.add("hidden");
    })
);


const btn = document.querySelector("button.mobile-menu-hamburger");
const menu = document.querySelector(".hamburger-menu");

btn.addEventListener("click", () => {
menu.classList.toggle("hidden");


});


const btn1 = document.querySelector(".mobile-menu-hamburger1");
const menu1 = document.querySelector(".hamburger-menu1");

btn1.addEventListener("click", () => {
menu1.classList.toggle("hidden"); 
});



const btn2 = document.querySelector(".mobile-menu-hamburger2");
const menu2 = document.querySelector(".hamburger-menu2");

btn2.addEventListener("click", () => {
menu2.classList.toggle("hidden");
});