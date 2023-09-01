<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula4/model/EstudanteModel.php';

class EstudanteController
{
    public function listar()
    {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listarModel();
        $_REQUEST['estudantes'] = $estudantes;
        
        //render na view
        require_once $_SERVER['DOCUMENT_ROOT'] . '/aula4/view/EstudanteView.php';
    }

    public function salvar()
    {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        $estudanteModel = new EstudanteModel();
        $estudanteModel->salvarModel($nome, $idade);
    }
}