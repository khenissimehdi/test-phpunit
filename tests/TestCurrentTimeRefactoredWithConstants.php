<?php
use PHPUnit\Framework\Constraint;
use PHPUnit\Framework\TestCase;
class TestCurrentTimeRefactoredWithConstants extends TestCase
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
        //$stub = $this->createStub(DateTime::class);
        $object = $this->createPartialMock(CurrentTimeRefactoredWithConstants::class,["getTimestamp"]);
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
/**
     * @dataProvider DatatestDayofProvider
     */
    
   public function testgetTimeOfday(int $time , int $ex)
   {
     $object = $this->createPartialMock(CurrentTimeRefactoredWithConstants::class,["getTime"]);
     $object->expects($this->once())
        ->method('getTime')
        ->willReturn($time);

        $this->assertSame($ex,$object->getTimeOfDay());

   }
   public function DatatestDayofProvider()
   {
    return[
        [14,3],
        [10,2],
        [18,4],
        [4,1],
    ];


   }
   }