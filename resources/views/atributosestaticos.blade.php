<?php


Class Login {

     public static $user;


     public static function verificaLogin()
     {
        echo 'O usuario - '.self::$user.' esta logado!';

     }

     public function sairSistema()
         {

           echo 'O usuario deslegou';

         }


}
// modelo quando acessar o  metodo estatico //
/*
Login:: $user = 'Administrador';
Login::verificaLogin ();
*/

// modelo quando acessar o  metodo plublico //
$login = new Login();
$login->sairSistema ();



