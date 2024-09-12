<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Layout\ContentContainer;

use Neos\Eel\ProtectedContextAwareInterface;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\StringComponentVariant;

enum ContentContainerVariant: string implements ProtectedContextAwareInterface
{
    use StringComponentVariant;

    case VARIANT_NONE = 'none';
    case VARIANT_REGULAR = 'regular';
    case VARIANT_REVERSE_ORDER = 'reverseOrder';
}
