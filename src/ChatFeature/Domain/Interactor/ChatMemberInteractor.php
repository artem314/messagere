<?php

namespace App\ChatFeature\Domain\Interactor;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Entity\ChatMember;
use App\ChatFeature\Domain\Repository\ChatMemberRepositoryInterface;

class ChatMemberInteractor
{
    public function __construct(private ChatMemberRepositoryInterface $repository)
    {
    }

    public function addChatMember(Chat $chat, ChatMember $chatMember): void
    {
        /*
         * TODO на подумать
         * можно поспорить с уместностью данной проверки в use case,
         * однако проверка в валидаторе, маппере, а особенно в фиче данных не несет особого логического смысла.
         * С другой стороны, use case это реализация единого языка бизнес логики, и тогда можно это читать так:
         * нельзя создать участника чата, если чат не существует, это утверждение принимается как неотьемлемая часть бизнес-процесса
         * и тогда сомнения о правильности местонахождения проверки отпадают
         * */
        if (null === $chat->getId()->getValue()) {
            throw new \Exception('chat not exist');
        }

        $chatMembersCount = $this->repository->getChatMemberCount($chat->getId()->getValue());

        if ($chatMembersCount === $chat->getMaximumMembers()) {
            throw new \Exception("Maximum number of members is {$chat->getMaximumMembers()}");
        }

        $chatMember = $this->repository->getChatMember($chat->getId()->getValue(), $chatMember->getId()->getValue());

        if (null === !$chatMember) {
            throw new \Exception('ChatMember already exist');
        }

        $this->repository->save($chatMember);
    }
}
