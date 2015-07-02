# Usando la clase HelloWorld

Ejemplo de uso de la clase `Hello\World\HelloWorld`:

```php
<?php

use Hello\World\HelloWorld;

$helloWorldManuel = new HelloWorld('Hola Manuel');
$helloWorldJose = new HelloWorld('Hola José');

$helloWorldManuel->say(); // muestra 'Hola Manuel'
$helloWorldManuel->say(); // muestra 'Hola José'
```