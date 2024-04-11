<?php

declare(strict_types=1);

namespace Vendor\Shared\Domain;

/*
 * This file is part of the Vendor.Shared package.
 */

use Neos\Flow\Annotations as Flow;
use Psr\Http\Message\UriInterface;

#[Flow\Proxy(false)]
final class PlatformVideoId implements \JsonSerializable
{
    public function __construct(
        public readonly PlatformId $platformId,
        public readonly string $id,
        public readonly VideoAspectRatio $aspectRatio
    ) {
    }

    /**
     * @param array<string,string> $array
     */
    public static function fromArray(array $array): self
    {
        return new self(
            PlatformId::from($array['platformId']),
            $array['id'],
            VideoAspectRatio::from($array['aspectRatio'])
        );
    }

    public function renderUri(): UriInterface
    {
        return $this->platformId->renderUri($this->id);
    }

    /**
     * @return array<string,mixed>
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
