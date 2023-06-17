jQuery(function () {
    jQuery('.htc-slider').slick();
})

let startCount = false;
jQuery(window).on('scroll', function () {
    if (!startCount && jQuery(window).scrollTop() >= jQuery(
        '.htc-home-sales').offset().top + jQuery('.htc-home-sales').
            outerHeight() - window.innerHeight) {
        startCount = true;
        const counters = document.querySelectorAll('.value');
        const speed = 1000;
        counters.forEach(counter => {
            const animate = () => {
                const value = +counter.getAttribute('akhi');
                const data = +counter.innerText;

                const time = value / speed;
                if (data < value) {
                    counter.innerText = Math.ceil(data + time);
                    setTimeout(animate, 1);
                } else {
                    counter.innerText = value;
                }

            }
            animate();
        });
    }
});