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
 * Class ContentValue
 * Warning: data value object must be immutable.
 */
class ContentValue implements ValueObjectInterface
{
    private ?string $content;

    public function __construct(?string $content = null)
    {
        $this->content = $content;
    }

    public function getValue(): ?string
    {
        return $this->content;
    }

    public function __toString(): string
    {
        return $this->content;
    }
}
