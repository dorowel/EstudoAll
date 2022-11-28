<?php

class Newsletter {
    public function cadastrarEmail($email){

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
            throw new Exception('Este email é invalido',204);
        else:
            echo 'Email Valido';
        endif;

    }
}

$newsletter = new Newsletter();
try {
    $newsletter->cadastrarEmail('wellikkkkk');
}catch (Exception $e){

    echo $e->getMessage().'<br>'.PHP_EOL;
    echo $e->getCode().'<br>'.PHP_EOL;
    echo $e->getLine().'<br>'.PHP_EOL;
}
