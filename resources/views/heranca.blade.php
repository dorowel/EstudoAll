<?php

class Veiculo {

    public $modelo;
    public $cor;
    public $ano;

    public function Andar()
    {
        echo 'Estou no metodo Andar'.'<br>';

    }

    public function Parar()
    {
        echo 'Estou no metodo Parar';

    }
}

Class Carro extends Veiculo {

    public function ligarLimpador()
    {

        echo 'limpador em 321';

    }

}

class Moto extends Veiculo {

    public function darGrau()
    {
        echo 'Dando grau dem 321';

    }

}



