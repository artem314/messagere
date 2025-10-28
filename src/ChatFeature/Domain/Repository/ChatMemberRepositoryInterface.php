<?php

namespace App\ChatFeature\Domain\Repository;

use App\ChatFeature\Domain\Entity\ChatMember;

interface ChatMemberRepositoryInterface
{
    public function save(ChatMember $chatMember): ChatMember;

    public function getChatMember(string $chatId, string $memberId): ?ChatMember;

    public function getChatMemberCount(string $chatId): int;
}
