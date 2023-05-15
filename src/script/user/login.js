const form = document.getElementById('form');
const email = document.getElementById('email');
const senha = document.getElementById('senha');
const botaoVoltar = document.getElementById('voltar');

botaoVoltar.addEventListener('click', (event) => {
    event.preventDefault();
    form.disabled = true;
});

form.addEventListener('submit', (event) => {
    event.preventDefault();
    const entrar = new XMLHttpRequest();
    entrar.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200){
            if(this.responseText == 'errado'){
                alert('Email ou senha incorreto.');
            }else if(this.responseText == "certo"){
                form.submit();
            }
        }
    }
    const dados = new FormData();
    dados.append('email',email.value);
    dados.append('senha',senha.value);
    dados.append('script',"vimDoScript");
    entrar.open('POST','/src/php/session/login.php',true);
    entrar.send(dados);
});