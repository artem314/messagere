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
 * Class SlugValue
 * Warning: data value object must be immutable.
 */
class SlugValue implements ValueObjectInterface
{
    private ?string $slug;

    public function __construct(?string $slug = null)
    {
        $this->slug = $slug;
    }

    public function getValue(): ?string
    {
        return $this->slug;
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}
