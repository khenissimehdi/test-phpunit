<?php
use PHPUnit\Framework\TestCase;

class TestFloatCalculator extends TestCase
{
    /**
     * @dataProvider AdditionPorvider
     */
    public function testAdd(float $a,float $b,float $ex)
    {
        $this->assertSame($ex,FloatCalculator::add($a,$b));
    }
    public function AdditionPorvider()
    {
        return 
        [
            [2.0,2.0,4],
        ];
    }
    /**
     * @dataProvider  subProvider
     */
    public function testSubb(float $a,float $b,float $ex)
    {
        $this->assertSame($ex,FloatCalculator::subtract($a,$b));

    }
    public function subProvider()
    {
        return
        [
            [3,1,2],
            [4,2,2]
        ];
    }

    /**
     * @dataProvider multiProvider
     */
    public function testMulti(float $a,float $b,float $ex)
    {
        $this->assertSame($ex,FloatCalculator::multiply($a,$b));
    }
    public function multiprovider()
    {
        return 
        [
            [1,1,1],
            [2,2,4]
        ];

    }
    /**
     * @dataProvider divideProvider
     */
    public function testdivide(float $a,float $b,float $ex)
    {
        $this->assertSame($ex,FloatCalculator::divide($a,$b));

    }
    public function divideProvider()
    {
        return 
        [
            [4,2,2],
            [8,4,2]
        ];
    }
    public function testDivideByZero()
    {
        $this->expectException(RunTimeException::class);
        FloatCalculator::divide(5,0);

    }
    /**
     * @dataProvider MudoloProvider
     */
    public function testMudolo(float $a,float $b,float $ex)
    {
        $this->assertSame($ex,FloatCalculator::modulus($a,$b));

    }
    public function MudoloProvider()
    {
        return
        [
            [4.0, 2.0, 0],
            [20.0,2.0 , 0]

        ];
    }
    public function testModulusByZero()
    {
        $this->expectException(RunTimeException::class);
        FloatCalculator::modulus(5,0);
    }
    /**
     * @dataProvider SumProvider
     */
    public function testSum($ex,float ...$floats)
    {
        $this->assertSame($ex, FloatCalculator::sum(...$floats));
    }
    public function SumProvider()
    {
        return [[4.0,2,0,2,0]];
    }


}