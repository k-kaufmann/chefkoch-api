<?php

namespace chefkoch\test;

use chefkoch\ApiClient;
use chefkoch\model\User;
use chefkoch\UserClient;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ApiClientTest extends TestCase
{

    public function testGetUserById()
    {
        $expectedUser = new User("id", "name", 1, "role", false, false, false);
        /** @var UserClient|MockObject $userClient */
        $userClient = $this->createMock(UserClient::class);
        $userClient->method("getById")->willReturn($expectedUser);
        $apiClient = new ApiClient($userClient);

        self::assertEquals($expectedUser, $apiClient->getUserById(""));
    }

    public function testConstruct()
    {
        /** @var UserClient|MockObject $userClient */
        $userClient = $this->createMock(UserClient::class);

        $apiClient = new ApiClient($userClient);

        self::assertInstanceOf(ApiClient::class, $apiClient);
    }
}
