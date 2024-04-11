<?php

/*
 * This file is part of the Vendor.Shared package.
 */

declare(strict_types=1);

namespace Vendor\Shared\Presentation\Block\YouTubeVideo;

use GuzzleHttp\Psr7\Uri;
use PackageFactory\AtomicFusion\PresentationObjects\Fusion\AbstractComponentPresentationObjectFactory;
use PackageFactory\AtomicFusion\PresentationObjects\Presentation\Slot\SlotInterface;
use Sitegeist\Monocle\PresentationObjects\Domain\StyleguideCaseFactoryInterface;
use Vendor\Shared\Presentation\Block\Icon\Icon;
use Vendor\Shared\Presentation\Block\Icon\IconCollection;
use Vendor\Shared\Presentation\Block\Icon\IconColor;
use Vendor\Shared\Presentation\Block\Icon\IconName;
use Vendor\Shared\Presentation\Block\Icon\IconSize;
use Vendor\Shared\Presentation\Block\VimeoVideo\VimeoVideo;
use Vendor\Shared\Presentation\VideoAspectRatio;

final class YouTubeVideoFactory extends AbstractComponentPresentationObjectFactory implements
    StyleguideCaseFactoryInterface
{
    public function getDefaultCase(): SlotInterface
    {
        return new YouTubeVideo(
            VideoAspectRatio::RATIO_16_9,
            new Uri('https://www.youtube.com/watch?v=zLUUifu2WAs'),
            'zLUUifu2WAs',
            null,
            new Icon(
                IconName::NAME_ARROW_RIGHT,
                IconSize::SIZE_REGULAR,
                IconColor::COLOR_DEFAULT,
                IconCollection::COLLECTION_SHARED,
            ),
            null,
            null,
            false
        );
    }

    public function getUseCases(): \Traversable
    {
        return new \ArrayIterator([]);
    }
}
