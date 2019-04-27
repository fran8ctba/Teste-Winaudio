setTimeout('fecha_div()', 5000);

// apagar campos do formulário
function apagaForm() {
    document.getElementById('form').reset();
}

// paginas com formularios validar se realmente quer sair
function confirmar() {
    confirm("Tem certeza que deseja sair?");
}


// filtro para tabela na pagina listar
function filtrarTabela() {

    var i;
    var cont = 0;

    var table = document.getElementById("tabelaUsuario");
    var tr = table.getElementsByTagName("tr");


    var input = document.getElementById("inputFiltro");
    var filter_input = input.value.toUpperCase();

    var select = document.getElementById("selectFiltro");
    var filter_select = select.value;

    for (i = 0; i < tr.length; i++) {

        td_nome = tr[i].getElementsByTagName("td")[0];

        td_status = tr[i].getElementsByTagName("td")[2];

        var txtNome = td_nome.textContent || td_nome.innerText;
        var txtStatus = td_status.textContent || td_status.innerText;

        if (filter_select != "" && filter_input != "") {

            if (txtNome.toUpperCase().indexOf(filter_input) > -1 && txtStatus.indexOf(filter_select) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
                cont++;
            }

        } else if (filter_select == "" && filter_input != "") {
            if (txtNome.toUpperCase().indexOf(filter_input) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
                cont++;
            }

        } else {
            if (txtStatus.indexOf(filter_select) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
                cont++;
            }
        }
    }
}

