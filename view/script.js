

const hamburger = document.querySelector("#btnHamburger")
const menuIcon = document.querySelector(".menuIcon")
const closeIcon = document.querySelector(".closeIcon")

hamburger.addEventListener("click", ()=> {
  const menu = document.querySelector(".menu")

  if (menu.classList.contains("mostrarMenu")){
    hamburger.classList.add("hamburger")
    hamburger.classList.remove("hamburger-close")
    menu.classList.remove("mostrarMenu")
    closeIcon.classList.remove("selecionadoIcon")
    menuIcon.classList.add("selecionadoIcon")
  }else{
    hamburger.classList.remove("hamburger")
    hamburger.classList.add("hamburger-close")
    menu.classList.add("mostrarMenu")
    menuIcon.classList.remove("selecionadoIcon")
    closeIcon.classList.add("selecionadoIcon")

  }
});