

/* visibilidade da senha */
const botaosenha = document.getElementById('senha')
const icon = document.getElementById('icon')

function verSenha() {
  let inputsenha = botaosenha.type == "password"

  if (inputsenha) {
    mostrarsenha();
  }

  else {
    escondersenha();
  }
}

function verSenhaNova() {
  let inputVernovasenha = novasenha.type == "password"

  if (inputVernovasenha) {
    mostrarsenha();
  }

  else {
    escondersenha();
  }
}

function mostrarsenha() {
  botaosenha.setAttribute("type", "text")
  icon.src = "../assets/eye.png";

  novasenha.setAttribute("type", "text")
  iconNovasenha.src = "../assets/eye.png";
}

function escondersenha() {
  botaosenha.setAttribute("type", "password")
  icon.src = "../assets/eyeview.png";

  novasenha.setAttribute("type", "password")
  iconNovasenha.src = "../assets/eyeview.png";
}
