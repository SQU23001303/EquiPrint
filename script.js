const button = document.querySelector('.accessibility-button');

button.addEventListener('click', () => {
  // Toggle Dark Mode
  document.body.classList.toggle('dark-mode');
  
  // Toggle Font Size (Example: Increase font size by 2px)
  document.body.style.fontSize = document.body.style.fontSize === '18px' ? '16px' : '18px';
});


document.getElementById("logoButton").addEventListener("click", function() {
  window.location.href = "index.php"; // Change this to your homepage URL if different
});