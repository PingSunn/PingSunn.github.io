function navbar() {
    var navbar = document.getElementById('navbar');
    var scrollValue = window.scrollY;
    if (scrollValue > 100) {
        navbar.classList.add('scrollNav');
    } else {
        navbar.classList.remove('scrollNav');
    }
}

window.addEventListener('scroll', navbar);

function check() {
    var slider = document.getElementById("inputRange");
    var output2 = document.getElementById("inputValue");
    slider.oninput = function() {
        output2.value = this.value;
    }
    output2.oninput = function() {
        slider.value = this.value;
    }
}