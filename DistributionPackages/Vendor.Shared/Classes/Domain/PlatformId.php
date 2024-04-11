<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Domain;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;

enum PlatformId: string implements \JsonSerializable
{
    case IDENTIFIER_YOUTUBE = 'YouTube';
    case IDENTIFIER_VIMEO = 'Vimeo';

    public function renderUri(string $identifier): UriInterface
    {
        return match ($this->value) {
            self::IDENTIFIER_VIMEO->value
                => new Uri('https://player.vimeo.com/video/' . $identifier . '?autoplay=1&autopause=0'),
            default => new Uri('https://www.youtube.com/embed/' . $identifier . '?controls=2&rel=0&autoplay=1')
        };
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
