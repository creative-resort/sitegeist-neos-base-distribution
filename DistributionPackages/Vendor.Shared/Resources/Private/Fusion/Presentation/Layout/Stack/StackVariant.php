<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Layout\Stack;

use Neos\Eel\ProtectedContextAwareInterface;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\StringComponentVariant;

enum StackVariant: string implements ProtectedContextAwareInterface
{
    use StringComponentVariant;

    case VARIANT_REGULAR = 'regular';
    case VARIANT_SPACE_Y_4 = 'spaceY4';
    case VARIANT_HORIZONTAL_CENTERED = 'horizontal_centered';
}
