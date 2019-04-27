<?php
require_once("../controller/anamneseController.php");
$anamnese = new anamneseController();

if (isset($_GET['id']) || isset($_POST['id'])) {

    $acao = 'editar';
    $title = 'Editar';
    $id = filter_input(INPUT_GET, 'id');
    $anamnese->mostrarPorId($id);
    if (isset($_POST['submit'])) {

        $anamnese->editar($_POST['descricao'], $_POST['resposta'], $_POST['id']);
    }
} else {
    $acao = 'cadastrar';
    $title = 'Novo';
    if (isset($_POST['submit'])) {
        $anamnese->incluir($_POST['descricao'], $_POST['resposta']);
    }
}
?>

<h3 class="modal-title tdpreto text-center pb-3">
    <?php echo $title; ?>
</h3>

<div class="w-100 text-center mt-2">
    <form method="post" action="novo.php" id="form" name="form" class="col-md-6 offset-md-3"">
        <div>        
        <input class=" form-control mb-1" type="text" id="descricao" name="descricao" placeholder="Anamnese" onchange="validar(document.form.descricao);" value="<?php if ($anamnese->getDescricao() != null) {
                                                                                                                                                                        echo  $anamnese->getDescricao();
                                                                                                                                                                    } ?>" required>
        <label> Resposta:  </label>
        <label class="radio-inline"><input type="radio" id="resposta" name="resposta" value="1" <?php echo ($anamnese->getResposta() != null && $anamnese->getResposta() == 1) ? "checked" : ""; ?> required>SIM</label>
        <label class="radio-inline"><input type="radio" id="resposta" name="resposta" value="0" <?php echo ($anamnese->getResposta() != null && $anamnese->getResposta() == 0) ? ' checked ' : ''; ?>>NÃO</label>
        
</div>
<div class="form-group mt-2">
    <?php
    echo ($acao == 'editar') ? '<input type="hidden" name="id" value="' . $id . '" >' : ''; ?>

    <input type="submit" class="btn btn-success lg-30" name="submit" id="<?php echo $acao; ?>"></input>
    <?php echo ($acao != 'editar') ? ' <button type="button" class=" btn btn-warning lg-30 mr-1 mt-1" id="limpar" onclick="apagaForm()">Limpar</a>' : '';
    ?><a href="index.php">
        <button type="button" class="btn btn-secondary lg-30 mt-1" id="retornar" onclick="confirmar()"> Retornar</button></a>
</div>
</form>
</div>