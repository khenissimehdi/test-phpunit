<?php
use PHPUnit\Framework\Constraint;
use PHPUnit\Framework\TestCase;
class TestCurrentTimeRefactored extends TestCase
{
    /*public function testgetTime()
    {
        $currentTime = new CurrentTimeRefactored();
        $this->assertThat(
            $currentTime->getTime(), $this->equalTo(strftime("%H"))
        );
    
    }*/
    /**
     * @dataProvider DatatestDayProvider
     */
    public function testgetTime(int $time,int $ex)
    {
        $object = $this->createPartialMock(CurrentTimeRefactored::class,["getTimestamp"]);
        $object ->expects($this->once())
                ->method('getTimestamp')
                ->willReturn(strtotime("$time:00:00"));
                $this->assertSame($ex,$object->getTime());
    }
    public function DatatestDayProvider()
   {
    return[
        [14,14],
        [10,10],
        [18,18],
        [4,4],
    ];
}
    /*
   public function testgetTimeOfday(int $time , string $ex)
   {
     $object = $this->createPartialMock(CurrentTimeRefactored::class,["getTime"]);
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

 */
   }