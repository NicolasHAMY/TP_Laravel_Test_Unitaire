<?php


namespace Tests\Unit;
// Ancien use pour test case
// use PHPUnit\Framework\TestCase;

use Tests\TestCase;

class AppelRouteTestTest extends TestCase
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
        $response->assertSuccessful();
        //$this->assertResponseOk();
        $this->assertEquals('coucou', $response->getContent());

    }

}
