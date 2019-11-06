<?php 

class Pessoas {

    public $nome;
    private $idade;
    protected $cpf;
    public $email;

    //set - MUDAR
    //get - ACESSAR
    
    public function setIdade($idade){
        $this->idade = $idade; //tem de colocar o THIS, "essa idade (atributo) é igual a idade que está recebendo no parametro. Isso é um método acessor e sempre será publico
    }

    public function getIdade(){
        return $this->idade;
    }

    protected function falar(){
        echo "E ae";
    }

}

?>