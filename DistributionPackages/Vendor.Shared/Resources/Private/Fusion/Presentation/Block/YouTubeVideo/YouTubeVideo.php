<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\YouTubeVideo;

use Neos\Flow\Annotations as Flow;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObject;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\SlotInterface;
use Psr\Http\Message\UriInterface;
use Vendor\Shared\Presentation\Block\Figure\Figure;
use Vendor\Shared\Presentation\Block\Headline\Headline;
use Vendor\Shared\Presentation\Block\Icon\Icon;
use Vendor\Shared\Presentation\Block\Text\Text;
use Vendor\Shared\Presentation\VideoAspectRatio;

#[Flow\Proxy(false)]
final class YouTubeVideo extends AbstractComponentPresentationObject
{
    public function __construct(
        public readonly VideoAspectRatio $aspectRatio,
        public readonly UriInterface $iframeSrc,
        public readonly string $identifier,
        public readonly ?Figure $poster,
        public readonly Icon $playIcon,
        public readonly ?Headline $headline,
        public readonly ?Text $text,
        public readonly bool $inBackend
    ) {
    }
}
