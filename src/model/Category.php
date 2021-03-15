<?php
declare(strict_types=1);

namespace chefkoch\model;

class Category
{
    private string $id;
    private string $title;
    private ?string $parentId;
    private int $level;
    private string $descriptionText;
    private string $linkName;

    public function __construct(
        string $id,
        string $title,
        ?string $parentId,
        int $level,
        string $descriptionText,
        string $linkName
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->parentId = $parentId;
        $this->level = $level;
        $this->descriptionText = $descriptionText;
        $this->linkName = $linkName;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getDescriptionText(): string
    {
        return $this->descriptionText;
    }

    public function getLinkName(): string
    {
        return $this->linkName;
    }
}
