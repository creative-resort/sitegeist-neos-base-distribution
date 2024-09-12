<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\Link;

use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObject;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\SlotInterface;
use Psr\Http\Message\UriInterface;

#[Flow\Proxy(false)]
final readonly class Link extends AbstractComponentPresentationObject
{
    public function __construct(
        public LinkVariant $variant,
        public UriInterface $href,
        public LinkTarget $target,
        public string $title,
        public SlotInterface $content,
        public bool $inBackend
    ) {
    }
}
