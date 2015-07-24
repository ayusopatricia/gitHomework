<?php

namespace Hello\World;

/**
*
* Comment 
*
*/
class HelloWorld
{

    private $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function say()
    {
        echo "Hola mundo<br>";
		echo $this->getNombre();
    }
	
	public function getNombre()
	{
		return $this->nombre;
	}
}
