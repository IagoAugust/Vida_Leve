const informacao = document.querySelectorAll('.informacao')
informacao.forEach(aba => {
  aba.addEventListener('click', () => {
    if (aba.classList.contains('selecionado')) {
      return
    }

    const informacaoSelecionado = document.querySelector(
      '.informacao.selecionado'
    )
    informacaoSelecionado.classList.remove('selecionado')
    aba.classList.add('selecionado')

    const sessaoSelecionado = document.querySelector(
      '.abaConteudo.abaSelecionado'
    )
    sessaoSelecionado.classList.remove('abaSelecionado')

    const idContainerSessaoaba = `container-${aba.id}`
    const conteudoASerMostrado = document.getElementById(idContainerSessaoaba)
    conteudoASerMostrado.classList.add('abaSelecionado')
  })
})

const botaoAdicionar = document.querySelectorAll('.adicionar')
botaoAdicionar.forEach(botao => {
  botao.addEventListener('click', () => {
    const sessaoSelecionado = document.querySelector(
      '.abaConteudo.abaSelecionado'
    )
    sessaoSelecionado.classList.remove('abaSelecionado')

    const idContainerAdicionar = `container-${botao.id}`
    console.log(idContainerAdicionar)
    const conteudoASerMostrado = document.getElementById(idContainerAdicionar)
    conteudoASerMostrado.classList.add('abaSelecionado')
  })
})




const hamburger = document.querySelector("#btnHamburger")


hamburger.addEventListener("click", ()=> {
  const menu = document.querySelector(".menu")
  const menuIcon = document.querySelector(".menuIcon")
  const closeIcon = document.querySelector(".closeIcon")
  const voltarIcone = document.querySelector("#icone-volar-mobile")

  if (menu.classList.contains("mostrarMenu")){
    hamburger.classList.add("hamburger")
    hamburger.classList.remove("hamburger-close")
    voltarIcone.classList.remove("voltar-mobile")
    menu.classList.remove("mostrarMenu")
    closeIcon.classList.remove("selecionadoIcon")
    menuIcon.classList.add("selecionadoIcon")
  }else{
    hamburger.classList.remove("hamburger")
    hamburger.classList.add("hamburger-close")
    voltarIcone.classList.add("voltar-mobile")
    menu.classList.add("mostrarMenu")
    menuIcon.classList.remove("selecionadoIcon")
    closeIcon.classList.add("selecionadoIcon")

  }
});
