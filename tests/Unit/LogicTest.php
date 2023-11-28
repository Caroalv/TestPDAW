<?php
//IMPORTAR LOGIC.PHP PARA UTILIZAR SUS FUNCIONES

require_once __DIR__ .'/logic/logic.php';

//namespace Tests\Unit;

use PHPUnit\Framework\TestCase; //importa la clase base de php unit

class LogicTest extends TestCase //esta define una clase de prueba que hereda de TestCase
{
    /**
     * A basic unit test example.
     */

    private $logic; //propieda para almacenar una instancia de la clase logic
    protected function setUP(): void //metodo que se ejecuta antes de cada prueba
    {
        $this->logic = new logic();
    }

    //TEST
    //PRUEBA PARA SUMAR

    public function testSumar(){
        $result = $this->logic->add(2,3); //llama al metodo add de LOgic con los argumentos 2 y 3
        $this->assertEquals(5, $result); //verifica que el resultado sea igual a 5
    }
}
