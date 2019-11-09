<?php 
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
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
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
            [0, 0, 0],
            [0, 1, -1],
            [1, 0, 1],
            [1, 1, 0]
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
            [0, 0, 0],
            [0, 1, 0],
            [1, 0, 0],
            [1, 1, 1]
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
            [4, 2, 2],
            [20,2 , 10]
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
            [4, 2, 0],
            [20,2 , 0]
        ];
    }
    public function testModulusByZero()
    {
        $this->expectException(RunTimeException::class);
        FLoatCalculator::modulus(5,0);
    


    }
    public function testSum(float ...$floats,float $expected)
    {
        
    }


}
