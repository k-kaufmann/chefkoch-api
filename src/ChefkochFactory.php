<?php
declare(strict_types=1);

namespace chefkoch;

use GuzzleHttp\Client;

class ChefkochFactory
{
    private array $basicUserClientConfiguration = [
        'base_uri' => 'https://api.chefkoch.de/v2/users/',
        'timeout'  => 2.0,
    ];

    public function createApiClient(): ApiClient
    {
        return new ApiClient(
            new UserClient(
                new Client($this->basicUserClientConfiguration),
                new UserMapper()
            )
        );
    }
}
