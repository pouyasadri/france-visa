// Reusable function to create a list of clickable links that scroll to sections
function createScrollLinks(containerSelector, listSelector, offset = 100) {
    const containerElement = document.querySelector(containerSelector);
    const listElement = containerElement.querySelector(listSelector);

    if (!containerElement || !listElement) {
        console.error("Container or list element not found.");
        return;
    }

    const fragment = document.createDocumentFragment();
    const sectionElements = containerElement.querySelectorAll("h3");

    sectionElements.forEach((section) => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-item-pointer", "mb-20");

        const link = document.createElement("a");
        link.textContent = section.textContent;

        link.addEventListener("click", () => {
            const offsetTop = section.offsetTop - offset;
            scrollToOffsetTop(offsetTop);
        });

        listItem.appendChild(link);
        fragment.appendChild(listItem);
    });

    listElement.appendChild(fragment);
}

// Reusable function to scroll to the specified offsetTop position with smooth behavior
function scrollToOffsetTop(offsetTop) {
    try {
        window.scrollTo({ top: offsetTop, behavior: "smooth" });
    } catch (error) {
        console.error("An error occurred while scrolling:", error);
    }
}

// Call the createScrollLinks function on DOM load
document.addEventListener("DOMContentLoaded", function() {
    createScrollLinks("#mydiv", "#board", 100);
});
