<?php
declare(strict_types=1);

namespace chefkoch\mapper;

use chefkoch\exceptions\RecipeMappingException;
use chefkoch\model\Recipe;
use DateTime;
use Exception;

class RecipeMapper
{
    public function mapArray(array $recipe): Recipe
    {
        try {
            return new Recipe(
                $recipe["id"],
                $recipe["type"],
                $recipe["title"],
                $recipe["subtitle"],
                $recipe["owner"],
                $recipe["rating"],
                $recipe["difficulty"],
                $recipe["hasImage"],
                $recipe["hasVideo"],
                $recipe["previewImageId"],
                $recipe["preparationTime"],
                $recipe["isSubmitted"],
                $recipe["isRejected"],
                new DateTime($recipe["createdAt"]),
                $recipe["imageCount"],
                $recipe["editor"],
                ($recipe["submissionDate"] == null) ? null : new DateTime($recipe["submissionDate"]),
                $recipe["isPremium"],
                $recipe["status"],
                $recipe["servings"],
                $recipe["kCalories"],
                $recipe["instructions"],
                $recipe["miscellaneousText"],
                $recipe["ingredientsText"],
                $recipe["tags"],
                $recipe["fullTags"],
                $recipe["viewCount"],
                $recipe["cookingTime"],
                $recipe["restingTime"],
                $recipe["totalTime"],
                $recipe["ingredientGroups"],
                $recipe["categoryIds"],
                $recipe["recipeVideoId"],
                $recipe["isIndexable"],
                $recipe["siteUrl"]
            );
        } catch (Exception $exception) {
            throw new RecipeMappingException($exception->getMessage());
        }
    }
}
