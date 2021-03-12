<?php
declare(strict_types=1);

namespace chefkoch;

use chefkoch\clients\RecipeClient;
use chefkoch\clients\UserClient;
use chefkoch\mapper\RecipeMapper;
use chefkoch\mapper\UserMapper;
use GuzzleHttp\Client;

class ChefkochFactory
{
    private array $basicUserClientConfiguration = [
        'base_uri' => 'https://api.chefkoch.de/v2/users/',
        'timeout'  => 2.0,
    ];

    private array $basicRecipeClientConfiguration = [
        'base_uri' => 'https://api.chefkoch.de/v2/recipes/',
        'timeout'  => 2.0,
    ];

    public function createApiClient(): ApiClient
    {
        return new ApiClient(
            new UserClient(
                new Client($this->basicUserClientConfiguration),
                new UserMapper()
            ),
            new RecipeClient(
                new Client($this->basicRecipeClientConfiguration),
                new RecipeMapper()
            )
        );
    }
}
