// include.js
document.addEventListener("DOMContentLoaded", () => {
    const includeElements = document.querySelectorAll('[data-include]');

    includeElements.forEach(async (el) => {
        const file = el.getAttribute("data-include");

        try {
            const response = await fetch(file);
            if (!response.ok) throw new Error("Network error");
            const content = await response.text();
            el.innerHTML = content;
        } catch (error) {
            console.error(`Include failed: ${file}`, error);
            el.innerHTML = `<p style="color:red;">Failed to load ${file}</p>`;
        }
    });
});
