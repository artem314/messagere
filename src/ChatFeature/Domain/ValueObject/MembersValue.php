<?php

namespace App\ChatFeature\Domain\ValueObject;

use App\ChatFeature\Domain\Entity\ChatMember;

class MembersValue implements ValueObjectInterface
{
    private array $members = [];

    public function __construct(array $members)
    {
        $this->members = $members;
    }

    public function add(ChatMember $member): void
    {
        $this->members[] = $member;
    }

    public function getValue(): mixed
    {
        return $this->members;
    }
}
