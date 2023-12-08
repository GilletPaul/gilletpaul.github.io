const navbar = document.getElementById('navbar');

// Listen for the scroll event
window.addEventListener('scroll', () => {
    // Add the 'navbar-scrolled' class when the scroll position is greater than 50 pixels
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        // Remove the 'navbar-scrolled' class when the scroll position is less than 50 pixels
        navbar.classList.remove('navbar-scrolled');
    }
});