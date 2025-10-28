<?php

/**
 * NOTICE OF LICENSE.
 *
 * This source file is subject to the GNU General Public License v3 (GPL 3.0)
 * It is available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License v3 (GPL 3.0)
 */

declare(strict_types=1);

namespace App\ChatFeature\Application\DTORequestValidator;

use App\ChatFeature\Application\DTORequest\ChatRequestDTOInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class PostValidator.
 */
class ChatValidator implements ChatValidatorInterface
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Primary request validation (input). Other validation must be in interactors.
     * Interactors are responsible for business logic validation.
     */
    public function validate(ChatRequestDTOInterface $dto): array
    {
        $violations = [];
        $violationList = $this->validator->validate($dto);

        foreach ($violationList as $violation) {
            $violations[$violation->getPropertyPath()][] = $violation->getMessage();
        }

        return $violations;
    }
}
