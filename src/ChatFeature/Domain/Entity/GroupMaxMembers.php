<?php

namespace App\ChatFeature\Domain\Entity;

class GroupMaxMembers implements MaximumMembersInterface
{
    public function getMaximumMembers(): int
    {
        return 200;
    }
}
