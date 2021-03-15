<?php
declare(strict_types=1);

namespace chefkoch\mapper;

use chefkoch\exceptions\RecipeSimpleMappingException;
use chefkoch\model\RecipeSimple;
use DateTime;
use Exception;

class RecipeSimpleMapper
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
                ($recipeSimple["submissionDate"] === null) ? null : new DateTime($recipeSimple["submissionDate"]),
                (bool)$recipeSimple["isPremium"],
                (int)$recipeSimple["status"],
                $recipeSimple["id"],
            );
        } catch (Exception $exception) {
            throw new RecipeSimpleMappingException($exception->getMessage());
        }
    }
}
