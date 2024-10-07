<?php

/*
 * This file is part of the Vendor.SupportWheelInventor package.
 */

declare(strict_types=1);

namespace Vendor\SupportWheelInventor\Integration;

use Neos\ContentRepository\Domain\Model\Node;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObjectFactory;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\Value;
use Sitegeist\Archaeopteryx\Link as ArchaeopteryxLink;
use Vendor\Shared\Presentation\Block\Link\Link;
use Vendor\Shared\Presentation\Block\Link\LinkTarget;
use Vendor\Shared\Presentation\Block\Link\LinkVariant;
use Vendor\Shared\Presentation\Block\SiteHeader\SiteHeader;

final class SiteHeaderFactory extends AbstractComponentPresentationObjectFactory
{
    public function __construct(
        private readonly NavigationItemFactory $navigationItemFactory
    ) {
    }

    public function forDocumentNode(
        Node $documentNode,
        Node $site,
        bool $inBackend
    ): SiteHeader {
        return new SiteHeader(
            new Link(
                LinkVariant::VARIANT_REGULAR,
                ArchaeopteryxLink::create(
                    $this->uriService->getNodeUri($site),
                    $site->getProperty('title'),
                    LinkTarget::TARGET_SELF->value,
                    ['noopener', 'nofollow'],
                ),
                Value::fromString('Home'),
                $inBackend
            ),
            $this->navigationItemFactory->forNavigationNode(
                $site,
                $documentNode,
                1
            )[0] ?? null,
        );
    }
}
