<?php

namespace chefkoch\test;

use chefkoch\model\User;
use chefkoch\UserMapper;
use PHPUnit\Framework\TestCase;

class UserMapperTest extends TestCase
{

    public function testMapArray()
    {
        $userMapper = new UserMapper();

        $expectedUser = new User("id", "name", 1, "role", false, false, false);

        $actualUser = $userMapper->mapArray(
            json_decode(file_get_contents(__DIR__ . "/../testResponse/user.json"), true)
        );

        self::assertEquals($expectedUser->getId(), $actualUser->getId());
        self::assertEquals($expectedUser->getName(), $actualUser->getName());
        self::assertEquals($expectedUser->getRank(), $actualUser->getRank());
        self::assertEquals($expectedUser->getRole(), $actualUser->getRole());
        self::assertEquals($expectedUser->hasAvatar(), $actualUser->hasAvatar());
        self::assertEquals($expectedUser->hasPaid(), $actualUser->hasPaid());
        self::assertEquals($expectedUser->isDeleted(), $actualUser->isDeleted());
    }
}
