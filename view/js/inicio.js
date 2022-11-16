const aba = document.getElementById("selecionar-aba")
const abrir = document.querySelector(" .aba")

aba.addEventListener('click', () => {
  if(abrir.classList.contains("aba-ativa")){
    abrir.classList.remove("aba-ativa")
  }else{
    abrir.classList.add("aba-ativa")
  }
})

function sairMenu(){
  if(abrir.classList.contains("aba-ativa")){
    abrir.classList.remove("aba-ativa")
  }
}