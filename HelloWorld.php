<?php

namespace Hello\World;

class HelloWorld
{
	private $nombre;
    protected $firstName;
	protected $lastName;
	protected $age;
	protected $country;

    public function __construct($nombre, $pFirstName, $pLastName, $pAge, $pCountry)
    {
		$this->nombre = $nombre;
        $this->firstName = $pFirstName;
		$this->lastName = $pLastNamep;
		$this->age = $pAge;
		$this->country = $pCountry;
    }
	
	public function say()
	{
        echo $this->nombre;
	}

    public function getFirstName()
    {
        return $this->firstName;
    }
	
	public function getLastName()
	{
		return $this->lastName;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getCountry()
	{
		return $this->country;
	}
}

?>
