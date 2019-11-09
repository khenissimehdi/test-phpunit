<?php 
/**
 * TEST:
 * phpunit --bootstrap bootstrap.php --testdox ./tests/FloatCalculatorTest.php
 */
use PHPUnit\Framework\TestCase;

class FloatCalculatorTest extends TestCase
{
    /**
     * @dataProvider addProvider
     */
    public function testAdd(float $a, float $b, float $expected)
    {
        $this->assertSame($expected, FloatCalculator::add($a,$b));
    }

    public function addProvider()
    {
        return [
            "adding zero " =>[0, 0, 0],
           "adding zero to one "=> [0, 1, 1],
           "adding one to zero "=> [1, 0, 1],
           "addinf one to one " => [1, 1, 2]
        ];
    }
     /**
     * @dataProvider substractProvider
     */
    public function testSubtract(float $a, float $b, float $expected)
    {
        $this->assertSame($expected, FloatCalculator::subtract($a,$b));
    }

    public function substractProvider()
    {
        return [
            "Subtracting zero form zero"=>[0,0,0],
            "Subtracting zero from one"=>[0,1,-1],
            "Subtracting one from zero"=>[1, 0,1],
            "Subtracting one form one"=> [1,1,0]
        ];
    }
     /**
     * @dataProvider multiplyProvider
     */
    public function testMultiply(float $a, float $b, float $expected)
    {
        $this->assertSame($expected, FloatCalculator::multiply($a,$b));
    }

    public function multiplyProvider()
    {
        return [
            "multiplying zero by zero"=>[0, 0, 0],
            "multiplying zero by one "=>[0, 1, 0],
            "multiplying one by zero "=>[1, 0, 0],
            "multiplying one  by one "=>[1, 1, 1]
        ];
    }
     /**
     * @dataProvider divideProvider
     */
    public function testDivide(float $a, float $b, float $expected)
    {
        $this->assertSame($expected, FloatCalculator::divide($a,$b));
    }

    public function divideProvider()
    {
        return [
            "divading four by two"=>[4, 2, 2],
            "divading twenty by two"=>[20,2,10]
        ];
    }
 
    public function testDivideByZero()
    {
        $this->expectException(RunTimeException::class);
        FLoatCalculator::divide(5,0);
    

    }
    /**
     * @dataProvider modulusProvider
     */

    public function testModulus(float $a, float $b, float $expected)
    {
        $this->assertSame($expected, FloatCalculator::modulus($a,$b));
    }
    

    public function modulusProvider()
    {
        return [
            " four modulus two "=>[4, 2, 0],
            "twenty modulus two "=>[20,2 , 0]
        ];
    }

    public function testModulusByZero()
    {
        $this->expectException(RunTimeException::class);
        FLoatCalculator::modulus(5,0);
    }

    /**
     * @dataProvider sumProvider
     */
    public function testSum(float $expected,float ...$floats)
    {
        $this->assertSame($expected,FloatCalculator::sum(...$floats));
    }

    public function sumProvider()
    {
        return ["the sum of two plus two  plus zero  plus  zero "=>[4,2,0,2,0]];
    }
    


}
