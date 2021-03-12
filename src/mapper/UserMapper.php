<?php
declare(strict_types=1);

namespace chefkoch\mapper;

use chefkoch\model\User;

class UserMapper
{
    public function mapArray(array $user) : User
    {
        return new User(
            $user["id"],
            $user["username"],
            $user["rank"],
            $user["role"],
            $user["hasAvatar"],
            $user["hasPaid"],
            $user["deleted"]
        );
    }
}
