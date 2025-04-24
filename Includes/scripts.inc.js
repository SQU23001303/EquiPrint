
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
          darkThemeStylesheet.disabled = false;
          lightThemeStylesheet.disabled = true;
          localStorage.setItem("theme", "dark");
          alert("🌙 Dark mode enabled");
        } else {
          darkThemeStylesheet.disabled = true;
          lightThemeStylesheet.disabled = false;
          localStorage.setItem("theme", "light");
          alert("☀️ Light mode enabled");
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

function openAccessibilityPage() {
    window.open("https://www.w3.org/WAI/standards-guidelines/", "_blank");
}

document.getElementById("highContrastBtn").addEventListener("click", function() {
    document.body.classList.toggle("high-contrast");

    // Save preference in local storage
    if (document.body.classList.contains("high-contrast")) {
        localStorage.setItem("highContrastMode", "enabled");
    } else {
        localStorage.removeItem("highContrastMode");
    }
});

// Apply stored preference on page load
if (localStorage.getItem("highContrastMode") === "enabled") {
    document.body.classList.add("high-contrast");
}
