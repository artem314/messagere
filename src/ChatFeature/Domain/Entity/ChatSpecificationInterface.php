<?php

namespace App\ChatFeature\Domain\Entity;

interface ChatSpecificationInterface
{
    public function getType(): string;

    public function getMaximumMembers(): int;
}
