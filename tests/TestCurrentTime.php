<?php
use PHPUnit\Framework\Constraint;
use PHPUnit\Framework\TestCase;
class TestCurrentTime extends TestCase
{
    public function testgetTime()
    {
        $currentTime = new CurrentTime();
        $this->assertThat(
            $currentTime->getTime(), $this->equalTo(strftime("%H"))
        );
    
    }
    /**
     * @dataProvider DatatestDayProvider
     */
   public function testgetTimeOfday(int $time , string $ex)
   {
     $object = $this->createPartialMock(CurrentTime::class,["getTime"]);
     $object->expects($this->once())
        ->method('getTime')
        ->willReturn($time);

        $this->assertSame($ex,$object->getTimeOfDay());

   }
   public function DatatestDayProvider()
   {
    return[
        [14,"Noon"],
        [10,"Morning"],
        [18,"Evening"],
        [4,"Night"],
    ];


   }

}
