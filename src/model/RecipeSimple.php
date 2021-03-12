<?php
declare(strict_types=1);

namespace chefkoch\model;

use DateTime;

class RecipeSimple
{
    private string $id;
    private int $type;
    private string $title;
    private string $subTitle;
    private array $owner;
    private ?array $rating;
    private int $difficulty;
    private bool $hasImage;
    private bool $hasVideo;
    private ?string $previewImageId;
    private int $preparationTime;
    private bool $isSubmitted;
    private bool $isRejected;
    private DateTime $createdAt;
    private int $imageCount;
    private ?string $editor;
    private ?DateTime $submissionDate;
    private bool $isPremium;
    private int $status;
    private string $siteUrl;

    public function __construct(
        string $id,
        int $type,
        string $title,
        string $subtitle,
        array $owner,
        ?array $rating,
        int $difficulty,
        bool $hasImage,
        bool $hasVideo,
        ?string $previewImageId,
        int $preparationTime,
        bool $isSubmitted,
        bool $isRejected,
        DateTime $createdAt,
        int $imageCount,
        ?string $editor,
        ?DateTime $submissionDate,
        bool $isPremium,
        int $status,
        string $siteUrl
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->title = $title;
        $this->subTitle = $subtitle;
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

    public function getSubTitle(): string
    {
        return $this->subTitle;
    }

    public function getOwner(): array
    {
        return $this->owner;
    }

    public function getRating(): ?array
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

    public function getPreviewImageId(): ?string
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

    public function getEditor(): ?string
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

    public function getSiteUrl(): string
    {
        return $this->siteUrl;
    }


}
