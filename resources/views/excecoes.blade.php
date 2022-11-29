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

    echo $e->getMessage().PHP_EOL;
    echo $e->getCode().PHP_EOL;
    echo $e->getLine().PHP_EOL;
}
