<?php

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\Icon;

use Neos\Eel\ProtectedContextAwareInterface;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\StringComponentVariant;

enum IconName: string implements ProtectedContextAwareInterface
{
    use StringComponentVariant;

    case NAME_ARROW_RIGHT = 'arrow_right';
    case NAME_DASH = 'dash';
    case NAME_PLUS = 'plus';
}
