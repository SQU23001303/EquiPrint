function toggleDropdown() {
    var container = document.getElementById("dropdownContainer");
    var content = document.getElementById("dropdownContent");
    var icon = document.getElementById("icon");

    if (container.classList.contains("open")) {
        container.classList.remove("open");
        icon.textContent = "+";
    } else {
        container.classList.add("open");
        icon.textContent = "✖";
    }
}
