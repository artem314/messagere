<?php

namespace App\MessageFeature\Infrastructure\Repository;

use App\DataManagerFeatureApi\Service\MessageDataServiceInterface;
use App\MessageFeature\Domain\Entity\Message;
use App\MessageFeature\Domain\Repository\MessageRepositoryInterface;
use App\MessageFeature\Infrastructure\DataMapper\MessageDomainMapperInterface;
use App\MessageFeature\Infrastructure\DataMapper\MessageRequestMapperInterface;

class MessageRepository implements MessageRepositoryInterface
{
    public function __construct(
        private MessageDataServiceInterface $messageDataService,
        private MessageRequestMapperInterface $messageRequestMapper,
        private MessageDomainMapperInterface $messageDomainRequestMapper,
    ) {
    }

    public function save(Message $message): Message
    {
        $requestDTO = $this->messageRequestMapper->map($message);
        $responseDTO = $this->messageDataService->save($requestDTO);

        return $this->messageDomainRequestMapper->map($responseDTO);
    }

    public function getById(string $id): ?Message
    {
        $responseDTO = $this->messageDataService->getById($id);

        if ($responseDTO) {
            return $this->messageDomainRequestMapper->map($responseDTO);
        }

        return null;
    }
}
