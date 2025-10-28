<?php

namespace App\MessageFeature\Domain\Interactor;

use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeature\Domain\Repository\MessageRepositoryInterface;

final class MessageSaveInteractor
{
    public function __construct(
        private MessageRepositoryInterface $messageRepository,
    ) {
    }

    public function create(Message $message): Message
    {
        if (null !== $message->getId()->getValue()) {
            throw new \Exception('Message already exists');
        }

        $this->messageRepository->save($message);

        return $message;
    }

    public function update(Message $message): Message
    {
        if (null === $message->getId()->getValue()) {
            throw new \Exception('Message id not set');
        }

        $this->messageRepository->save($message);

        return $message;
    }
}
