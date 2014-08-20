<?php

class UnderstandingPHPUnitTest extends TestCase{


    public function testAssertTrue()
    {
        $greeting = 'Hello';
        $this->assertTrue($greeting === 'Hello', $greeting); //assertFunction(Actual Message, Optional Message)
    }



    public function testAssertFalse()
    {
        $greeting = 'Hello';
        $this->assertFalse($greeting == 'Hi', $greeting); //
    }





}


