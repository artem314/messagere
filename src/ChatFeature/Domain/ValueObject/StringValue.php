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

namespace App\ChatFeature\Domain\ValueObject;

/**
 * Class ContentValue
 * Warning: data value object must be immutable.
 */
class StringValue implements ValueObjectInterface
{
    private ?string $text;

    public function __construct(?string $text = null)
    {
        $this->text = $text;
    }

    public function getValue(): ?string
    {
        return $this->text;
    }
}
