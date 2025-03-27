function toggleDropdown(button) {
    var container = button.parentElement; // Get the clicked dropdown container
    var content = container.querySelector(".dropdown-content");
    var icon = button.querySelector(".icon");

    if (container.classList.contains("open")) {
        container.classList.remove("open");
        icon.textContent = "+";
    } else {
        container.classList.add("open");
        icon.textContent = "✖";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const darkModeToggle = document.getElementById("darkModeToggle");
    const themeStylesheet = document.getElementById("themeStylesheet");

    // Check if the user has a saved preference in localStorage
    if (localStorage.getItem("theme") === "dark") {
        themeStylesheet.href = "dark-mode.css";
    }

    darkModeToggle.addEventListener("click", function () {
        if (themeStylesheet.getAttribute("href") === "light-mode.css") {
            themeStylesheet.href = "dark-mode.css";
            localStorage.setItem("theme", "dark");
        } else {
            themeStylesheet.href = "light-mode.css";
            localStorage.setItem("theme", "light");
        }
    });
});