<?php

namespace App\ChatFeature\Domain\Entity;

class PersonalMaxMembers implements MaximumMembersInterface
{
    public function getMaximumMembers(): int
    {
        return 2;
    }
}
