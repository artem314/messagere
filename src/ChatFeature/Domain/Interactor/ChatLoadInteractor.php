<?php

namespace App\ChatFeature\Domain\Interactor;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Repository\ChatRepositoryInterface;

class ChatLoadInteractor
{
    public function __construct(private ChatRepositoryInterface $repository)
    {
    }

    public function getById(string $id): ?Chat
    {
        return $this->repository->getById($id);
    }
}
