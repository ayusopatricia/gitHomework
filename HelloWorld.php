<?php

namespace Hello\World;

class HelloWorld
{

    private $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function say()
    {
        echo $this->nombre;
    }
}
