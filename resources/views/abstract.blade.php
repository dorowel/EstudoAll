<?php

 abstract Class Banco {

    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s)
    {
        $this->saldo = $s;

    }

    public function getSando()
    {
        return $this->saldo;

    }

    abstract protected  function Sacar($s);
    abstract protected function Depositar($d);

}

Class Itau extends Banco {

     public function Sacar($s)
     {
         $this->saldo  -= $s;
         echo '<hr>Saco:'.$s;
     }

     public function Depositar($d)
     {
        $this->saldo += $d;
         echo '<hr>Depositor:'.$d;
     }

}

$itau = new Itau();
$itau->setSaldo(1000);
echo '<hr> Saldo:'.$itau->getSando();
$itau->Sacar(250);
echo '<hr> Saldo:'.$itau->getSando();
$itau->Depositar(900);
echo '<hr> Saldo:'.$itau->getSando();






