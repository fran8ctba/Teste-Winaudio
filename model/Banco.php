<?php

require_once("../init.php");
class Banco
{
    // conexao

    protected $mysqli;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }  

    public function pesquisar()
    {

        $found = null;
        try {
                $sql = "SELECT * FROM anamnese";
            
            $result = $this->mysqli->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        } catch (Exception $e) {
            $found = FALSE;
        }
        return $found;
    }

    public function pesquisarPorId($id)
    {
        $result = $this->mysqli->query("SELECT * FROM anamnese WHERE id='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function adicionar($descricao, $resposta)
    {
        $sql = "INSERT INTO anamnese (`descricao`, `resposta`) VALUES ('$descricao', $resposta)";
        try {
            $this->mysqli->query($sql);
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }
  

    public function atualizar($descricao, $resposta, $id)
    {
        $sql = "UPDATE `anamnese` SET `descricao` = '$descricao', `resposta`='$resposta' WHERE `id` = '$id'";

        try {
            $this->mysqli->query($sql);
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

    public function deletar($id)
    {

        $sql = "DELETE FROM `anamnese` WHERE id='$id'";

        try {
            $this->mysqli->query($sql);
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

    


    
}
