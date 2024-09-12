<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\Icon;

use Neos\Eel\ProtectedContextAwareInterface;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\StringComponentVariant;

enum IconCollection: string implements ProtectedContextAwareInterface
{
    use StringComponentVariant;

    case COLLECTION_SHARED = 'shared';
}
