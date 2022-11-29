<?php


    class Produtos {

        public $name;
        public $valor;


        function __construct($nome,$valor){

            $this->name = $nome;
            $this->valor = $valor;

        }
    }

    class Carrinho {
        public $produtos;

        public function adicionar(Produtos $produto){

            $this->produtos[] = $produto;
        }

        public function exibe()
            {
              foreach ($this->produtos as $produto){

                  echo $produto->name.PHP_EOL;
                  echo $produto->valor.PHP_EOL;
              }
            }
    }


    $produto1 = new Produtos('Notebook','1500');
    $produto2 = new Produtos('Mouse','50');

    $carrinho = new Carrinho();
    $carrinho->adicionar ($produto1);
    $carrinho->adicionar ($produto2);

    $carrinho->exibe ();
