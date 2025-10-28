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

namespace App\MessageFeature\Domain\ValueObject;

/**
 * Class StatusValue
 * Warning: data value object must be immutable.
 */
class PublishedValue implements ValueObjectInterface
{
    private bool $status;

    public function __construct(bool $status)
    {
        $this->status = $status;
    }

    public function getValue(): bool
    {
        return $this->status;
    }

    public function __toString(): string
    {
        return (string) $this->status;
    }
}
