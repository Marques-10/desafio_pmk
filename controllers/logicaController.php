<?php

class logicaController extends controller {

    private $array_base;
    // private $qtde_nums_array;

    public function __construct(){
        $this->array_base = [20, 65, 682, 1050, 1558, 4032, 5065, 5095, 6063, 15000];
        // $this->qtde_nums_array = count($this->array_base);
    }

    public function index() {

        $dados = array(
            "array_resposta" => $this->getResultadoLogica($this->array_base)
        );

        $this->loadTemplate('logica', $dados);
    }

    private function getResultadoLogica($array_base) {

        $array_mapeado = array_map(
            array($this, 'implementaLogica'), 
            $array_base, array_keys($array_base)
        );
        
        $array_filtrado = array_filter($array_mapeado);

        return $array_filtrado;
    }

    private function implementaLogica($num, $index) {
        
        if($index == 0){
            return;
        }
        
        $result_sub = $num - $this->array_base[$index - 1];
        $result_div = $result_sub % 4;

        if($result_div == 0){
            return $result_sub;
        }

    }
}