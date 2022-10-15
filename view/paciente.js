object.addEventListener('click', myScript)

function mudarItemSelecionadoPrincipal() {
  document.getElementById('principal').classList.add('selecionado')
  document.getElementById('anamnese').classList.remove('selecionado')
  document.getElementById('evolucao').classList.remove('selecionado')
  document.getElementById('consulta').classList.remove('selecionado')
}

function mudarItemSelecionadoAnamnese() {
  document.getElementById('anamnese').classList.add('selecionado')
  document.getElementById('principal').classList.remove('selecionado')
  document.getElementById('evolucao').classList.remove('selecionado')
  document.getElementById('consulta').classList.remove('selecionado')
}

function mudarItemSelecionadoEvolucao() {
  document.getElementById('evolucao').classList.add('selecionado')
  document.getElementById('anamnese').classList.remove('selecionado')
  document.getElementById('principal').classList.remove('selecionado')
  document.getElementById('consulta').classList.remove('selecionado')
}

function mudarItemSelecionadoConsulta() {
  document.getElementById('consulta').classList.add('selecionado')
  document.getElementById('anamnese').classList.remove('selecionado')
  document.getElementById('principal').classList.remove('selecionado')
  document.getElementById('evolucao').classList.remove('selecionado')
}
