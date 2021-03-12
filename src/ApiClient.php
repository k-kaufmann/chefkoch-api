<?php
declare(strict_types=1);

namespace chefkoch;

use chefkoch\clients\RecipeClient;
use chefkoch\clients\UserClient;
use chefkoch\model\User;

class ApiClient
{
    private UserClient $userClient;
    private RecipeClient $recipeClient;

    public function __construct(UserClient $userClient, RecipeClient $recipeClient)
    {
        $this->userClient = $userClient;
        $this->recipeClient = $recipeClient;
    }

    public function getUserById($id): User
    {
        return $this->userClient->getById($id);
    }

    public function getRecipes(string $offset = "0"): array
    {
        return $this->recipeClient->getRecipes($offset);
    }

    public function getRecipesByCategories(string $category, string $offset = "0"): array
    {
        return $this->recipeClient->getRecipesByCategories($category, $offset);
    }

}
