<?php 

class FloatCalculator {

    static public function add(float $first_float,float $second_float):float{
        return  $first_float + $second_float;
    }

    static public function subtract(float $first_float , float $second_float):float {
        return  $first_float - $second_float;

    }

    static public function  multiply(float $first_float,float $second_float):float {
        return  $first_float * $second_float;

    }

    static public function divide(float $first_float,float $second_float):float {
        if ($second_float == 0){
            throw new  RunTimeException("you are really trying to divide by 0 ?");
        }
        else{
            return  $first_float / $second_float;
        }
       

    }

    static public function modulus(float $first_float, float $second_float):float {
        if ($second_float == 0){
            throw new  RunTimeException("you are really trying to divide by 0 ?");
        }
        return  $first_float % $second_float;

    }

     static public function  sum(float ...$floats):float {
            $result= 0;
        foreach ($floats as $single_floats) {
            $result += $single_floats;
        }
        return $acc;

    }






   
}
 //check if we didn't break the code 
    //test uniter tester le methodes sans les dependce 
    // exmple : createuser depend d'une autre classe donc on va crete fake object 
    //test integration links btw methodes 
    // test input of web 