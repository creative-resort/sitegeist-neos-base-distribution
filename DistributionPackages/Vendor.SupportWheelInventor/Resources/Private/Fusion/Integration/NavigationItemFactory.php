<?php

/*
 * This file is part of the Nordmann.Shared package.
 */

declare(strict_types=1);

namespace Vendor\SupportWheelInventor\Integration;

use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Projection\Content\TraversableNodeInterface;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObjectFactory;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\Value;
use Vendor\Shared\Presentation\Block\NavigationItem\NavigationItem;
use Vendor\Shared\Presentation\Block\NavigationItem\NavigationItems;

final class NavigationItemFactory extends AbstractComponentPresentationObjectFactory
{
    public const MAX_NAVIGATION_DEPTH = 2;
    public const MAX_ITEMS_PER_COLUMN = 6;

    /**
     * @return array<int,NavigationItems>|null
     */
    public function forNavigationNode(
        TraversableNodeInterface $rootNode,
        TraversableNodeInterface $currentDocumentNode,
        int $currentLevel
    ): ?array {
        if ($currentLevel <= self::MAX_NAVIGATION_DEPTH) {
            $childNodes = array_filter(
                array_map(
                    function (
                        TraversableNodeInterface $node
                    ) use (
                        $currentDocumentNode,
                        $currentLevel
                    ): ?NavigationItem {
                        if ($node instanceof NodeInterface && $node->isHiddenInIndex()) {
                            return null;
                        }
                        try {
                            return new NavigationItem(
                                $this->uriService->getNodeUri($node),
                                Value::fromString($node->getLabel()),
                                \mb_strpos(
                                    (string)$currentDocumentNode->findNodePath(),
                                    (string)$node->findNodePath()
                                ) === 0,
                                $this->forNavigationNode(
                                    $node,
                                    $currentDocumentNode,
                                    ++$currentLevel
                                )
                            );
                        } catch (\Exception) {
                            return null;
                        }
                    },
                    $this->findChildNodesByNodeTypeFilterString(
                        $rootNode,
                        'Vendor.SupportWheelInventor:Tag.MainNavigationElement'
                    )->toArray()
                )
            );

            if ($currentLevel > 1) {
                return array_map(
                    fn (array $columnItems): NavigationItems
                    => new NavigationItems(...$columnItems),
                    array_chunk($childNodes, self::MAX_ITEMS_PER_COLUMN)
                );
            }

            return [new NavigationItems(... $childNodes)];
        }
        return null;
    }
}
