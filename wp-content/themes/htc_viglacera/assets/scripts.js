jQuery(function () {
    jQuery('.htc-slider').slick();

    jQuery('.htc-image-thumbnail').on('click', function () {
        const elId = jQuery(this).attr('id');
        jQuery('.htc-image-thumbnail').removeClass('active');
        jQuery(`#${elId}`).addClass('active');
        jQuery('.htc-image-preview').attr('src', jQuery(`#${elId} img`).attr('src'));
    })

    jQuery(".htc-scroll-top").on('click', function () {
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    })
    window.setTimeout(() => {
        jQuery('.htc-loading').fadeOut(300)
    }, 600)
})

let startCount = false;
jQuery(window).on('scroll', function () {
    if (!startCount && jQuery(
        '.htc-home-sales').length && jQuery(window).scrollTop() >= jQuery(
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

    if (jQuery(window).scrollTop() > 200) {
        jQuery(".htc-scroll-top").addClass('show');
    } else {
        jQuery(".htc-scroll-top").removeClass('show');
    }
});
