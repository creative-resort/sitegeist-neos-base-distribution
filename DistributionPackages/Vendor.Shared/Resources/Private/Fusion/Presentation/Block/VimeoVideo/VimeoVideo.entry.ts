export default ($node: Element):void => {
	if ($node instanceof HTMLElement) {
		const $iframe = $node.querySelector("[data-select=\"iframe\"]");

		if ($iframe instanceof HTMLIFrameElement) {
			$node.addEventListener("click", () => {
				const {src} = $iframe.dataset;

				if (src) {
					$iframe.src = src;
					Array.from($iframe.parentElement?.children ?? []).forEach($node => {
						if ($node !== $iframe) {
							$node.parentElement?.removeChild($node);
						}
					});
				}
			}, {once: true});
		}
	}
};
