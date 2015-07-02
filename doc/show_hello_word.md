# Usando la clase ShowHelloWorld

Ejemplo de uso de la clase `Hello\World\ShowHelloWorld`:

```php
<?php

use Hello\World\ShowHelloWorld;

$helloWorldManuel = new ShowHelloWorld('Hola Manuel');
$helloWorldJose = new ShowHelloWorld('Hola José');

$helloWorldManuel->ShowMyName(); // muestra 'Hola Manuel'
$helloWorldManuel->ShowMyName(); // muestra 'Hola José'
```