var btn = document.getElementById('esconder');
var btnpontos = document.getElementById('esconderpontos');
var btnmusica = document.getElementById('escondermusica');
var container = document.getElementById('cardsculinaria');
var text = document.getElementById('textoculinaria')
var textpontos = document.getElementById('textopontos')
var containerpontos = document.getElementById('cardspontos');
var textmusica = document.getElementById('textomusica')
var containermusica = document.getElementById('cardsmusica');
btn.addEventListener('click', function () {

  if (container.style.display === 'flex') {
    container.style.display = 'none'
    btn.src = "../assets/setafechado.png";
  } else {
    container.style.display = 'flex';
    btn.src = "../assets/seta.png";
  }

  if (text.style.display === 'block') {
    text.style.display = 'none';
  } else {
    text.style.display = 'block';
  }
});

btnmusica.addEventListener('click', function () {

  if (containermusica.style.display === 'flex') {
    containermusica.style.display = 'none'
    btnmusica.src = "./assets/setafechado.png";
  } else {
    containermusica.style.display = 'flex';
    btnmusica.src = "./assets/seta.png";
  }

  if (textmusica.style.display === 'block') {
    textmusica.style.display = 'none';
  } else {
    textmusica.style.display = 'block';
  }
});


btnpontos.addEventListener('click', function () {

  if (containerpontos.style.display === 'flex') {
    containerpontos.style.display = 'none'
    btnpontos.src = "./assets/setafechado.png";
  } else {
    containerpontos.style.display = 'flex';
    btnpontos.src = "./assets/seta.png";
  }

  if (textpontos.style.display === 'block') {
    textpontos.style.display = 'none';
  } else {
    textpontos.style.display = 'block';
  }
});

/* voltar ao topo */

let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/* modal feedback */ 


