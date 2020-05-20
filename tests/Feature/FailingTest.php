<?php

namespace Tests\Feature;

use Illuminate\Container\Container;
use Illuminate\Contracts\Container\Container as ContainerInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FailingTest extends TestCase
{
    /**
     * @dataProvider basicTestDataProvider
     */
    public function testBasicTest()
    {
        $this->json('GET', '/api/test')
            ->assertStatus(200)
            ->dump();

        // None of the checks above works.
        // Remove ->dump() call to pass the test.

        $this->assertSame('App\\', Container::getInstance()->getNamespace());
        //$this->assertSame('App\\', app(ContainerInterface::class)->getNamespace());
        //$this->assertSame('App\\', app()->getNamespace());
    }

    public function basicTestDataProvider()
    {
        return [
            [],
            [],
            [],
            [],
            [],
        ];
    }
}
