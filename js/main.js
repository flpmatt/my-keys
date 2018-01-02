function validarConta() {
    var usuario = document.forms["form_conta"]["usuario"].value;
    var senha = document.forms["form_conta"]["senha"].value;


    if (usuario == "" || usuario == null) {
        document.getElementById("flag").innerText = "Digite um usuário";
        return false;
    }

    if (senha == "" || senha == null) {
      document.getElementById("flag").innerText = "Digite uma senha";
      return false;
    }
    return true;
}
