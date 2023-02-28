AOS.init({
  duration: 1000,
  once: true,
})

var project = setInterval(projectDone, 10)
var cobranca = setInterval(cobrancasite, 10)
var milhoes = setInterval(milhoesite, 10)
var ano = setInterval(anosite, 10)
let count1 = 700
let count2 = 1100
let count3 = 15300
let count4 = 1

function projectDone() {
  count1++
  document.querySelector("#number1").innerHTML = count1
  if (count1 == 844) {
    clearInterval(project)
  }
}

function cobrancasite() {
  count2++
  document.querySelector("#number2").innerHTML = count2
  if (count2 == 1240) {
    clearInterval(cobranca)
  }
}

function milhoesite() {
  count3++
  document.querySelector("#number3").innerHTML = count3
  if (count3 == 15419) {
    clearInterval(milhoes)
  }
}

function anosite() {
  count4++
  document.querySelector("#number4").innerHTML = count4
  if (count4 == 67) {
    clearInterval(ano)
  }
}
