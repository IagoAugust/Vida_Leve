const meses = [
  'janeiro',
  'fevereiro',
  'março',
  'abril',
  'maio',
  'junho',
  'julho',
  'agosto',
  'setembro',
  'outubro',
  'novembro',
  'dezembro'
]
const tabelaDeDias = document.getElementById('dias')
function receberDiasCalendario(mes, ano) {
  document.getElementById('mes').innerHTML = meses[mes]
  document.getElementById('ano').innerHTML = ano

  let primeiroDiaDaSemana = new Date(ano, mes, 1).getDay() - 1
  let pegarUltimoDiasDesseMes = new Date(ano, mes + 1, 0).getDate()
  for (
    let i = -primeiroDiaDaSemana, index = 0;
    i < 42 - primeiroDiaDaSemana;
    i++, index++
  ) {
    let data = new Date(ano, mes, i)
    let dataAgora = new Date()
    let diaTabela = tabelaDeDias.getElementsByTagName('td')[index]
    diaTabela.classList.remove('mes-anterior')
    diaTabela.classList.remove('proximo-mes')
    diaTabela.classList.remove('dia-atual')
    diaTabela.innerHTML = data.getDate()

    if (
      data.getFullYear() == dataAgora.getFullYear() &&
      data.getMonth() == dataAgora.getMonth() &&
      data.getDate() == dataAgora.getDate()
    ) {
      diaTabela.classList.add('dia-atual')
    }

    if (i < 1) {
      diaTabela.classList.add('mes-anterior')
    } else if (i > pegarUltimoDiasDesseMes) {
      diaTabela.classList.add('proximo-mes')
    }
  }
}

let dataAtual = new Date()
let mes = dataAtual.getMonth()
let ano = dataAtual.getFullYear()

receberDiasCalendario(mes, ano)

const botaoProximo = document.getElementById('btn_proximo')
const botaoAnterior = document.getElementById('btn_anterior')

botaoProximo.addEventListener('click', () => {
  mes++
  console.log(mes)
  if (mes > 11) {
    ano++
    mes = 0
  }
  receberDiasCalendario(mes, ano)
})

botaoAnterior.addEventListener('click', () => {
  mes--
  if (mes < 0) {
    ano--
    mes = 11
  }
  receberDiasCalendario(mes, ano)
})
