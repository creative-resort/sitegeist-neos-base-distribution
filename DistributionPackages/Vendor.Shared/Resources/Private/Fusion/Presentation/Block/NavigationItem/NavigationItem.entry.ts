export default ($node: HTMLElement):void => {
	if ($node instanceof HTMLElement) {
		const tabElements = $node.querySelectorAll("[data-secondlevel-index]");
		const contentElements = $node.querySelectorAll("[data-secondlevel-data-index]");

		if (tabElements && tabElements.length > 0) {
			tabElements.forEach((tab) => {
				tab.addEventListener("click", () => {
					if (tab instanceof HTMLElement) {
						const selectedIndex = parseInt(tab.dataset.secondlevelIndex ?? "-1");

						// nur den geklickten aktiviert darstellen
						tabElements.forEach((container, index) => {
							const label = container.querySelector("div");
							if (label) {
								label.classList.toggle("border-b-4", index === selectedIndex);
								label.classList.toggle("border-brand-light", index === selectedIndex);
								label.classList.toggle("opacity-50", index !== selectedIndex);
							}
						});

						// alle Bereiche verstecken, nur den gewünschten anzeigen
						if (selectedIndex >= 0) {
							contentElements?.forEach((container) => {
								if (container instanceof HTMLElement) {
									container.classList.toggle(
										"hidden",
										selectedIndex !== parseInt(container.dataset.secondlevelDataIndex ?? "")
									);
								}
							});
						}
					}
				});
			});
		}
	}
};
