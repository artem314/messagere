<?php

namespace App\ChatFeature\Infrastructure\DataMapper;

use App\ChatFeature\Domain\Entity\Chat;
use App\DataManagerFeatureApi\DTORequest\ChatDataRequestInterface;
use App\DataManagerFeatureApi\DTORequestFactory\ChatDataRequestFactoryInterface;

class ChatRequestMapper implements ChatRequestMapperInterface
{
    public function __construct(private ChatDataRequestFactoryInterface $chatDataRequestFactory)
    {
    }

    public function map(Chat $domainEntity): ChatDataRequestInterface
    {
        $requestModel = $this->chatDataRequestFactory->create();

        $requestModel->setType($domainEntity->getType());
        $requestModel->setTitle($domainEntity->getTitle()->getValue());
        $requestModel->setDescription($domainEntity->getDescription()->getValue());

        return $requestModel;
    }
}
