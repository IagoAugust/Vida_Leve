const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Escolha sua Imagem";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});



const radioTrabalha = document.querySelectorAll("input[name='trabalha']")

radioTrabalha.forEach(radioSelecionado => {
  radioSelecionado.addEventListener("click", () =>{
    const radioTrabalhaAtivo = document.querySelector(".containerTrabalho input[value='Sim']")
    const informacaoSobreTrabalho = document.querySelector(".informacaoprofissao")
    if(radioSelecionado == radioTrabalhaAtivo){
      informacaoSobreTrabalho.classList.remove("naoSelecionado")
    }else{
      informacaoSobreTrabalho.classList.add("naoSelecionado")
    }

  })
})

const radioFilhos = document.querySelectorAll("input[name='filhos']")

radioFilhos.forEach(radioSelecionado => {
  radioSelecionado.addEventListener("click", () =>{

    const radioFilhosAtivo = document.querySelector(".containerFilho input[value='Sim']")
    const quantidadeDeFilhos = document.querySelector(".informacaoFilhos")
    if(radioSelecionado == radioFilhosAtivo){
      quantidadeDeFilhos.classList.remove("naoSelecionado")
    }else{
      quantidadeDeFilhos.classList.add("naoSelecionado")
    }

  })
})


const radioFuma = document.querySelectorAll("input[name='fuma']")

radioFuma.forEach(radioSelecionado => {
  radioSelecionado.addEventListener("click", () =>{

    const radioFumaAtivo = document.querySelector(".containerFuma input[value='Sim']")
    const informacaoSobreFuma = document.querySelector(".informacaoFuma")
    
    if(radioSelecionado == radioFumaAtivo){
      informacaoSobreFuma.classList.remove("naoSelecionado")
    }else{
      informacaoSobreFuma.classList.add("naoSelecionado")
    }

  })
})


