<?php
declare(strict_types=1);

namespace chefkoch\mapper;

use chefkoch\model\Category;

class CategoryMapper
{
    public function mapArray(array $category): Category
    {
        return new Category(
            $category["id"],
            $category["title"],
            ($category["parentId"] === null) ? null : $category["parentId"],
            (int)$category["level"],
            $category["descriptionText"],
            $category["linkName"],
        );
    }
}
