<?php

/**
 *
 */
Class Animal {

        public function Andar()
        {

        echo 'O animal andou';

        }
    public function Correr()
    {
        echo 'O animal Correu';

    }

    }

   class Cavalo extends Animal{

        public function Andar()
            {
              $this->Correr();
            }

   }

    $animal = new Cavalo();
    $animal->Andar ();

