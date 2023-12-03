<?php
//PRUEBAS UNITARIAS BASICAS DE SENTIDO LOGICO



    class logic {
        //EJERCICIO #1: funcion para retornar una suma de A ++ B

        //suma

        public function add($a, $b){
            return $a + $b;

        }

        public function restar($a, $b){
            return $a - $b;

        }

        public function mul($a, $b){
            return $a * $b;

        }

        public function div($a, $b){
            return $a/$b;

        }

        
        public function verdadero($valor)
        {
        return $valor === true;
        }
        public function falso($valor)
        {
        return $valor === false;
        }

        public function igualdad($a, $b){
        return $a === $b;
        }

        public function diferente($a, $b){
            return $a !== $b;
    
            }


        public function checkArrayCount($count, $array)
        {
            return count($array)=== $count;
        }
        public function nulo($valor)
        {
            return is_null($valor);
        } 

        public function nonulo($valor)
        {
            return !is_null($valor);
        } 

        public function mayormenor($valor, $comparacion)
        {
            return $valor >=$comparacion;
        } 
    }
?>