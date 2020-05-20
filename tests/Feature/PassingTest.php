<?php

namespace Tests\Feature;

use Illuminate\Container\Container;
use Illuminate\Contracts\Container\Container as ContainerInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PassingTest extends TestCase
{
    /**
     * @dataProvider basicTestDataProvider
     */
    public function testBasicTest()
    {
        $this->json('GET', '/api/test')
            ->assertStatus(200);

        $this->assertSame('App\\', Container::getInstance()->getNamespace());
        $this->assertSame('App\\', app(ContainerInterface::class)->getNamespace());
        $this->assertSame('App\\', app()->getNamespace());
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
