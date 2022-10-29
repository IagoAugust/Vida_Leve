const radioTrabalha = document.querySelectorAll("input[name='trabalha']")

radioTrabalha.forEach(radioSelecionado => {
  radioSelecionado.addEventListener("click", () =>{
    const radioTrabalhaAtivo = document.querySelector(".containerTrabalho input[value='Sim']")
    if(radioSelecionado == radioTrabalhaAtivo){
      console.log("Foi selecionado o SIm para trabalho")
    }else{
      console.log("foi selecionado o Não para trabalha")
    }

  })
})

const radioFilhos = document.querySelectorAll("input[name='filhos']")

radioFilhos.forEach(radioSelecionado => {
  radioSelecionado.addEventListener("click", () =>{

    const radioFilhosAtivo = document.querySelector(".containerFilho input[value='Sim']")
    
    if(radioSelecionado == radioFilhosAtivo){
      console.log("Foi selecionado o SIm para filho")
    }else{
      console.log("foi selecionado o Não para filho")
    }

  })
})


const radioFuma = document.querySelectorAll("input[name='fuma']")

radioFuma.forEach(radioSelecionado => {
  radioSelecionado.addEventListener("click", () =>{

    const radioFumaAtivo = document.querySelector(".containerFuma input[value='Sim']")
    
    if(radioSelecionado == radioFumaAtivo){
      console.log("Foi selecionado o SIm para fuma")
    }else{
      console.log("foi selecionado o Não para fuma")
    }

  })
})