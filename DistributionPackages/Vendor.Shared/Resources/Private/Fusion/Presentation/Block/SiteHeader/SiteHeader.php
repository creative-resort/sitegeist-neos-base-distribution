<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\SiteHeader;

use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObject;
use Vendor\Shared\Presentation\Block\Link\Link;
use Vendor\Shared\Presentation\Block\NavigationItem\NavigationItems;

#[Flow\Proxy(false)]
final class SiteHeader extends AbstractComponentPresentationObject
{
    public function __construct(
        public readonly Link $homeLink,
        public readonly ?NavigationItems $mainNavigationItems
    ) {
    }
}
