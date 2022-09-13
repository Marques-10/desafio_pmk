<?php

class cadastroController extends controller {

    public function index() {

        $dados = array();

        $this->loadTemplate('cadastro', $dados);

    }

    public function novo(){

        $data = $_POST;

        $erros = array();
        
        if(isset($data) && !empty($data)){

            $nome = $data['nome'];

            $cpf = $data['cpf'];

            $email = $data['email'];

            $telefone = $data['telefone'];

            $nascimento = $data['nascimento'];

            $data_cadastro = $data['data_cadastro'];

            $intervalo_doacao = $data['intervalo_doacao'];

            $forma_pagamento = $data['forma_pagamento'];

        }

        header("Location: " . BASE_URL );
        
    }

}