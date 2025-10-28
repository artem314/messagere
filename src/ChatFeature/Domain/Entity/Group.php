<?php

namespace App\ChatFeature\Domain\Entity;

class Group implements ChatSpecificationInterface
{
    public const NAME = 'group';

    private GroupMaxMembers $maximumMembers;

    public function __construct()
    {
        $this->maximumMembers = new GroupMaxMembers();
    }

    public function getType(): string
    {
        return self::NAME;
    }

    public function getMaximumMembers(): int
    {
        return $this->maximumMembers->getMaximumMembers();
    }
}
