<?php
use PHPUnit\Framework\Constraint;
use PHPUnit\Framework\TestCase;
class CurrentTimeWithDateTime extends TestCase
{
    /*public function testgetTime()
    {
        $currentTime = new CurrentTimeRefactored();
        $this->assertThat(
            $currentTime->getTime(), $this->equalTo(strftime("%H"))
        );
    
    }*/
    
   
   /* public function testgetTime(int $time,int $ex)
    {
        $object = $this->createPartialMock(CurrentTimeWithDateTime::class,["getTimestamp"]);
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
}*/
/**
     * @dataProvider DatatestDayofProvider
     */
    
   public function testgetTimeOfday(int $time , int $ex)
   {
    $stub = $this->createStub(DateTime::class);
    //$time=$stub->format('H');
   
    $stub->method('format')
         ->with('H')
         ->willReturn($time);
    

     
     $object = $this->createPartialMock(CurrentTimeWithDateTime::class,["getDateTime"]);
     $object->expects($this->once())
        ->method('getDateTime')
        ->willReturn($stub);

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
/**
     * @dataProvider providerGetTime
     */
    public function testGetTime(int $time): void
    {
        
        $currentTimeMock = $this->createPartialMock(CurrentTimeRefactoredWithConstants::class, ['getTimestamp']);
       
        $currentTimeMock->method('getTimestamp')
            ->willReturn(strtotime("$time:00:00"));

      
        $currentTimeMock->expects($this->once())
            ->method('getTimeStamp');

        $this->assertSame($time, $currentTimeMock->getTime());
    }

    public function providerGetTime()
    {
        return [
             [0],
            [3],
            [6],
            [12],
            [23],
        ];
    }
   }
