
document.addEventListener("DOMContentLoaded", function () {
    // Your existing JavaScript code here

    // Show popup after a delay (e.g., 5 seconds)
    setTimeout(openPopup, 5000);

    function openPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
    }

    function closePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
    }
});
