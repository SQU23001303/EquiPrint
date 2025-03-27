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
