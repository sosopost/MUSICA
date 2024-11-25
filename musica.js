
async function enviar() {

    var form = document.getElementById("form-musica");
    var dados = new FormData(form);

    if (!form.checkValidity()) {
        alert("Preencha todos os campos.");
        return false;
    }

    var req = await fetch("musica.php", {
        method: "POST",
        body: dados
    });

    var resposta = await req.json(); 
    alert(resposta)
}