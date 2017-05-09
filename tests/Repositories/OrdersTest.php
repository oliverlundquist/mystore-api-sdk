<?php

namespace MystoreApiSdk\Tests\Repositories;

use MystoreApiSdk\Tests\TestCase;
use MystoreApiSdk\Facades\Orders;

class OrdersTest extends TestCase
{
    /**
     * Default preparation for each test.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Default tear-down process for each test.
     *
     * @return void
     */
    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * Test orders create method with arguments.
     *
     * @return void
     */
    public function testCreateWithArguments()
    {
        $this->assertSame(['key' => 'value'], Orders::create(['key' => 'value']));
    }

    /**
     * Test orders create method without arguments.
     *
     * @return void
     */
    public function testCreateWithoutArguments()
    {
        $this->assertSame([], Orders::create());
    }
}
