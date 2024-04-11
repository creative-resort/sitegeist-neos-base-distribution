import manifest from '@neos-project/neos-ui-extensibility';

import {VideoParser} from '../lib';

manifest('@vendor/shared-editors', {}, (globalRegistry) => {
	const editorsRegistry = globalRegistry.get('@sitegeist/inspectorgadget/editors');

	editorsRegistry.set(
		'Vendor\\Shared\\Domain\\PlatformVideoId',
		VideoParser
	);
});
