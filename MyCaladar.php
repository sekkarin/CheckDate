<?php


class MyCalendar
{
    // public string $nday = "5";
    // public string $nmonth = "5";
    public function checkDayOfDate($nday, $nmonth)
    {
        if(!($nday>0 && $nday <= 7)){

            return "error day";
        }
        if(!($nmonth>0 && $nmonth <= 12)){
            return "error month";
        }
        $datetime = DateTime::createFromFormat('d/m/Y', $nday."/".$nmonth.'/2021');
        if($datetime->format('l')){
            return $datetime->format('l');

        }else{
            return "error";
        }
    }
}
?>