function setupTabs() {
    document.querySelectorAll(".tabs-button").forEach(button => {
        button.addEventListener("click", () => {
            const topBar = button.parentElement.parentElement;
            const tabsContainer = topBar.parentElement;
            const tabType = button.dataset.forTab;
            const tabToActivate = tabsContainer.querySelector(`.tabs-content[data-tab="${tabType}"]`);

            topBar.querySelectorAll(".tabs-button").forEach(button => {
                button.classList.remove("tabs-button-active");
            });

            tabsContainer.querySelectorAll(".tabs-content").forEach(tab => {
                tab.classList.remove("tabs-content-active");
            });

            button.classList.add("tabs-button-active");
            tabToActivate.classList.add("tabs-content-active");
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    setupTabs();

    // Load the first element of the tab by clicking on the first button
    document.querySelectorAll(".tabs").forEach(tabsContainer => {
        tabsContainer.querySelector(".tabs-topbar .tabs-button").click();
    });
});

