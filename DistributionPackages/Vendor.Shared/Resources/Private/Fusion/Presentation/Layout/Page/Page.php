<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Layout\Page;

use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObject;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\SlotInterface;

#[Flow\Proxy(false)]
final readonly class Page extends AbstractComponentPresentationObject
{
    public function __construct(
        public SlotInterface $content
    ) {
    }
}
