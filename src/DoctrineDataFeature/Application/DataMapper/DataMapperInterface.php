<?php

namespace App\DoctrineDataFeature\Application\DataMapper;

use App\DoctrineDataFeature\Application\DTORequest\DataRequestInterface;
use App\DoctrineDataFeature\Application\DTOResponse\DataResponseInterface;

interface DataMapperInterface
{
    public function toEntity(DataRequestInterface $request): object;

    public function toResponse(object $entity): DataResponseInterface;
}
