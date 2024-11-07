<?php

/*
 * This file is part of the EulerHermes.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\NavigationItem;

use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObjectFactory;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\SlotInterface;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\Value;
use Sitegeist\Monocle\PresentationObjects\Domain\StyleguideCaseFactoryInterface;

final class NavigationItemFactory extends AbstractComponentPresentationObjectFactory implements
    StyleguideCaseFactoryInterface
{
    public function getDefaultCase(): SlotInterface
    {
        return Value::fromString('Main Navigation');
    }

    public function getUseCases(): \Traversable
    {
        return new \ArrayIterator([]);
    }
}
