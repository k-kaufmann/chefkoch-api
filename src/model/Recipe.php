<?php
declare(strict_types=1);

namespace chefkoch\model;

use DateTime;

class Recipe
{
    private string $id;
    private int $type;
    private string $title;
    private string $subtitle;
    private array $owner;
    private array $rating;
    private int $difficulty;
    private bool $hasImage;
    private bool $hasVideo;
    private string $previewImageId;
    private int $preparationTime;
    private bool $isSubmitted;
    private bool $isRejected;
    private DateTime $createdAt;
    private int $imageCount;
    private ?array $editor;
    private ?DateTime $submissionDate;
    private bool $isPremium;
    private int $status;
    private int $servings;
    private int $kCalories;
    private string $instructions;
    private string $miscellaneousText;
    private string $ingredientsText;
    private array $tags;
    private array $fullTags;
    private int $viewCount;
    private int $cookingTime;
    private int $restingTime;
    private int $totalTime;
    private array $ingredientsGroups;
    private array $categoryIds;
    private string $recipeVideoId;
    private bool $isIndexable;
    private string $siteUrl;

    public function __construct(
        string $id,
        int $type,
        string $title,
        string $subtitle,
        array $owner,
        array $rating,
        int $difficulty,
        bool $hasImage,
        bool $hasVideo,
        string $previewImageId,
        int $preparationTime,
        bool $isSubmitted,
        bool $isRejected,
        DateTime $createdAt,
        int $imageCount,
        ?array $editor,
        ?DateTime $submissionDate,
        bool $isPremium,
        int $status,
        int $servings,
        int $kCalories,
        string $instructions,
        string $miscellaneousText,
        string $ingredientsText,
        array $tags,
        array $fullTags,
        int $viewCount,
        int $cookingTime,
        int $restingTime,
        int $totalTime,
        array $ingredientsGroups,
        array $categoryIds,
        string $recipeVideoId,
        bool $isIndexable,
        string $siteUrl
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->owner = $owner;
        $this->rating = $rating;
        $this->difficulty = $difficulty;
        $this->hasImage = $hasImage;
        $this->hasVideo = $hasVideo;
        $this->previewImageId = $previewImageId;
        $this->preparationTime = $preparationTime;
        $this->isSubmitted = $isSubmitted;
        $this->isRejected = $isRejected;
        $this->createdAt = $createdAt;
        $this->imageCount = $imageCount;
        $this->editor = $editor;
        $this->submissionDate = $submissionDate;
        $this->isPremium = $isPremium;
        $this->status = $status;
        $this->servings = $servings;
        $this->kCalories = $kCalories;
        $this->instructions = $instructions;
        $this->miscellaneousText = $miscellaneousText;
        $this->ingredientsText = $ingredientsText;
        $this->tags = $tags;
        $this->fullTags = $fullTags;
        $this->viewCount = $viewCount;
        $this->cookingTime = $cookingTime;
        $this->restingTime = $restingTime;
        $this->totalTime = $totalTime;
        $this->ingredientsGroups = $ingredientsGroups;
        $this->categoryIds = $categoryIds;
        $this->recipeVideoId = $recipeVideoId;
        $this->isIndexable = $isIndexable;
        $this->siteUrl = $siteUrl;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function getOwner(): array
    {
        return $this->owner;
    }

    public function getRating(): array
    {
        return $this->rating;
    }

    public function getDifficulty(): int
    {
        return $this->difficulty;
    }

    public function hasImage(): bool
    {
        return $this->hasImage;
    }

    public function hasVideo(): bool
    {
        return $this->hasVideo;
    }

    public function getPreviewImageId(): string
    {
        return $this->previewImageId;
    }

    public function getPreparationTime(): int
    {
        return $this->preparationTime;
    }

    public function isSubmitted(): bool
    {
        return $this->isSubmitted;
    }

    public function isRejected(): bool
    {
        return $this->isRejected;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getImageCount(): int
    {
        return $this->imageCount;
    }

    public function getEditor(): ?array
    {
        return $this->editor;
    }

    public function getSubmissionDate(): ?DateTime
    {
        return $this->submissionDate;
    }

    public function isPremium(): bool
    {
        return $this->isPremium;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getServings(): int
    {
        return $this->servings;
    }

    private function getKCalories(): int
    {
        return $this->kCalories;
    }

    public function getInstructions(): string
    {
        return $this->instructions;
    }

    public function getMiscellaneousText(): string
    {
        return $this->miscellaneousText;
    }

    public function getIngredientsText(): string
    {
        return $this->ingredientsText;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function getFullTags(): array
    {
        return $this->fullTags;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function getCookingTime(): int
    {
        return $this->cookingTime;
    }

    public function getRestingTime(): int
    {
        return $this->restingTime;
    }

    public function getTotalTime(): int
    {
        return $this->totalTime;
    }

    public function getIngredientsGroups(): array
    {
        return $this->ingredientsGroups;
    }

    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }

    public function getRecipeVideoId(): string
    {
        return $this->recipeVideoId;
    }

    public function isIndexable(): bool
    {
        return $this->isIndexable;
    }

    public function getSiteUrl(): string
    {
        return $this->siteUrl;
    }

}
