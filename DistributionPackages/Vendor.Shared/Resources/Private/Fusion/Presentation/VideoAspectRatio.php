<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Presentation;

use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\StringComponentVariant;

#[Flow\Proxy(false)]
enum VideoAspectRatio: string implements ProtectedContextAwareInterface
{
    use StringComponentVariant;

    case RATIO_16_9 = 'ratio_16_9';
    case RATIO_16_10 = 'ratio_16_10';
    case RATIO_4_3 = 'ratio_4_3';
}
