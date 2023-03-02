AOS.init({
  duration: 1000,
  once: true,
})

let count1 = 700
let count2 = 1100
let count3 = 15300
let count4 = 1
let project
let cobranca
let milhoes
let ano

function projectDone() {
  count1++
  document.querySelector("#number1").innerHTML = count1
  if (count1 >= 844) {
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

function showElement(element) {
  element.classList.remove("hidden")
  if (element.id === "number1") {
    project = setInterval(projectDone, 10)
  } else if (element.id === "number2") {
    cobranca = setInterval(cobrancasite, 10)
  } else if (element.id === "number3") {
    milhoes = setInterval(milhoesite, 10)
  } else if (element.id === "number4") {
    ano = setInterval(anosite, 10)
  }
}

const elements = document.querySelectorAll(".hidden")
elements.forEach((element) => {
  element.classList.add("hidden")
})

function showElement(element) {
  element.classList.remove("hidden")
  if (element.id === "number1") {
    project = setInterval(projectDone, 10)
  } else if (element.id === "number2") {
    cobranca = setInterval(cobrancasite, 10)
  } else if (element.id === "number3") {
    milhoes = setInterval(milhoesite, 10)
  } else if (element.id === "number4") {
    ano = setInterval(anosite, 10)
  }
}

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      showElement(entry.target)
      observer.unobserve(entry.target)
    }
  })
})

const element1 = document.querySelector("#number1")
const element2 = document.querySelector("#number2")
const element3 = document.querySelector("#number3")
const element4 = document.querySelector("#number4")

observer.observe(element1)
observer.observe(element2)
observer.observe(element3)
observer.observe(element4)

const btnMobile = document.getElementById("btn-mobile")

function toggleMenu() {
  const nav = document.getElementById("nav")
  nav.classList.toggle("active")
}

btnMobile.addEventListener("click", toggleMenu)
