<?php 

namespace Hello\World;

use Hello\World\HelloWorld;

class ShowUser extends HelloWorld
{
    public function showMessage()
    {
       echo "My name is " . $this->getLastName() . " " . $this->getFirstName() . ", I've " . $this->getAge() . " years old, and I'm living in " . $this->getCountry();
    }
}

?>
