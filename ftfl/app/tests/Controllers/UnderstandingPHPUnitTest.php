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


    public function testAssertSame()
    {
        $greeting =null;
        $this->assertSame(null,$greeting,$greeting); //assertSame is checking with strict equality
    }

    public function testAssertNotSame()
    {
        $greeting =null;
        $this->assertNotSame(0,$greeting,$greeting); //null & 0 has same value but different data type
    }

    public function testAssertContains()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
        $this->assertContains('Dayle', $names); //assertFunction(NEEDLE, HAYSTACK, OPTIONAL MESSAGE)
    }

    public function testAssertNotContains()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
        $this->assertNotContains('Troll', $names); //assertFunction(NEEDLE, HAYSTACK, OPTIONAL MESSAGE)
    }

    public function testAssertArrayHasKey()
    {
        $family = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
             ];

        $this->assertArrayHasKey('parents', $family); //array has a key same as  needle
    }

}


