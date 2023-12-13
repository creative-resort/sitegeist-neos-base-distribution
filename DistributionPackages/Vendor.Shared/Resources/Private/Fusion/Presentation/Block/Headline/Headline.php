<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\Headline;

use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObject;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\StringLike;

#[Flow\Proxy(false)]
final class Headline extends AbstractComponentPresentationObject
{
    public function __construct(
        public readonly HeadlineVariant $variant,
        public readonly HeadlineType $type,
        public readonly StringLike $content
    ) {
    }
}