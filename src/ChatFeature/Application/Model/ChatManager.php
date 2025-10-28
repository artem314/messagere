<?php

namespace App\ChatFeature\Application\Model;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Interactor\ChatLoadInteractor;
use App\ChatFeature\Domain\Interactor\ChatSaveInteractor;

class ChatManager implements ChatManagerInterface
{
    public function __construct(private ChatSaveInteractor $chatSaveInteractor, private ChatLoadInteractor $chatLoadInteractor)
    {
    }

    public function getById(string $id): ?Chat
    {
        // TODO: Implement getById() method.
    }

    public function create(Chat $chat): Chat
    {
        return $this->chatSaveInteractor->create($chat);
    }
}
