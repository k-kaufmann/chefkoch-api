<?php

declare(strict_types=1);

namespace chefkoch\clients;

use chefkoch\mapper\CategoryMapper;
use chefkoch\model\Category;
use GuzzleHttp\Client;

class CategoryClient
{
    private Client $client;
    private CategoryMapper $categoryMapper;

    public function __construct(Client $client, CategoryMapper $categoryMapper)
    {
        $this->client = $client;
        $this->categoryMapper = $categoryMapper;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        $categories = [];
        $response = $this->client->request("GET");
        $response = json_decode($response->getBody()->getContents(), true);

        foreach ($response as $item) {
            $categories[] = $this->categoryMapper->mapArray($item);
        }

        return $categories;
    }
}
