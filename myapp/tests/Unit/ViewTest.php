<?php


namespace Tests\Unit;

// Ancien use pour test case
// use PHPUnit\Framework\TestCase;

use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        //Arrange

        //Act

        $response = $this->call('GET', '/');

        //Asserts
        $response->assertViewHas('message', 'yo');

    }


}
