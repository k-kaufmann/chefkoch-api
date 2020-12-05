<?php

namespace chefkoch\test;

use chefkoch\model\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    private User $user;

    public function setUp(): void
    {
        $this->user = new User("id", "name", 0, "role", true, true, true);
    }

    public function testGetRole()
    {
        self::assertEquals("role", $this->user->getRole());
    }

    public function testGetId()
    {
        self::assertEquals("id", $this->user->getId());
    }

    public function testConstruct()
    {
        self::assertInstanceOf(User::class, $this->user);
    }

    public function testIsDeleted()
    {
        self::assertEquals(true, $this->user->isDeleted());
    }

    public function testGetName()
    {
        self::assertEquals("name", $this->user->getName());
    }

    public function testHasAvatar()
    {
        self::assertEquals(true, $this->user->hasAvatar());
    }

    public function testGetRank()
    {
        self::assertEquals(0, $this->user->getRank());
    }

    public function testHasPaid()
    {
        self::assertEquals(true, $this->user->hasPaid());
    }
}
