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

namespace App\DataManagerFeatureApi\Service;

use App\DataManagerFeatureApi\DTORequest\MessageDataRequestInterface;
use App\DataManagerFeatureApi\DTOResponse\MessageDataResponseInterface;

/**
 * @api
 * Interface PostDataServiceInterface
 */
interface MessageDataServiceInterface
{
    public function save(MessageDataRequestInterface $dtoRequest): MessageDataResponseInterface;

    public function getById(string $id): ?MessageDataResponseInterface;
}
