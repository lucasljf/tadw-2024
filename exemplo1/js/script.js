function validar() {
    const nome = document.getElementById("nome");

    const email = document.querySelector("#email");
    const profissao = document.querySelector("#profissao");

    //verificar se cada um está vazio...

    if (nome.value == "") {
        alert("Erro: nome vazio!");
        return false;
    }

    if (email.value == "") {
        alert("Erro: email vazio!");
        return false;
    }

    // na atual construção, esta verificação faz sentido?
    if (profissao.value == "") {
        alert("Erro: profissão vazio!");
        return false;
    }

    alert("Sucesso"); 
}