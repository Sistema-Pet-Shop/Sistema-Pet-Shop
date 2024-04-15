document.addEventListener('DOMContentLoaded', function () {
    var elements = document.querySelectorAll('.col-md-3');

    elements.forEach(function (element, index) {
        ScrollReveal().reveal(element, {
            delay: 300 * index,
            distance: '50px',
            origin: 'left',
            interval: 100
        });
    });
});
