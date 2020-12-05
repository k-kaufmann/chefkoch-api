<?php
declare(strict_types=1);

namespace chefkoch\model;

class User
{
    private string $id;
    private string $name;
    private int $rank;
    private string $role;
    private bool $hasAvatar;
    private bool $hasPaid;
    private bool $deleted;

    public function __construct(
        string $id,
        string $name,
        int $rank,
        string $role,
        bool $hasAvatar,
        bool $hasPaid,
        bool $deleted
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->rank = $rank;
        $this->role = $role;
        $this->hasAvatar = $hasAvatar;
        $this->hasPaid = $hasPaid;
        $this->deleted = $deleted;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRank(): int
    {
        return $this->rank;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function isHasAvatar(): bool
    {
        return $this->hasAvatar;
    }

    public function isHasPaid(): bool
    {
        return $this->hasPaid;
    }

    public function isDeleted(): bool
    {
        return $this->deleted;
    }
}
