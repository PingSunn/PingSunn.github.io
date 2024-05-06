document.addEventListener("DOMContentLoaded", function() {
    // JavaScript code here
    // Add your JavaScript code here
    function showImage(imageUrl) {
        // Display the popup
        var popup = document.getElementById('imagePopup');
        popup.style.display = 'flex';

        // Set the image source
        var popupImage = document.getElementById('popupImage');
        popupImage.src = imageUrl;
    }

    // Close the popup when clicked outside the image
    document.getElementById('imagePopup').addEventListener('click', function(event) {
        if (event.target === this) {
            this.style.display = 'none';
        }
    });
});