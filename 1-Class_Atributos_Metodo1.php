<?php
class Pessoa{ 

    public function Falar(){
        echo "ploc, ploc, ploc";
    }
    public function Nome($nm){
        echo "Meu nome: ".$nm;

    }

}

$pessoa = new Pessoa();
$pessoa->Nome("Antonio");
$pessoa->Falar();
