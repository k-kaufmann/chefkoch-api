<?php
declare(strict_types=1);

namespace chefkoch\clients;

use chefkoch\exceptions\RecipeSimpleMappingException;
use chefkoch\mapper\RecipeMapper;
use chefkoch\mapper\RecipeSimpleMapper;
use chefkoch\model\Category;
use chefkoch\model\Recipe;
use chefkoch\model\RecipeSimple;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class RecipeClient
{
    private Client $client;
    private RecipeSimpleMapper $recipeSimpleMapper;
    private RecipeMapper $recipeMapper;

    public function __construct(Client $client, RecipeSimpleMapper $recipeSimpleMapper, RecipeMapper $recipeMapper)
    {
        $this->client = $client;
        $this->recipeSimpleMapper = $recipeSimpleMapper;
        $this->recipeMapper = $recipeMapper;
    }

    /**
     * @param string $offset
     * @return RecipeSimple[]
     */
    public function getRecipes(string $offset = "0"): array
    {
        $recipesSimple = [];
        $response = $this->client->request(
            "GET",
            '',
            [
                "query" => [
                    "offset" => $offset,
                    "orderBy" => "createdAt"
                ]
            ]
        );
        $response = json_decode($response->getBody()->getContents(), true);
        foreach ($response['results'] as $result) {
            try {
                $recipesSimple[] = $this->recipeSimpleMapper->mapArray($result["recipe"]);
            } catch (RecipeSimpleMappingException $recipeMappingException) {
                // TODO logging for recipeMappingExceptions
            }
        }
        return $recipesSimple;
    }

    /**
     * @param array $categories
     * @param string $offset
     * @return Category[]
     * @throws GuzzleException]
     */
    public function getRecipesByCategories(array $categories, string $offset): array
    {
        $recipesSimple = [];
        $response = $this->client->request(
            "GET",
            '',
            [
                "query" => [
                    "offset" => $offset,
                    "orderBy" => "createdAt",
                    "categories" => $this->buildQueryString($categories)
                ]
            ]
        );

        $response = json_decode($response->getBody()->getContents(), true);
        foreach ($response['results'] as $result) {
            try {
                $recipesSimple[] = $this->recipeSimpleMapper->mapArray($result["recipe"]);
            } catch (RecipeSimpleMappingException $recipeMappingException) {
                // TODO logging for recipeMappingExceptions
            }
        }
        return $recipesSimple;
    }

    public function getRecipeById(string $id): Recipe
    {
        $response = $this->client->get($id);
        return $this->recipeMapper->mapArray(
            json_decode(
                $response->getBody()->getContents(),
                true
            )
        );
    }

    private function buildQueryString(array $queryParams): string
    {
        $query = "";
        foreach ($queryParams as $queryParam) {
            $query = $query . $queryParam . ",";
        }
        return $query;
    }
}
