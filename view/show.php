<?php
require_once("../controller/anamneseController.php");
$anamnese = new anamneseController();

if (isset($_GET['id'])) {

    $id = filter_input(INPUT_GET, 'id');
    $anamnese->mostrarPorId($id);

    ?>
    <h3 class="modal-title tdpreto text-center pb-3">Detalhes</h3>
    <table>
        <tr>
            <td class="tdpreto" width="30%"><label>Código</label></td>
            <td class="tdpreto" width="70%"><?php echo  $anamnese->getId(); ?>
            </td>
        </tr>
        <tr>
            <td class="tdpreto" width="30%"><label>Anamnese</label></td>
            <td class="tdpreto" width="70%"><?php echo  $anamnese->getDescricao(); ?></td>
        </tr>
        <tr>
            <td class="tdpreto" width="30%"><label>Resposta</label></td>
            <td class="tdpreto" width="70%"><?php echo ($anamnese->getResposta() == "0") ? "NÃO" : "SIM"; ?></td>
        </tr>
    </table>
<?php
}
?>