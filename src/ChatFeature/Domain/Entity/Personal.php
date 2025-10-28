<?php

namespace App\ChatFeature\Domain\Entity;

class Personal implements ChatSpecificationInterface
{
    public const NAME = 'personal';

    private PersonalMaxMembers $maximumMembers;

    public function __construct()
    {
        $this->maximumMembers = new PersonalMaxMembers();
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
