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
