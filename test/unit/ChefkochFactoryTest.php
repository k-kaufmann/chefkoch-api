<?php

namespace chefkoch\test;

use chefkoch\ApiClient;
use chefkoch\ChefkochFactory;
use PHPUnit\Framework\TestCase;

class ChefkochFactoryTest extends TestCase
{

    public function testCreateApiClient()
    {
        $factory = new ChefkochFactory();

        self::assertInstanceOf(ApiClient::class, $factory->createApiClient());
    }
}
