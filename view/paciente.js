const informacao = (document.querySelectorAll('.informacao'));

informacao.forEach( aba => {
  aba.addEventListener('click', () => {

    if(aba.classList.contains('selecionado')){
      return;
    }
    
    const informacaoSelecionado = document.querySelector('.informacao.selecionado');
    informacaoSelecionado.classList.remove('selecionado');
    aba.classList.add('selecionado');


    const sessaoSelecionado = document.querySelector('.abaConteudo.abaSelecionado');
    sessaoSelecionado.classList.remove('abaSelecionado');
    

    const idContainerSessaoaba = `container-${aba.id}`;
    const conteudoASerMostrado = document.getElementById(idContainerSessaoaba);
    conteudoASerMostrado.classList.add('abaSelecionado');

    

    
  });
});


const botaoAdicionar = document.querySelector('.adicionar');
botaoAdicionar.addEventListener('click', () => {

  const sessaoSelecionado = document.querySelector('.abaConteudo.abaSelecionado');
  sessaoSelecionado.classList.remove('abaSelecionado');

  const idContainerAdiconarNovo = `container-${botaoAdicionar.id}`;
  console.log(idContainerAdiconarNovo);
  const conteudoASerMostrado = document.getElementById(idContainerAdiconarNovo);
  conteudoASerMostrado.classList.add('abaSelecionado');
  })