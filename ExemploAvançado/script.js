const botao = document.getElementById("formB");
const form = document.getElementById("form");
const texto = document.getElementById("texto");
const main = document.getElementById("main");

botao.addEventListener("click", function() {
    form.style.display = "flex";
    texto.style.display = "none";
    botao.style.display = "none";
    main.style.display = "none"
});