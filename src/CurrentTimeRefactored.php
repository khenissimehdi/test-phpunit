<?php
class CurrentTimeRefactored
{
    public function getTime():int
    {
        return strftime("%H",$this->getTimestamp());

    }
    public function getTimeOfDay():string
    {
        $chaine="";
        $method=$this->getTime();
        if($method<6)
        {
            $chaine="Night";
        }
        if((($method)>=6) and ($method<12))
        {
            $chaine="Morning";
        }
        if(($method>=12)and ($method<18))
        {
            $chaine="Noon";
        }
        if(($method>=18)and ($method<24))
        {
            $chaine="Evening";
        }
        return $chaine;

    }
    public function getTimestamp():int
    {
        return time();

    } 

}