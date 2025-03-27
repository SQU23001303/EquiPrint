function toggleDropdown() {
    var content = document.getElementById("dropdownContent");
    var icon = document.getElementById("icon");

    if (content.style.display === "block") {
        content.style.display = "none";
        icon.textContent = "+";  // Change back to plus
    } else {
        content.style.display = "block";
        icon.textContent = "✖";  // Change to X
    }
}