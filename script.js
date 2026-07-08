document.getElementById("formulario").addEventListener("submit", function(event) {

    event.preventDefault();

    let nome = document.getElementById("nome").value;
    let sobrenome = document.getElementById("sobrenome").value;
    let date = document.getElementById("date").value;
    let email = document.getElementById("email").value;
    let tel = document.getElementById("tel").value;

    if (nome === "") {
        alert("Preencha o primeiro nome!");
        return;
    }

    if (sobrenome === "") {
        alert("Preencha o sobrenome!");
        return;
    }

    if (date === "") {
        alert("Informe a data de nascimento!");
        return;
    }

    if (!email.includes("@")) {
        alert("Digite um e-mail válido!");
        return;
    }

    if (tel.length < 8) {
        alert("Digite um telefone válido!");
        return;
    }

    alert("Formulário enviado com secesso!");
    this.submit();

});