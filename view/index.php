<?php
require_once("../controller/anamneseController.php");
$usuarioController = new anamneseController();
$usuarioController->index();

include("head.php");
include("menu.php");
?>
<div id="mensagem">
<?php
session_start();
if (isset($_SESSION['msg'])) {
    echo '<div class="alerta sucesso" id="msg">';
    echo $_SESSION['msg'];
    echo '</div>';
    unset($_SESSION['msg']);
}
?></div>
<div class="w-100" style="padding-bottom: 4rem;">
    <div class=" w-50 float-left">
        <input type="text" id="inputFiltro" class="form-control form-control-lg " onkeyup="filtrarTabela()" placeholder="Procure por nome.." title="Type in a name">
    </div>
    <div class="w-25 float-right ">
        <select id="selectFiltro" class="form-control form-control-lg" name="status" onchange="filtrarTabela()">
            <option value="" selected>
                Todos
            </option>
            <option value="SIM">
                SIM
            </option>
            <option value="NÃO">
                NÃO
            </option>
        </select>
    </div>

</div>




<div class="al-center" onload="setTimeout('desaparecer()', 5000)">
    <table cellspacing="0" class="al-center">
        <tr class="tbl-header">
            <th class='text-center'>Código</th>
            <th class='text-center'>Anamnese</th>
            <th class='text-center'>Resposta</th>
            <th class='text-center'></th>
        </tr>
    </table>
    <div class="tbl-content">

        <table cellspacing="0" id="tabelaUsuario" class="al-center">
            <?php
            if ($anamneses) :
                foreach ($anamneses as $anamnese) : ?>
                    <tr>
                        <td class='text-center'>
                            <?php echo $anamnese['id'] ?>
                        </td>
                        <td class='text-center'>
                            <?php echo $anamnese['descricao'] ?>
                        </td>
                        <td class='text-center'>
                            <?php echo ($anamnese['resposta'] == "0") ? "NÃO" : "SIM"; ?>
                        </td>
                        <td class='text-center'>
                            <button type="button" name="view" id="<?php echo $anamnese["id"]; ?>" class=" fa fa-eye btn btn-outline-light pt-3 pb-3 view"></button>
                            <button type="button" name="view" id="<?php echo $anamnese["id"]; ?>" class=" fa fa-edit btn btn-outline-light pt-3 pb-3 edit "></button>
                            <button type="button" name="view" id="<?php echo $anamnese["id"]; ?>" class=" fa fa-trash btn btn-outline-light pt-3 pb-3 delete "></button>
                      
                        </td>
                    </tr>
                <?php endforeach;
        else : ?>
                <tr>
                    <td>Não há anamneses cadastradas</td>
                </tr>
            <?php endif; ?>


        </table>
    </div>
</div>


<div id="dataModal" class="  modal-window modal fade">
    <div>
        <a href="" title="Close" class="modal-close" data-dismiss="modal">Fechar</a>

        <div id="detalhes" class="text-center">


        </div>
    </div>
</div>
</div>

<?php include("footer.php") ?>