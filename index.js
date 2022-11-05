function navbar() {
    var navbar = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    console.log(scrollValue);

    if (scrollValue > 100) {
        navbar.classList.add('scrollNav');
    } else {
        navbar.classList.remove('scrollNav');
    }
}

window.addEventListener('scroll', navbar);