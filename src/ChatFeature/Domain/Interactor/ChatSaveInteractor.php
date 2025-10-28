<?php

namespace App\ChatFeature\Domain\Interactor;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Repository\ChatRepositoryInterface;

class ChatSaveInteractor
{
    public function __construct(private ChatRepositoryInterface $repository)
    {
    }

    public function create(Chat $chat): Chat
    {
        return $this->repository->save($chat);
    }
}
