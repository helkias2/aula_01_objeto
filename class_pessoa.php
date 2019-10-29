<?php
// class Pessoa
// { 
//     // Atributoas - variaveis
//   //  public // pode ser altera em todoso os locais
//     //private // pode ser altera so na class que foi criada 
//     //protected // pode ser altera na class que foi criada e onde for for chamada
//     //Metodos - acoes
// }

class Cachorro
{
    public function  latir()
    {
        echo "Au, Au";
    }
}
$cachorro = new Cachorro();
Cachorro::latir();
$cachorro::latir();
$cachorro->latir();
