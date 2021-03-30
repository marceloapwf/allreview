
const loginForm = document.querySelector(".form-login");
const cadastroForm = document.querySelector(".form-cadastro");
const titleLogin = document.querySelector(".title-login");
const titleCadastro = document.querySelector(".title-cadastro");
const inputEmail = document.querySelector("#inputEmail");

if(!isNaN(inputEmail.value)){
    
}

document.querySelector("#link-cadastro").addEventListener("click", e => {
    e.preventDefault();
    loginForm.classList.add("hidden");
    cadastroForm.classList.remove("hidden");
    titleLogin.classList.add("hidden");
    titleCadastro.classList.remove("hidden");

});

document.querySelector("#link-login").addEventListener("click", e => {
    e.preventDefault();
    loginForm.classList.remove("hidden");
    cadastroForm.classList.add("hidden");
    titleLogin.classList.remove("hidden");
    titleCadastro.classList.add("hidden");
});


//document.getElementById("content").innerHTML = "whatever";
// teste
//teste 23332323
// ctrl + enter
//pipi bicicreta