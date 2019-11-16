<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint;
class CurrentTimeTest extends TestCase
{
     
    public function testgetTime()
    {
        $currentTime = new CurrentTime();
        $this->assertThat(
            $currentTime->getTime(), $this->equalTo(strftime("%l"))
        );
    }
    /**
     * @dataProvider dataTestTimeOfDay
     */
    public function testTimeOfDay(int $time,string $expected)
    {
        $currentTime=$this->createPartialMock(CurrentTime::class,["getTime"]);
        $currentTime->expects($this->once())
        ->method('getTime')
        ->willReturn($time);
        //->willReturn(14);
        //$currentTime->getTimeOfDay();
        $this->assertSame($expected,$currentTime->getTimeOfDay());
        
    }
    public function dataTestTimeOfDay()
    {
        return[
            [14,"Noon"],
            [10,"Morning"],
            [18,"Evening"],
            [4,"Night"],
        ];
    }
    

}