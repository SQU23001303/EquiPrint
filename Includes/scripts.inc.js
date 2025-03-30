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
    const lightThemeStylesheet = document.getElementById("lightThemeStylesheet");
    const darkThemeStylesheet = document.getElementById("darkThemeStylesheet");

    // Check if the user has a saved preference in localStorage
    if (localStorage.getItem("theme") === "dark") {
        darkThemeStylesheet.disabled = false;
        lightThemeStylesheet.disabled = true;
    }

    darkModeToggle.addEventListener("click", function () {
        if (darkThemeStylesheet.disabled) {
            // Enable dark theme and disable light theme
            darkThemeStylesheet.disabled = false;
            lightThemeStylesheet.disabled = true;
            localStorage.setItem("theme", "dark");
        } else {
            // Enable light theme and disable dark theme
            darkThemeStylesheet.disabled = true;
            lightThemeStylesheet.disabled = false;
            localStorage.setItem("theme", "light");
        }
    });
});

let enlarged = false; // Track state

  function toggleFontSize() {
    if (enlarged) {
      document.body.style.fontSize = "100%"; // Reset
    } else {
      document.body.style.fontSize = "125%"; // Enlarge
    }
    enlarged = !enlarged; // Toggle state
  }
