<?php

declare(strict_types=1);

namespace Vendor\SupportWheelInventor\Integration;

use Neos\ContentRepository\Core\Projection\ContentGraph\Node;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObjectFactory;
use Vendor\Shared\Presentation\Block\SiteFooter\SiteFooter;

final class SiteFooterFactory extends AbstractComponentPresentationObjectFactory
{
    public function forSite(
        Node $site
    ): SiteFooter {
        return new SiteFooter();
    }
}
