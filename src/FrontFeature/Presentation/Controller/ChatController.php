<?php

namespace App\FrontFeature\Presentation\Controller;

use App\ChatFeatureApi\DTORequestFactory\ChatCreateDTOFactoryInterface;
use App\ChatFeatureApi\Service\ChatServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/chat')]
final class ChatController extends AbstractController
{
    #[Route('', name: 'chat_index', methods: ['GET'])]
    public function index(Request $request, ChatServiceInterface $service, ChatCreateDTOFactoryInterface $factory): Response
    {
        $dto = $factory->create();

        $dto->setType('personal');

        $dto->setTitle('12345');

        $dto->setDescription('test');

        $service->create($dto);
        dd(1);
    }
}
