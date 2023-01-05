// ========= menu y show =========
const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

// ========= Menu show =========
// validate if constant exist
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}
// ========= menu hidden =========
// validate if constant exist
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}
// ========= remove menu mobile =========
const navLink = document.getElementsByClassName("nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  console.log(navLink);
  console.log(navMenu);
  //when we click on each nav__link , we remove the show menu class
  navMenu.classList.remove("show-menu");
}

navLink.forEach((n) => n.addEventListener("click", linkAction()));
// il y a une erreur sur la photo du dessus mais je ne vois pas laquelle
