<?php

namespace chefkoch\test;

use chefkoch\model\User;
use chefkoch\UserClient;
use chefkoch\UserMapper;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class UserClientTest extends TestCase
{

    public function testConstruct()
    {
        /** @var MockObject|Client $client */
        $client = $this->createMock(Client::class);
        /** @var MockObject|UserMapper $userMapper */
        $userMapper = $this->createMock(UserMapper::class);

        $userClient = new UserClient($client, $userMapper);

        self::assertInstanceOf(UserClient::class, $userClient);
    }

    public function testGetById()
    {
        $clientMockHandler = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . "/../testResponse/user.json"))
        ]);
        $handlerStack = HandlerStack::create($clientMockHandler);
        $client = new Client(['handler' => $handlerStack]);
        $userClient = new UserClient($client, new UserMapper());
        $expectedUser = new User("id", "name", 1, "role", false, false, false);

        $actualUser = $userClient->getById("");

        self::assertEquals($expectedUser->getId(), $actualUser->getId());
        self::assertEquals($expectedUser->getName(), $actualUser->getName());
        self::assertEquals($expectedUser->getRank(), $actualUser->getRank());
        self::assertEquals($expectedUser->getRole(), $actualUser->getRole());
        self::assertEquals($expectedUser->hasAvatar(), $actualUser->hasAvatar());
        self::assertEquals($expectedUser->hasPaid(), $actualUser->hasPaid());
        self::assertEquals($expectedUser->isDeleted(), $actualUser->isDeleted());
    }
}
