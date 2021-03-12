<?php
declare(strict_types=1);

namespace chefkoch\clients;

use chefkoch\mapper\UserMapper;
use chefkoch\model\User;
use GuzzleHttp\Client;

class UserClient
{
    private Client $client;
    private UserMapper $userMapper;

    public function __construct(Client $client, UserMapper $userMapper)
    {
        $this->client = $client;
        $this->userMapper = $userMapper;
    }

    public function getById(string $id): User
    {
        $response = $this->client->get($id);
        return $this->userMapper->mapArray(
            json_decode(
                $response->getBody()->getContents(),
                true
            )
        );
    }
}
