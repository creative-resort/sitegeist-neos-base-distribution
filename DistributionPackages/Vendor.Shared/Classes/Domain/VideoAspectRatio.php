<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Domain;

enum VideoAspectRatio: string implements \JsonSerializable
{
    case RATIO_16_9 = 'ratio_16_9';
    case RATIO_16_10 = 'ratio_16_10';
    case RATIO_4_3 = 'ratio_4_3';

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
