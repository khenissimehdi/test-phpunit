<?php
class CurrentTimeRefactoredWithConstants
{
    private const NIGHT = 1;
    private const MORNING = 2;
    private const  NOON = 3;
    private const EVENING = 4;


    public function getTime():int
    {
        $now = $this->getDateTime();    
        return date_format($now,format('%H'));
       

    }
    public function getTimeOfDay():int
    {
        $chaine=0;
        $method=$this->getTime();
        if($method<6)
        {
            $chaine=1;
        }
        if((($method)>=6) and ($method<12))
        {
            $chaine=2;
        }
        if(($method>=12)and ($method<18))
        {
            $chaine=3;
        }
        if(($method>=18)and ($method<24))
        {
            $chaine=4;
        }
        return $chaine;

    }
    public function getDateTime():DateTime
    {
        return new DateTime();

    } 

}