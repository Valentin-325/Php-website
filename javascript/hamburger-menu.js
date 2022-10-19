const hamburger = document.querySelector(".hamburger-menu");
const NavMenu = document.querySelector(".nav-item");


hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    NavMenu.classList.toggle("active");

})

document.querySelectorAll(".list-item").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    NavMenu.classList.remove("active");
}))