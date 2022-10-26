// const menu = document.querySelector(".menu");
// // const menuItems = document.querySelectorAll(".menuItem");
// const hamburger= document.querySelector(".hamburger");
// const closeIcon= document.querySelector(".closeIcon");
// const menuIcon = document.querySelector(".menuIcon");

// function toggleMenu() {
//   if (menu.classList.contains("mostrarMenu")) {
//     menu.classList.remove("mostrarMenu");
//     closeIcon.style.display = "none";
//     menuIcon.style.display = "block";
//   } else {
//     menu.classList.add("showMenu");
//     closeIcon.style.display = "block";
//     menuIcon.style.display = "none";
//   }
// }

// hamburger.addEventListener("click", toggleMenu);

const hamburger = document.querySelector(".hamburger")
const menuIcon = document.querySelector(".menuIcon")
const closeIcon = document.querySelector(".closeIcon")

hamburger.addEventListener("click", ()=> {
  const menu = document.querySelector(".menu")

  if (menu.classList.contains("mostrarMenu")){
    menu.classList.remove("mostrarMenu")
    closeIcon.classList.remove("selecionadoIcon")
    menuIcon.classList.add("selecionadoIcon")
  }else{
    menu.classList.add("mostrarMenu")
    menuIcon.classList.remove("selecionadoIcon")
    closeIcon.classList.add("selecionadoIcon")

  }
});