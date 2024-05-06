<?php
namespace PhpMailer;
// codigo de la libreria
class Email{
    // atributos definidos por la libreria
    public function __construct()
    {
        echo "desde la libreria";
    }
    // metodos
}



// AQUI ESTA EL CODIGO DE MI PROGRAMA

namespace App;
class Email{
    public function __construct()
    {
        echo "desde la app";
    }
}

// echo "desde index2.php";