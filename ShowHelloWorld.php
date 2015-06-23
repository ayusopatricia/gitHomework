<?php 

namespace Hello\World;

use Hello\World\HelloWorld;

class ShowHelloWorld
{
    private $nombre;

    public function __construct($nombre)
    {
        $this->setNombre($nombre);
        $this->ShowMyName();
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function ShowMyName()
    {
        $objHelloWorld = new HelloWorld($this->getNombre());
        $objHelloWorld->say();
    }
}
