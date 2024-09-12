<?php

/*
 * This file is part of the Vendor.SupportWheelInventor package.
 */

declare(strict_types=1);

namespace Vendor\SupportWheelInventor\Integration;

use Neos\ContentRepository\Core\Projection\ContentGraph\ContentSubgraphInterface;
use Neos\ContentRepository\Core\Projection\ContentGraph\Node;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObjectFactory;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\SlotInterface;

final class ContentSlotFactory extends AbstractComponentPresentationObjectFactory
{
    public function forContentNode(
        Node $contentNode,
        Node $documentNode,
        Node $site,
        ContentSubgraphInterface $subgraph,
        bool $inBackend
    ): SlotInterface {
        return match ($contentNode->nodeTypeName->value) {
            default => throw new \InvalidArgumentException(
                'Don\'t know how to render nodes of type ' . $contentNode->nodeTypeName->value,
                1726130732
            )
        };
    }
}
