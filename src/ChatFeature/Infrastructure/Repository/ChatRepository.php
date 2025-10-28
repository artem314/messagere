<?php

namespace App\ChatFeature\Infrastructure\Repository;

use App\ChatFeature\Domain\Entity\Chat;
use App\ChatFeature\Domain\Repository\ChatRepositoryInterface;
use App\ChatFeature\Infrastructure\DataMapper\ChatDomainMapperInterface;
use App\ChatFeature\Infrastructure\DataMapper\ChatRequestMapperInterface;
use App\DataManagerFeatureApi\Service\ChatDataServiceInterface;

class ChatRepository implements ChatRepositoryInterface
{
    public function __construct(
        private ChatDataServiceInterface $dataService,
        private ChatDomainMapperInterface $domainMapper,
        private ChatRequestMapperInterface $requestMapper,
    ) {
    }

    public function save(Chat $chat): Chat
    {
        $requestDTO = $this->requestMapper->map($chat);
        $responseDTO = $this->dataService->save($requestDTO);

        return $this->domainMapper->map($responseDTO);
    }

    public function getById(string $id): ?Chat
    {
        $responseDTO = $this->dataService->getById($id);

        if (null !== $responseDTO) {
            return $this->domainMapper->map($responseDTO);
        }

        return null;
    }
}
