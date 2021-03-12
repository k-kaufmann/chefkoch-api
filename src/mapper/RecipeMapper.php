<?php
declare(strict_types=1);

namespace chefkoch\mapper;

use chefkoch\exceptions\RecipeMappingException;
use chefkoch\model\RecipeSimple;
use DateTime;
use Exception;

class RecipeMapper
{
    public function mapArray(array $recipeSimple): RecipeSimple
    {
        try {
            return new RecipeSimple(
                $recipeSimple["id"],
                (int)$recipeSimple["type"],
                $recipeSimple["title"],
                $recipeSimple["subtitle"],
                $recipeSimple["owner"],
                $recipeSimple["rating"],
                (int)$recipeSimple["difficulty"],
                (bool)$recipeSimple["hasImage"],
                (bool)$recipeSimple["hasVideo"],
                $recipeSimple["previewImageId"],
                (int)$recipeSimple["preparationTime"],
                (bool)$recipeSimple["isSubmitted"],
                (bool)$recipeSimple["isRejected"],
                new DateTime($recipeSimple["createdAt"]),
                (int)$recipeSimple["imageCount"],
                $recipeSimple["editor"],
                ($recipeSimple["id"] === null) ? null : new DateTime($recipeSimple["id"]),
                (bool)$recipeSimple["isPremium"],
                (int)$recipeSimple["status"],
                $recipeSimple["id"],
            );
        } catch (Exception $exception) {
            throw new RecipeMappingException($exception->getMessage());
        }
    }
}
