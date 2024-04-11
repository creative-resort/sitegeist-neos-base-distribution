export default ($node: Element):void => {
	if ($node instanceof HTMLElement) {
		const $iframe = $node.querySelector("[data-select=\"iframe\"]");
		const $text = $node.querySelector("[data-text]");
		if ($iframe instanceof HTMLIFrameElement) {
			$node.addEventListener("click", () => {
				const {src} = $iframe.dataset;
				$text?.classList.add("md:hidden");
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
