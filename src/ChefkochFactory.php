<?php
declare(strict_types=1);

namespace chefkoch;

use chefkoch\clients\CategoryClient;
use chefkoch\clients\RecipeClient;
use chefkoch\clients\UserClient;
use chefkoch\mapper\CategoryMapper;
use chefkoch\mapper\RecipeMapper;
use chefkoch\mapper\RecipeSimpleMapper;
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

    private array $basicCategoryClientConfiguration = [
        'base_uri' => 'https://api.chefkoch.de/v2/recipes/categories',
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
                new RecipeSimpleMapper(),
                new RecipeMapper()
            ),
            new CategoryClient(
                new Client($this->basicCategoryClientConfiguration),
                new CategoryMapper()
            )
        );
    }
}
