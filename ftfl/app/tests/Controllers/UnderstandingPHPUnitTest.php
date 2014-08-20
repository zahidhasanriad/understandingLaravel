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


    public function testAssertEquals()
    {
        $greeting = 'Hello';
        $this->assertEquals('Hello',$greeting,$greeting); //assertFunction(Expected Message, Actual Message, Optional Message)
    }


    public function testAssertNotEquals()
    {
        $greeting = 'Hello';
        $this->assertNotEquals('Hi',$greeting,$greeting);
    }



}


