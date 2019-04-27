<?php
require_once("../model/Banco.php");
require_once("../model/Anamnese.php");

class anamneseController extends Anamnese
{
    private $db;

    public function __construct()
    {
        $this->db = new Banco();
    }

    public function index()
    {
        global $anamneses;
        $anamneses = $this->db->pesquisar('anamnese');
    }

    public function incluir($descricao, $resposta)
    {
        $this->descricao = $descricao;
        $this->resposta = $resposta;
        $func = $this->db->adicionar($descricao, $resposta);

        if ($func == TRUE) {
            session_start();
            $_SESSION['msg'] = '<div class="alert alert-success" id="msg">Anamnese cadastrado com sucesso!</div>';
            header("Location: index.php");
        } else {
            session_start();
             $_SESSION['msg'] = "<div class='alert alert-danger' id='msg' >Tente reenviar o formulário houve algum erro!</div>";
        }
    }


    public function mostrarPorId($id)
    {
        $row = $this->db->pesquisarPorId($id);
        $this->id  = $row['id'];
        $this->descricao    = $row['descricao'];
        $this->resposta    = $row['resposta'];
    }


    public function editar($descricao, $resposta, $id)
    {

        $result = $this->db->atualizar($descricao, $resposta, $id);

        if ($result == TRUE) {
            session_start();
            $_SESSION['msg'] = '<div class="alert alert-success" id="msg">Anamnese editado com sucesso!</div>';
            header("Location: index.php");
        } else {
            session_start();
            $_SESSION['msg'] = "<div class='alert alert-danger' id='msg' >Tente reenviar o formulário houve algum erro!</div>";
        }
    }

    public function deletar($id)
    {
        $result = $this->db->deletar($id);
        
        if ($result == TRUE) {
            session_start();
            $_SESSION['msg'] = '<div class="alert alert-success" id="msg">Anamnese deletado com sucesso!</div>';
            header("Location: index.php");
        } else {
            session_start();
            $_SESSION['msg'] = "<div class='alerta error' id='msg' >Tente novamente houve algum erro e seu registro não foi alterado!</div>";
        }
    }
}
