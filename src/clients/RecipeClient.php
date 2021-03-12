<?php
declare(strict_types=1);

namespace chefkoch\clients;

use chefkoch\exceptions\RecipeMappingException;
use chefkoch\mapper\RecipeMapper;
use chefkoch\model\RecipeSimple;
use GuzzleHttp\Client;

class RecipeClient
{
    private Client $client;
    private RecipeMapper $recipeMapper;

    public function __construct(Client $client, RecipeMapper $recipeMapper)
    {
        $this->client = $client;
        $this->recipeMapper = $recipeMapper;
    }

    /**
     * @param string $offest
     * @return RecipeSimple[]
     */
    public function getRecipies(string $offest = "0"): array
    {
        $recipesSimple = [];
        $response = $this->client->request(
            "GET",
            '',
            [
                "query" => [
                    "offset" => $offest,
                    "orderBy" => "createdAt"
                ]
            ]
        );
        $response = json_decode($response->getBody()->getContents(), true);
        foreach ($response['results'] as $result) {
            try {
                $recipesSimple[] = $this->recipeMapper->mapArray($result["recipe"]);
            } catch (RecipeMappingException $recipeMappingException) {
                // TODO logging for recipeMappingExceptions
            }
        }
        return $recipesSimple;
    }
}
