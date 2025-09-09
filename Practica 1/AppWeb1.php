<?php
//Programa para imprimir mensajes de Bienvenida
//Creado por Abril Herrera
//Fecha:09/septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a programacion de ap web";
    public function imprimirtexto()
    {
        echo $this->texto1."<br>";
        print $this->texto1;
    }

}
$obj1=new texto;
$obj1->imprimirtexto();
?>