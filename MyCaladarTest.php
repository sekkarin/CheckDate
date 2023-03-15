<?php declare(strict_types=1);
include "MyCaladar.php";
use PHPUnit\Framework\TestCase;

class MyCaladarTest extends TestCase
{
    public function testDate()
    {
        $c = new MyCalendar();
        $this->assertEquals("Monday", $c->checkDayOfDate(7,6));
        // $this->assert($c->checkDayOfDate(5,6));
    }
}