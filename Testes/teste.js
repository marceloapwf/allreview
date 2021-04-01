
const loginForm = document.querySelector(".form-login");
const cadastroForm = document.querySelector(".form-cadastro");
const titleLogin = document.querySelector(".title-login");
const titleCadastro = document.querySelector(".title-cadastro");
const inputSenhaUm = cadastroForm.querySelector(".inputDivSenhaUm");
const inputSenhaDois = cadastroForm.querySelector(".inputDivSenhaDois")

var password = cadastroForm.querySelector("[name='password']");
var password2 = cadastroForm.querySelector("[name='password2']");


function eventoSenha2(){
    if(password2.value == "" || (password2.value == password.value)){
        inputSenhaDois.classList.add("hidden");
    } else if((password.value != password2.value)){
        inputSenhaDois.classList.remove("hidden");
        inputSenhaDois.innerHTML = "Senhas diferentes";
    }
};




password.addEventListener("input", function() {

    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    var comprimento = password.value.length;

    if((comprimento<=7) && (comprimento > 0) && (!format.test(password.value))){
        inputSenhaUm.classList.remove("hidden");
        inputSenhaUm.innerHTML = "<span>Insira ao menos 8 caracteres</span><span>Insira ao menos um caracter especial</span>";
    }
    else if((comprimento > 7) && (!format.test(password.value))){
        inputSenhaUm.classList.remove("hidden");
        inputSenhaUm.innerHTML = "<span>Insira ao menos um caracter especial</span>";

    }else if((comprimento<=7) && (comprimento > 0)){ 
        inputSenhaUm.classList.remove("hidden");
        inputSenhaUm.innerHTML = "<span>Insira ao menos 8 caracteres</span>";
    }else{
        inputSenhaUm.classList.add("hidden");
    }
    
    eventoSenha2();
});


password2.addEventListener("input", function() {
    eventoSenha2();
});




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