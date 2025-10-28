<?php

namespace App\MessageFeature\Application\Model;

use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeature\Domain\Interactor\MessageSaveInteractor;

class MessageManager implements MessageManagerInterface
{
    public function __construct(private MessageSaveInteractor $messageSaveInteractor)
    {
    }

    public function create(Message $message): Message
    {
        return $this->messageSaveInteractor->create($message);
    }
}
