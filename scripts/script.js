
let verificador = 0
function validarCadastro() {
    const nomeCadastro = document.getElementById('nome-cadastro');
    const emailCadastro = document.getElementById('email-cadastro');
    const senhaCadastro = document.getElementById('senha-cadastro');
    const cadastroErroDiv = document.querySelector('.cadastro-erro');

    if (nomeCadastro.value.length < 1 || emailCadastro.value.length < 1 || senhaCadastro.value.length < 1) {
        if (verificador < 1){
            const tag = document.createElement("p");
            tag.classList.add("cadastro-erro-texto");
            tag.innerHTML = "Você deve preenche por completo.";
            cadastroErroDiv.appendChild(tag);
            verificador++;
        }
        alert("Para realizar o cadastro, deve-se preenchê-lo por completo.");
        return false;
    } else if (senhaCadastro.value.length < 5 ){
        alert("Sua senha não pode ter menos de 05 caracteres.")
        return false;
    } 
    
    return true;
}
function validarLogin(){
    const nomeLogin = document.getElementById('nome');
    const senhaLogin = document.getElementById('senha');
    const loginErradoDiv = document.querySelector('.login-errado');

    if(nomeLogin.value.length < 1 || senhaLogin.value.length < 1){
        if(verificador < 1){
            const tag = document.createElement("p");
            tag.classList.add("login-errado-texto");
            tag.innerHTML = "Você precisa informar os dados.";
            loginErradoDiv.appendChild(tag);
            verificador++;
        }
        return false;
    }else{
        tag.remover();
    }
    return true
}