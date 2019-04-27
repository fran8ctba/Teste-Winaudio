<?php
require_once("../controller/anamneseController.php");
$cadastro = new anamneseController();

if (isset($_POST['id'])) {
    $id = filter_input(INPUT_POST, 'id');
    $cadastro->deletar($id);
}
if (isset($_GET['id'])) {
    ?>

    <h3 class="modal-title tdpreto text-center pb-3">
        ATENÇÃO
    </h3>
    <h4>Tem certeza que deseja excluir este usuário?</h4>
    <button type="button" name="view" id="<?php echo $_GET['id']; ?>" class="btn btn-outline-success pt-3 pb-3 sim">SIM</button>
    <a href="index.php"><button type="button" class="btn btn-outline-danger pt-3 pb-3nao">NÃO</button></a>
<?php
} ?>