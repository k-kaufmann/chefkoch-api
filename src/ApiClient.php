<?php
declare(strict_types=1);

namespace chefkoch;

use chefkoch\clients\CategoryClient;
use chefkoch\clients\RecipeClient;
use chefkoch\clients\UserClient;
use chefkoch\model\Category;
use chefkoch\model\Recipe;
use chefkoch\model\User;

class ApiClient
{
    private UserClient $userClient;
    private RecipeClient $recipeClient;
    private CategoryClient $categoryClient;

    public function __construct(
        UserClient $userClient,
        RecipeClient $recipeClient,
        CategoryClient $categoryClient
    ) {
        $this->userClient = $userClient;
        $this->recipeClient = $recipeClient;
        $this->categoryClient = $categoryClient;
    }

    public function getUserById($id): User
    {
        return $this->userClient->getById($id);
    }

    public function getRecipes(string $offset = "0"): array
    {
        return $this->recipeClient->getRecipes($offset);
    }

    /**
     * @param Category[] $categories
     * @param string $offset
     * @return array
     */
    public function getRecipesByCategories(array $categories, string $offset = "0"): array
    {
        return $this->recipeClient->getRecipesByCategories($categories, $offset);
    }

    public function getRecipeById(string $id): Recipe
    {
        return $this->recipeClient->getRecipeById($id);
    }

    public function getCateogries(): array
    {
        return $this->categoryClient->getCategories();
    }

}
