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
        $result = $this->logic->add(2,3); //llama al metodo add de Logic con los argumentos 2 y 3
        $this->assertEquals(5, $result); //verifica que el resultado sea igual a 5
    }

    public function testRestar(){
        $result = $this->logic->restar(5,2); //llama al metodo restar de Logic con los argumentos 5 y 2
        $this->assertEquals(3, $result); //verifica que el resultado sea igual a 3
    }

    public function testMul(){
        $result = $this->logic->mul(2,3); //llama al metodo add de Logic con los argumentos 2 y 3
        $this->assertEquals(6, $result); //verifica que el resultado sea igual a 6
    }
    public function testDiv(){
        $result = $this->logic->div(6,2); //llama al metodo add de Logic con los argumentos 6 y 2
        $this->assertEquals(3, $result); //verifica que el resultado sea igual a 3
    }

    public function testverdadero()
    {
        $this->assertTrue(true);
    }

    public function testfalso()
    {
        $this->assertFalse(false);
    }

    public function testigualdad()
    {
    $result = $this->logic->igualdad(2,2); //llama al metodo add de Logic con los argumentos 6 y 2
    $this->assertEquals(3, 3, $result); //verifica que el resultado sea igual a 
    }

    public function testdiferente()
    {
    $this->assertNotEquals(1, 3); //verifica que el resultado sea igual a 
    }

    public function testArrayCuente()
    {
        $array = [1,2,3];
        $this->assertCount(3,$array);
    }

    public function testnulo()
    {
    $valor = null;    
    $this->assertNull($valor); //verifica que el resultado sea igual a 
    }

    public function testnonulo()
    {
    $valor = 'hola';    
    $this->assertNotNull($valor); //verifica que el resultado sea igual a 
    }
    public function testmayormenor()
    {
    $valor = '5';    
    $this->assertGreaterThanOrEqual(5, $valor); //verifica que el resultado sea igual a 
    }
}
