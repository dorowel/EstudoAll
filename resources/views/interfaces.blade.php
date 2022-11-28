<?php


interface Crud {

    public function create($data);
    public function read();
    public function update();
    public function delete();

}

class Noticias implements Crud {

    public function create($data){

     echo 'estou aqui no create';
    }
    public function read(){


    }

    public function update(){



    }

    public function delete(){



    }

}

$noticia = new Noticias();
$noticia->create(10);

