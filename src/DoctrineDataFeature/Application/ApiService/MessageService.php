<?php

namespace App\DoctrineDataFeature\Application\ApiService;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;
use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;
use App\DataManagerFeatureApi\Service\MessageDataServiceInterface;
use App\DoctrineDataFeature\Application\DataMapper\DataMapperInterface;
use App\DoctrineDataFeature\Domain\Entity\Message;
use App\DoctrineDataFeature\Domain\Repository\MessageRepositoryInterface;

class MessageService implements MessageDataServiceInterface
{
    public function __construct(
        private DataMapperInterface $dataMapper,
        private MessageRepositoryInterface $messageRepository)
    {
    }

    public function save(MessageDataRequestInterface $dtoRequest): MessageDataResponseInterface
    {
        $entity = $this->dataMapper->toEntity($dtoRequest);
        /* @var Message $entity */
        $this->messageRepository->save($entity);

        return $this->dataMapper->toResponse($entity);
    }

    public function getById(string $id): ?MessageDataResponseInterface
    {
        $entity = $this->messageRepository->getById($id);

        if ($entity) {
            return $this->dataMapper->toResponse($entity);
        }

        return null;
    }
}
