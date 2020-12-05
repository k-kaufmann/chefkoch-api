<?php
declare(strict_types=1);

namespace chefkoch;

use chefkoch\model\User;

class ApiClient
{
    private UserClient $userClient;

    public function __construct(UserClient $userClient)
    {
        $this->userClient = $userClient;
    }

    public function getUserById($id): User
    {
        return $this->userClient->getById($id);
    }

}
