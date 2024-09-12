<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\Text;

use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObject;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\StringLike;

#[Flow\Proxy(false)]
final readonly class Text extends AbstractComponentPresentationObject
{
    public function __construct(
        public TextColumns $columns,
        public StringLike $content
    ) {
    }
}
